<?php

	require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$kode_pengguna = $_POST['kode_pengguna'];
$pswd_pengguna = $_POST['pswd_pengguna'];

$query = 'UPDATE ms_pengguna  SET pswd_pengguna="'.md5($pswd_pengguna).'" WHERE kode_pengguna="'.$kode_pengguna.'"';

if ($con->query($query) === TRUE) 
{
	?>
	<script>
		alert('Perubahan Data Berhasil');
		window.top.location = 'admin.php';
	</script>
	<?php

}
else
{
	?>
	<script>
		alert('Perubahan Data Gagal:<?=$con->error;?>, silahkan ulangi lagi');
		window.history.back();
	</script>
	<?php

}