<?php 
require "koneksi.php";

$result = mysqli_query($conn,"SELECT * FROM idol");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Idol</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<h1>Data Idol</h1>
	<a href="tambah.php">Tambah Data</a>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Nomor</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Agensi</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>

		<?php $nomor = 1; ?>
		<?php while ( $isi = mysqli_fetch_assoc($result) ) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $isi['id'] ?></td>
			<td><?php echo $isi['nama'] ?></td>	
			<td><?php echo $isi['agensi'] ?></td>	
			<td><img src="img/<?php echo $isi['gambar'] ?>" width="50"></td>	
			<td>
				<a href="hapus.php?id=<?php echo $isi['id'] ?>" onclick="return confirm('Yakin??')">Hapus</a>
				<a href="edit.php?id=<?php echo $isi['id'] ?>">Edit</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</table>
</body>
</html>