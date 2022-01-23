<?php 
ob_start();
?>
<h3>Nota Global Penjualan Kain</h3>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
<table style="width:100%">
	<thead>
		<tr bgcolor="pink">
			<th><center>No</center></th>
			<th><center>Kode Transaksi</center></th>
			<th><center>Kode Kain</center></th>
			<th><center>Harga Jual</center></th>
			<th><center>Qty</center></th>
			<th><center>Total Bayar</center></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
		$sql = "SELECT * FROM penjualan_detail";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			$no = 1;
			while ($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><center><?= $no++; ?></center></td>
					<td><center><?= $row['kode_transaksi']; ?></center></td>
					<td><center><?= $row['kode_barang']; ?></center></td>
					<
					<td class="text-right"><center><?= number_format($row['harga_jual'], 0, '.', '.'); ?></center></td>
					<td><center><?= $row['jumlah']; ?></center></td>
					<td><center><?= number_format( $row['harga_jual'] * $row['jumlah'], 0, '.', '.'); ?></center></td>
				</tr>
				<?php  
			}
		}
		?>
	</tbody>
</table>

<?php 
$data = ob_get_clean();
require_once '../vendor/autoload.php';
  $mpdf = new \mPDF();
$mpdf->WriteHTML($data);
$mpdf->Output('Nota Penjualan.pdf', 'D');
?>