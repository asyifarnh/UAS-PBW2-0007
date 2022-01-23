<?php
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
$kode_barang = $_GET['kode'];
$query = 'SELECT * FROM ms_barang WHERE kode_barang="' . $kode_barang . '"';
$result = $con->query($query);
if ($result->num_rows == 0)
{
    ?>
    <script>
        alert('Maaf, data kain TIDAK DITEMUKAN');
        window.top.location = 'admin.php?page=barang';
    </script>
    <?php
}
$row = $result->fetch_assoc();
?>
<h1>Form Ubah Data Kain</h1>
<hr />
<form action="?page=barang&action=ubah" method="POST">
    <div class="form-group">
        <label for="kode_barang">Kode Kain</label>
        <input type="text" class="form-control" placeholder="Kode Kain" id="kode_barang" name="kode_barang" value="<?= $row['kode_barang'];?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="nama_barang">Nama Kain</label>
        <input type="text" class="form-control" placeholder="Nama Kain" id="nama_barang" name="nama_barang" value="<?= $row['nama_barang'];?>">
    </div>
     <div class="form-group">
        <label for="jumlah">Jumlah Stock Kain</label>
        <input type="text" class="form-control" placeholder="Jumlah Stock Kain" id="jumlah" name="jumlah" value="<?= $row['jumlah'];?>">
    </div>
    <div class="form-group">
        <label for="satuan_barang">Satuan</label>
        <input type="text" class="form-control" placeholder="Satuan" id="satuan_barang" name="satuan_barang" value="<?= $row['satuan_barang'];?>">
    </div>
    <div class="form-group">
        <label for="harga_barang">Harga Satuan Kain</label>
        <input type="text" class="form-control" placeholder="Harga Satuan Kain" id="harga_barang" name="harga_barang" value="<?= $row['harga_barang'];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
