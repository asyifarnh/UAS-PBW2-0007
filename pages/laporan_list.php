<h2>Data Laporan</h2>
<a href="?page=laporan&action=form_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
<a href="pages/laporan_cetak.php" class="btn btn-success"><i class="fa fa-print"></i>Cetak</a>
<table class="table table-striped">
<thead>
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Tempat_lahir</th>
		<th>tanggal_lahir</th>
		<th>jenis_kelamin</th>
		<th>agama</th>
		<th>status_sipil</th>
		<th colspan="2">aksi</th>
	</tr>
</thead>
<tbody>
	<?php
	require_once 'C:\xampp\htdocs\uas0007\koneksi.php';
	$query = "SELECT * FROM ms_pengguna";
	$result = $con->query($query);

	if ($result->num_rows > 0)
	{
		while ($row = $result ->fetch_assoc())
		{
          ?>
          <tr>
          	<td><?= $row['nim'];?></td>
          	<td><?= $row['nama'];?></td>
          	<td><?= $row['alamat'];?></td>
          	<td><?= $row['tempat_lahir'];?></td>
          	<td><?= $row['tanggal_lahir'];?></td>
          	<td><?= $row['jenis_kelamin'];?></td>
          	<td><?= $row['agama'];?></td>
          	<td><?= $row['status_sipil'];?></td>
          	<td><a href="?page=laporan&action=form_ubah&kode=<?=$row['nim'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
          	<td><a href="#" data-href="?page=laporan&action=hapus&kode=<?=$row['nim'];?>" data-toggle="modal" data-target="#confirm-delete" data-barang="<?=$row['nama'];?>" class="icon-hapus"><i class="fa fa-trash"></i></a></td>
          </tr>
          <?php
	    }
	}
?>
</tbody>
</table>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-danger text-light">Konfirmasi Hapus Data Barang
			</div>
			<div class="modal-body">Apakah Anda Yakin akan menghapus data<strong><label id="data-barang-hapus"></label></strong>?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-hapus text-light">Delete</a>
			</div>
		</div>
	</div>
</div>

<script>
	$('.icon-hapus').on('click',function(e){
		$('#data-laporan-hapus').text($(this).data('laporan'));
	});

	$('#confirm-delete').on('show.bs.modal',function(e){
		$(this).find('.btn-hapus').attr('href',$(e.relatedTarget).data('href'));
	});
</script>