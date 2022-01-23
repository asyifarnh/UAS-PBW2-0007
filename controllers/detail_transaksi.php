<?php

require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$id = $_GET['id'];

//siapkan query
$stmt = $con->prepare("SELECT * FROM penjualan_detail WHERE kode_transaksi='$id'");
// $stmt->bind_param("s", $kode_barang);

//jalankan query
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0)
{
	$data = $result->fetch_assoc();
	echo json_encode($data);
}
else
{
	echo 'Data tidak ditemukan'; 
}
?>