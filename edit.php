<?php 
require "koneksi.php";

$id=$_GET['id'];

$result	= mysqli_query($conn,"SELECT * FROM idol WHERE id=$id");

while ($isi =mysqli_fetch_array($result) ) {
	$nama   = $isi['nama'];
	$agensi = $isi['agensi'];
	$gambar = $isi['gambar'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Data Idol</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>Edit Data Idol</h1>

	<form action="" method="post">
		<label for="">ID</label>
		<input type="text" name="nama" id="nama" value="<?php echo $id; ?>" readonly> <br>
		<label for="nama">Nama</label>
		<input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"> <br>
		<label for="agensi">Agensi</label>
		<input type="text" name="agensi" id="agensi" value="<?php echo $agensi; ?>"> <br>
		<label for="gambar">Gambar</label>
		<input type="text" name="gambar" id="gambar" value="<?php echo $gambar; ?>"> <br>

		<button type="submit" name="submit">Edit data</button>

	</form>
	
<?php 
if (isset($_POST["submit"]) ) {	
	$id     = $_POST['id'];	
	$nama   = $_POST['nama'];
	$agensi = $_POST['agensi'];
	$gambar = $_POST['gambar'];

$hasil = mysqli_query($conn,"UPDATE idol SET nama='$nama',agensi='$agensi',gambar='$gambar' WHERE id=$id");

if ($hasil) {
	echo "<script>
     window.alert('Data Berhasil di Ubah')
     window.location='index.php';
	</script>";
}else{
	echo "Data Gagal di Tambahkan";
 }

}

?>

</body>
</html>