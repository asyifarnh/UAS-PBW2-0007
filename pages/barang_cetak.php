<?php
ob_start();
?>
<h3>Daftar Stock Kain</h3>
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
			<th><center>Kode Kain</center></th>
			<th><center>Nama Kain</center></th>
			<th><center>Jumlah Stock</center></th>
			<th><center>Satuan</center></th>
			<th><center>Harga Satuan(Rp)</center></th>
		</tr>
	</thead>
	<tbody>
		<?php
		require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
		$sql = "sELECT*FROM ms_barang";
		$result = $con->query($sql);

		if ($result->num_rows>0) {
			$no = 1;
			while ($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><center><?= $no++; ?></center></td>
					<td><center><?= $row['kode_barang']; ?></center></td>
					<td><?= $row['nama_barang']; ?></td>
					<td><center><?=$row['jumlah']; ?></center></td>
					<td><center><?= $row['satuan_barang']; ?></center></td>
					<td ><center><?= number_format($row['harga_barang'], 0, ',',','); ?></center></td>
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
$mpdf->Output('Data Barang.pdf', 'D');
?>