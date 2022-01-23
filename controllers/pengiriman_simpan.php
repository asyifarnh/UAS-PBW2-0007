<?php
    require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$kode_pengiriman = $_POST['kode_pengiriman'];
$kode_pengguna = $_POST['kode_pengguna'];
$nama_penerima = $_POST['nama_penerima'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$ekspedisi=$_POST['ekspedisi'];
$kode_barang=$_POST['kode_barang'];
$jumlah = $_POST['jumlah'];

$query = "INSERT INTO pengiriman (kode_pengiriman,kode_pengguna,nama_penerima,alamat, tanggal,ekspedisi,kode_barang,jumlah) VALUES('$kode_pengiriman','$kode_pengguna','$nama_penerima','$alamat','$tanggal','$ekspedisi','$kode_barang','$jumlah')";

$hasil =mysqli_query($con,$query);
if ($hasil ) 
{
    ?>
    <script>
        alert('Penyimpanan Data Berhasil');
        window.top.location = 'http://localhost/batik0007/admin.php?page=pengiriman';
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert('Penyimpanan Data Gagal, silahkan ulangi lagi');
        window.history.back();
    </script>
    <?php
}