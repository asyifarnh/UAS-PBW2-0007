<?php 
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
$kode_transaksi = isset($_GET['id']) ? $_GET['id'] : '';
$pp = base64_decode($kode_transaksi);
$pp;
$query = 'SELECT * FROM penjualan_detail WHERE kode_transaksi="' . $pp . '"';
$result = $con->query($query);
?>

<div class="container">
	<h2>Detail Transaksi Penjualan Kain</h2>
	<div class="row">
		<a href="pages/detail_cetak.php" class="btn btn-success"><i class="fa fa-print "></i>Cetak</a>
	</div>
	<br />
	<table style="width: 100%;" class="table">
		<thead>
			<tr>
				<th style="width: 140px;">Kode Kain</th>
				<th>Nama Kain</th>
				<th style="width: 140px;">Harga</th>
				<th style="width: 80px;"><center>Qty</center></th>
				<th style="width: 140px;">Jumlah</th>
			</tr>
		</thead>
		<tbody id="penjualan-detail">
			<?php
			if ($result->num_rows > 0)
			{

				$no = 1;
				while ($row = $result->fetch_assoc())
				{
					?>
					<tr>
						<td><?= $row['kode_barang']; ?></td>
						<?php
						$cek = $row['kode_barang'];
						$sql2 = "SELECT * FROM ms_barang WHERE kode_barang = '".$cek."'";
						$result2 = $con->query($sql2);
						while ($row2 = $result2->fetch_assoc())
						{?>
							<td><?= $row2['nama_barang']; ?></td>
						<?php }
						?>
						<td><?= $row['harga_jual']; ?></td>
						<td><center><?= $row['jumlah']; ?></center></td>
						<td><?= $row['harga_jual'] * $row['jumlah']; ?></td>
						<!-- <td class="text-center"><a href="?page=penjualan&action=detail&id=<?=
						base64_encode($row['kode_transaksi']); ?>" class="btn btn-primary fa fa-list"></a></td> -->
					</tr>
					<?php
				}

			}
			?>
		</tbody>
	</table>
</div>

<script>
</script>