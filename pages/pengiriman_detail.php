<?php 
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
$kode_pengiriman = isset($_GET['id']) ? $_GET['id'] : '';
$pp = base64_decode($kode_pengiriman);
$pp;
$query = 'SELECT * FROM pengiriman WHERE kode_pengiriman="' . $pp . '"';
$result = $con->query($query);
?>

<div class="container">
	<h2>Detail Pengiriman</h2>
	<div class="row">
		<a href="pages/pengiriman_cetak.php" class="btn btn-success"><i class="fa fa-print "></i>Cetak</a>
	</div>
	<br />
	<table style="width: 100%;" class="table">
		<thead>
			<tr>
				<th><center>Kode Pengiriman</center></th>
				<th><center>Kode Pengirim</center></th>
				<th><center>Nama Penerima</center></th>
				<th><center>Alamat Pengiriman</center></th>
				<th><center>Tanggal Pengiriman</center></th>
				<th><center>Ekspedisi</center></th>
				<th><center>Kode Barang</center></th>
				<th><center>Nama Barang</center></th>
				<th><center>Jumlah</center></th>
			</tr>
		</thead>
		<tbody id="pengiriman-detail">
			<?php
			if ($result->num_rows > 0)
			{

				$no = 1;
				while ($row = $result->fetch_assoc())
				{
					?>
					<tr>
						<td><center><?= $row['kode_pengiriman']; ?></center></td>
						<td><center><?= $row['kode_pengguna']; ?></center></td>
						<td><center><?= $row['nama_penerima']; ?></center></td>
						<td><center><?= $row['alamat']; ?></center></td>
						<td><center><?= $row['tanggal']; ?></center></td>
						<td><center><?= $row['ekspedisi']; ?></center></td>
						<td><center><?= $row['kode_barang']; ?></center></td>
						<?php
						$cek = $row['kode_barang'];
						$sql2 = "SELECT * FROM ms_barang WHERE kode_barang = '".$cek."'";
						$result2 = $con->query($sql2);
						while ($row2 = $result2->fetch_assoc())
						{?>
							<td><center><?= $row2['nama_barang']; ?></center></td>
						<?php }
						?>
						<td><center><?= $row['jumlah']; ?></center></td>
						<!-- <td class="text-center"><a href="?page=penjualan&action=detail&id=<?=
						base64_encode($row['kode_pengiriman']); ?>" class="btn btn-primary fa fa-list"></a></td> -->
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