<h2>Data Member</h2>
<a href="?page=pelanggan&action=form_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Kode Member</th>
			<th>Nama Member</th>
			<th>Alamat Member</th>
			<th>Telp Member</th>
			<th>Status Member</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
		$query = "SELECT * FROM ms_pelanggan";
		$result = $con->query($query);

		if($result->num_rows > 0)
		{
			while ($row = $result->fetch_assoc()) 
			{
				?>
				<tr>
					<td><?= $row['kode_pelanggan'];?></td>
					<td><?= $row['nama_pelanggan'];?></td>
					<td><?= $row['alamat_pelanggan'];?></td>
					<td><?= $row['telp_pelanggan'];?></td>
					<td>
					<?php if($row['aktif_pelanggan']){
						echo '
						<span class="badge badge-success btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Aktif</span>
                      </span>';
					}else {
						echo '<span class="badge badge-danger btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Tidak Aktif</span>
                      </span>';
					} ?>
					</td>
					<td><a href="?page=pelanggan&action=form_ubah&kode=<?=$row['kode_pelanggan'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
					<td><a href="#" data-href="?page=pelanggan&action=hapus&kode=<?= $row['kode_pelanggan']; ?>" data-toggle="modal" data-target="#confirm-delete" data-barang="<?= $row['nama_pelanggan']; ?>" class="icon-hapus"><i class="fa fa-trash"></i></a></td>
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
			<div class="modal-header bg-danger text-light">
			Konfirmasi Hapus Data Member
			</div>
			<div class="modal-body">
				Apakah Anda yakin akan menghapus data<strong><label id="data-pelanggan-hapus"></label></strong>?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-hapus text-light">Delete</a>
			</div>
		</div>
	</div>
</div>

<script>
	$(' .icon-hapus').on('click', function (e) {
		$('#data-pelanggan-hapus').text($(this).data('pelanggan'));
	});

	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-hapus').attr('href', $(e.relatedTarget).data('href'));
	});
</script>
