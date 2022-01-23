<?php
require_once 'C:\xampp\htdocs\uas0007\koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$status_sipil = $_POST['status_sipil'];

$query = 'INSERT INTO ms_200007 VALUES("'.$nim.'","'.$nama. '","'.$alamat.'","'.$tempat_lahir.'","'.$tanggal_lahir.'","'.$jenis_kelamin.'","'.$agama.'","'.$status_sipil.'")';

if ($con->query($query) === TRUE)
{
	?>
	<script>
		alert('Penyimpanan Data Berhasil');
		window.top.location = 'admin.php?page=laporan';
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