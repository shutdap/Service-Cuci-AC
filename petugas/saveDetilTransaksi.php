<?php
// var_dump($_POST);
include '../koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];


	$query=mysqli_query($con,"INSERT INTO `detil_transaksi`(`tasks_id`, `nama_barang`, `harga`) VALUES ('$id','$nama','$harga')");
	if ($query) 
	{	
		echo "<script>alert('Berhasil');window.location='detilTransaksi.php?id=$id'</script>";
	}
	else 
	{
		echo "<script>alert('Gagal');window.location='detilTransaksi.php?id=$id'</script>";
	}
?>