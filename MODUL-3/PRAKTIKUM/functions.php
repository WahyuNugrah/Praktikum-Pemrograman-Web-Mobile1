<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "","modul3PemWeb");


function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

 function tambah($data){
 	global $conn;

 	//ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$email = htmlspecialchars($data["email"]);
	$gambar = htmlspecialchars($data["gambar"]);


	//query insert data
	$query = "INSERT INTO karyawan
				VALUES
				('','$nama','$nrp','$jabatan','$email','$gambar')";
				mysqli_query($conn,$query); 
 		return mysqli_affected_rows($conn);

 }

  function hapus($id){
  	global $conn;
  	mysqli_query($conn,"DELETE FROM karyawan WHERE id = $id");
  	return mysqli_affected_rows($conn);
  }

  function ubah($data){
 	global $conn;

 	//ambil data dari tiap elemen dalam form
 	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$email = htmlspecialchars($data["email"]);
	$gambar = htmlspecialchars($data["gambar"]);


	//query insert data
	$query = "UPDATE karyawan SET
			 nama = '$nama',
			 nrp = '$nrp',
			 jabatan = '$jabatan',
			 email = '$email',
			 gambar = '$gambar'
			 
			 WHERE id = $id

			 ";

				mysqli_query($conn,$query); 
 		return mysqli_affected_rows($conn);
 }

?>