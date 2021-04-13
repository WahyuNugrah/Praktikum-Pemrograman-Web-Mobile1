<?php 
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkaan id
$kry = query("SELECT * FROM Karyawan WHERE id = $id")[0];


//cek tombol sumbit
if(isset($_POST["submit"])){
	
			//cek keberhasilan ubah
			if(ubah($_POST) > 0){
				echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>";
	}else{
		echo "
			<script>
				alert('data Gagal diubah');
				document.location.href = 'index.php';
			</script>";
			}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Karyawan</title>
</head>
<body>
	<h1>Ubah data Karyawan</h1>
	<form action="" method="post" >
		<input type="hidden" name="id" value="<?= $kry["id"]; ?>">
		<ul>
			<li>
				<label for ="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $kry["nama"]; ?>">
			</li>
			<li>
				<label for ="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required value="<?= $kry["nrp"]; ?>">
			</li>
			<li>
				<label for ="jabatan">Jabatan : </label>
				<input type="text" name="jabatan" id="jabatan" required value="<?= $kry["Jabatan"]; ?>">
			</li>
			<li>
				<label for ="email">Email : </label>
				<input type="text" name="email" id="email" required value="<?= $kry["email"]; ?>">
			</li>
			<li>
				<label for ="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" value="<?= $kry["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>

</body>
</html>