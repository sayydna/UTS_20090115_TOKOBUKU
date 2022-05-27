<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$penerbit = $_POST['terbit_bk'];
$penulis = $_POST['penulis_bk'];
$harga = $_POST['harga_bk'];

//query

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , penulis_buku , harga_buku) VALUES('$judul' , '$penerbit' , '$penulis' , '$harga')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>