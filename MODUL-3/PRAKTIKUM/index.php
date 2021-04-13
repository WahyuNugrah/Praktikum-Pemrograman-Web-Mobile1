<?php 
//menghubungkan file functions
require 'functions.php';

$karyawan = query("SELECT * FROM Karyawan");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Modul 3</title>
</head>
<body>

<h1>Daftar Karyawan</h1>
<a href="tambah.php">Tambah data Karyawan</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>NRP</th>
		<th>Jabatan</th>
		<th>Email</th>
		<th>gambar</th>	
	</tr>

	<?php $i = 1; ?>
	<?php  foreach ($karyawan as $row): ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin?');">hapus</a>
		</td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["Jabatan"] ?></td>
		<td><?= $row["email"] ?></td>
		<td><img src="img/<?= $row["gambar"]; ?>" width=""></td> 
	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>