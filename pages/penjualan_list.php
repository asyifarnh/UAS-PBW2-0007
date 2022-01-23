<div class="container">
	<h3> List Data - Transaksi</h3>
	<p>	

		<a href="?page=penjualan&action=form_tambah" class="btn btn-flat btn-primary"><i
class="fa fa-plus"></i>Tambah</a>
		<a href="pages/transaksi_cetak.php" class="btn btn-success"><i class="fa fa-print"></i>Cetak</a>

	</p>
	<table class="table table-hover display" id="data_barang">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode Transaksi</th>
				<th>Tanggal</th>
				<th>Total</th>
				<th class="text-center">Detail</th>
			</tr>
		</thead>
		<tbody>	
			<?php
				require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
			$sql = "SELECT kode_transaksi, DATE_FORMAT(tanggal_transaksi, '%d-%m-%Y') AS tanggal_transaksi, total_transaksi FROM penjualan_header";
			$result = $con->query($sql);

			if ($result->num_rows > 0)
			{
				$no = 1;
				while ($row = $result->fetch_assoc())
				{
					?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $row['kode_transaksi']; ?></td>
						<td><?= $row['tanggal_transaksi']; ?></td>
						<td class="text-right"><?= number_format($row['total_transaksi'], 0, ',', '.'); ?></td>
						<td class="text-center"><a href="?page=penjualan&action=detail&id=<?= base64_encode($row['kode_transaksi']); ?>" class="btn btn-primary fa fa-list"></a></td>
						
					</tr>
					<?php
				}		
			}
			?>
		</tbody>
	</table>
</div>