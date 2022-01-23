<?php

require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah = $_POST['jumlah'];

$query = 'UPDATE ms_barang SET nama_barang="' . $nama_barang . '",satuan_barang="' . $satuan_barang . '", harga_barang="' . $harga_barang . '",jumlah="'. $jumlah .'" WHERE kode_barang="' . $kode_barang . '"';

if ($con->query($query) === TRUE)
{
    ?>
    <script>
        alert('Perubahan Data Berhasil');
        window.top.location = 'admin.php?page=barang';
    </script>
    <?php

}
else
{
    ?>
    <script>
        alert('Perubahan Data Gagal:<?= $con->error;?>, silahkan ulangi lagi');
        window.history.back();
    </script>
    <?php
    
}
