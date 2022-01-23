<?php
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$kode_barang = $_GET['kode'];

$query = 'DELETE FROM ms_barang WHERE kode_barang="' . $kode_barang . '"';

if ($con->query($query) === TRUE)
{
    ?>
    <script>
        alert('Data Berhasil dihapus');
        window.top.location = 'admin.php?page=barang';
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert('Penghapusan Data Gagal, silahkan ulangi lagi');
        window.history.back();
    </script>
    <?php
}
