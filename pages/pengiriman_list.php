<div class="container">
	<h3> List Data - Pengiriman</h3>
	<p>	

		<a href="?page=pengiriman&action=form_tambah" class="btn btn-flat btn-primary"><i
class="fa fa-plus"></i>Tambah</a>
		<a href="pages/cetak_kirim_global.php" class="btn btn-success"><i class="fa fa-print"></i>Cetak</a>

	</p>
	<table class="table table-hover display" id="data_barang">
		<thead>
			<tr>
				<th>#</th>
				<th><center>Kode Pengiriman</center></th>
				<th><center>Kode Pengirim</center></th>
				<th><center>Nama Penerima</center></th>
				<th><center>Alamat Pengiriman</center></th>
				<th><center>Tanggal Kirim</center></th>
				<th class="text-center">Detail</th>
			</tr>
		</thead>
		<tbody>	
			<?php
				require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
			$sql = "SELECT kode_pengiriman, DATE_FORMAT(tanggal, '%d-%m-%Y') AS tanggal, kode_pengguna, nama_penerima, alamat FROM pengiriman";
			$result = $con->query($sql);

			if ($result->num_rows > 0)
			{
				$no = 1;
				while ($row = $result->fetch_assoc())
				{
					?>
					<tr>
						<td><?= $no++; ?></td>
						<td><center><?= $row['kode_pengiriman']; ?></center></td>
						<td><center><?= $row['kode_pengguna']; ?></center></td>
						<td><center><?= $row['nama_penerima']; ?></center></td>
						<td><center><?= $row['alamat']; ?></center></td>
						<td><center><?= $row['tanggal']; ?></center></td>
						<td class="text-center"><a href="?page=pengiriman&action=detail&id=<?= base64_encode($row['kode_pengiriman']); ?>" class="btn btn-primary fa fa-list"></a></td>
						
					</tr>
					<?php
				}		
			}
			?>
		</tbody>
	</table>
</div>