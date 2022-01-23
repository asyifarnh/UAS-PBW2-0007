<?php
ob_start();
?>
<h3>Daftar Laporan Mahasiswa</h3>

<table border="1" width="90%" cellspacing="0" cellpadding="4" align="center">
    <thead style="color: white">
        <tr bgcolor="pink">
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat Lahir</th>
        <th>tanggal Lahir</th>
        <th>jenis Kelamin</th>
        <th>Agama</th>
        <th>Status Sipil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once 'C:\xampp\htdocs\uas0007\koneksi.php';
        $sql = "SELECT * FROM ms_200007";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
            <td><?= $row['nim'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['alamat'];?></td>
            <td><?= $row['tempat_lahir'];?></td>
            <td><?= $row['tanggal_lahir'];?></td>
            <td><?= $row['jenis_kelamin'];?></td>
            <td><?= $row['agama'];?></td>
            <td><?= $row['status_sipil'];?></td>
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

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($data);
$mpdf->Output('Data Laporan Mahasiswa.pdf','D');
?>