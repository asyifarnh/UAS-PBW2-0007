<?php
	require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$kode_pelanggan 	= $_POST['kode_pelanggan'];
$nama_pelanggan 	= $_POST['nama_pelanggan'];
$alamat_pelanggan 	= $_POST['alamat_pelanggan'];
$telp_pelanggan 	= $_POST['telp_pelanggan'];
$aktif_pelanggan 	= $_POST['aktif_pelanggan'];

$query = 'INSERT INTO ms_pelanggan VALUES("' . $kode_pelanggan . '","'. $nama_pelanggan . '","' . $alamat_pelanggan . '","' . $telp_pelanggan . '","' . $aktif_pelanggan . '")';

if ($con->query($query) === TRUE)
{
 	?>
 	<script>
 		alert('Penyimpanan Data Berhasil');
 		window.top.location = 'admin.php?page=pelanggan';
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
