<?php 
ob_start();
?>
<h3>Daftar Pengiriman Global</h3>
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
			<th><center>Kode Pengiriman</center></th>
			<th><center>Kode Pengirim</center></th>
			<th><center>Nama Penerima</center></th>
			<th><center>Alamat Pengiriman</center></th>
			<th><center>Tanggal Kirim</center></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
		$sql = "SELECT * FROM pengiriman";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			$no = 1;
			while ($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><center><?= $no++; ?></center></td>
					<td><center><?= $row['kode_pengiriman']; ?></center></td>
					<td><center><?=$row['kode_pengguna'];?></center></td>
					<td><center><?=$row['nama_penerima'];?></center></td>
					<td><center><?=$row['alamat'];?></center></td>
					<td><center><?= $row['tanggal']; ?></center></td>
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
$mpdf->Output('Daftar Pengiriman Global.pdf', 'D');
?>