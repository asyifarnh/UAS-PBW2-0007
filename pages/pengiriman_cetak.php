<?php 
ob_start();
?>
<h3>Daftar Pengiriman Detail</h3>
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
	
		<?php 
			require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
		$sql = "SELECT * FROM pengiriman";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			$no = 1;
			while ($row = $result->fetch_assoc()) {
				?>
			<th><center>Kode Pengiriman     :<?= $row['kode_pengiriman']; ?></center></th>
			<th><center>Kode Pengirim     :<?= $row['kode_pengguna']; ?></center></th>	
			<th><center>Nama Penerima       :<?= $row['nama_penerima']; ?></center></th>			
			<th><center>Alamat Pengiriman   :<?= $row['alamat']; ?></center></th>			
			<th><center>Tanggal Pengiriman  :<?= $row['tanggal']; ?></center></th>			
			<th><center>Ekspedisi           :<?= $row['ekspedisi']; ?></center></th>	

			<h4><center>Detail Barang Yang Dikirim</center></h4>	
			<table style="width:100%" >
	<thead>
		<tr bgcolor="pink">
			<td><center>No</center></td>
			<td><center>Kode Barang</center></td>
			<td><center>Nama Barang</center></td>
			<td><center>Jumlah</center></td>
		</tr>
	</thead>
	<tbody>
				<tr>
					<td><center><?= $no++; ?></center></td>
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
					<td><center><?=$row['jumlah'];?></center></td>
				
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
$mpdf->Output('Data Pengiriman Detail.pdf', 'D');
?>