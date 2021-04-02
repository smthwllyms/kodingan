<?php 
require "koneksi.php";

if (isset($_POST["submit"]) ) {		
	$nama   = $_POST['nama'];
	$agensi = $_POST['agensi'];
	$gambar = $_POST['gambar'];

$hasil = mysqli_query($conn,"INSERT INTO idol VALUES ('','$nama','$agensi','$gambar')");

if ($hasil) {
	echo "<script>
     window.alert('Data Berhasil di Tambah')
     window.location='index.php';
	</script>";
}else{
	echo "Data Gagal di Tambahkan";
 }

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Data Idol</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Tambah Data Idol</h1>

	<form action="" method="post">
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama"> <br>
		<label for="agensi">Agensi</label>
		<input type="text" name="agensi" id="agensi"> <br>
		<label for="gambar">Gambar</label>
		<input type="text" name="gambar" id="gambar"> <br>

		<button type="submit" name="submit">Tambah data</button>

	</form>
	
</body>
</html>