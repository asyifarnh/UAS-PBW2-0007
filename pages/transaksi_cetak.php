<?php 
ob_start();
?>
<h3>Daftar Transaksi Global</h3>
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
<table style="width:100%" >
	<thead>
		<tr bgcolor="pink">
			<th><center>No</center></th>
			<th><center>Kode Transaksi</center></th>
			<th><center>Tanggal</center></th>
			<th><center>Total</center></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
		$sql = "SELECT * FROM penjualan_header";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			$no = 1;
			while ($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><center><?= $no++; ?></center></td>
					<td><center><?= $row['kode_transaksi']; ?></center></td>
					<td><center><?= $row['tanggal_transaksi']; ?></center></td>
					<td class="text-right"><center><?= number_format($row['total_transaksi'], 0, '.', '.'); ?></center></td>
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
$mpdf->Output('Data Transaksi.pdf', 'D');
?>