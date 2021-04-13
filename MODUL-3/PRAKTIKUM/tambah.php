<?php 
require 'functions.php';
//cek tombol sumbit
if(isset($_POST["submit"])){
	
			//cek keberhasilan insert
			if(tambah($_POST) > 0){
				echo "
			<script>
				alert('data berhasil ditambah');
				document.location.href = 'index.php';
			</script>";
	}else{
		echo "
			<script>
				alert('data Gagal ditambah');
				document.location.href = 'index.php';
			</script>";
			}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data Karyawan</title>
</head>
<body>
	<h1>Tambah data karyawan</h1>
	<form action="" method="post" >
		<ul>
			<li>
				<label for ="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for ="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required>
			</li>
			<li>
				<label for ="jabatan">Jabatan : </label>
				<input type="text" name="jabatan" id="jabatan" required>
			</li>
			<li>
				<label for ="email">Email : </label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for ="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>

</body>
</html>