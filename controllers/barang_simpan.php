<?php
    require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah = $_POST['jumlah'];

$query = "INSERT INTO ms_barang (kode_barang,nama_barang,satuan_barang,harga_barang,jumlah) VALUES('$kode_barang','$nama_barang','$satuan_barang','$harga_barang','$jumlah')";

$hasil =mysqli_query($con,$query);
if ($hasil ) 
{
    ?>
    <script>
        alert('Penyimpanan Data Berhasil');
        window.top.location = 'http://localhost/batik0007/admin.php?page=barang';
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