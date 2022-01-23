<?php
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
$kode_pelanggan = $_GET['kode'];
$query 			= 'DELETE FROM ms_pelanggan WHERE kode_pelanggan="' . $kode_pelanggan . '"';

if ($con->query($query) === TRUE)
{
 	?>
 	<script>
 		alert('Data Berhasil dihapus');
 		window.top.location = 'admin.php?page=pelanggan';
 	</script>
 	<?php  
}
else
{
	?>
	<script>
		alert('Penghapusan Data Gagal, Silahkan ulangi lagi');
		window.history.back();
	</script>
	<?php
}