<?php
    require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
$kode_barang = $_GET['kode_barang'];

$stmt = $con->prepare("SELECT * FROM ms_barang WHERE kode_barang=?");
$stmt->bind_param("s", $kode_barang);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) 
{
	$data = $result->fetch_assoc();
	echo json_encode($data);
}
else
{
	echo "Data tidak ditemukan";
}