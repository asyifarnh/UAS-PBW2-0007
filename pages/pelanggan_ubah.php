<?php 
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
$kode_pelanggan = isset($_GET['kode']) ? $_GET['kode'] : '';
$query 			= 'SELECT * FROM ms_pelanggan WHERE kode_pelanggan="' . $kode_pelanggan . '"';
$result 		= $con->query($query);

if ($result->num_rows == 0)
{
 	?>
 	<script>
 		alert('Maaf, data member TIDAK DI TEMUKAN');
 		window.top.location = 'admin.php?page=pelanggan';
 	</script>
 	<?php
}
$row = $result->fetch_assoc();
?>
<h1>Form Ubah Data Member</h1>
<hr />
<form action="?page=pelanggan&action=ubah" method="POST">
	<div class="form-group">
		<label for="kode_pelanggan">Kode Member</label>
		<input type="text" class="form-control" placeholder="Kode Member" id="kode_pelanggan" name="kode_pelanggan" value="<?= $row['kode_pelanggan'];?>" readonly="readonly">
	</div>
	<div class="form-group">
		<label for="nama_pelanggan">Nama Member</label>
		<input type="text" class="form-control" placeholder="Nama Member" id="nama_pelanggan" name="nama_pelanggan" value="<?= $row['nama_pelanggan'];?>">
	</div>
	<div class="form-group">
		<label for="alamat_pelanggan">Alamat</label>
		<input type="text" class="form-control" placeholder="Alamat Member" name="alamat_pelanggan" value="<?= $row['alamat_pelanggan'];?>">
	</div>
	<div class="form-group">
		<label for="telp_pelanggan">Telp</label>
		<input type="text" class="form-control" placeholder="Telp Member" name="telp_pelanggan" value="<?= $row['telp_pelanggan'];?>">
	</div>
	<div class="form-group pretty p-switch p-fill">
        <input type="checkbox" id="aktif_pelanggan" name="aktif_pelanggan" />
        <div class="state p-success">
            <label for="aktif_pelanggan">Aktif</label>
        </div>
    </div>
    <br>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>