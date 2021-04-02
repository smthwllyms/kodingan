<?php 
require "koneksi.php";

$id =$_GET['id'];

$hapus = mysqli_query($conn,"DELETE FROM idol WHERE id=$id");
if ($hapus) {
	echo"<script>
    window.alert('Data Berhasil di Hapus')
    window.location='index.php';
	</script>";
}

?>