<h1>Form Tambah Stock Kain</h1>
<hr />
<form action="?page=barang&action=simpan" method="POST">
    <div class="form-group">
        <label for="kode_barang">Kode Kain</label>
        <input type="text" class="form-control" placeholder="Masukan Kode Kain" id="kode_barang" name="kode_barang">
</div>
<div class="form-group">
    <label for="nama_barang">Nama Kain</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Kain" id="nama_barang" name="nama_barang">
</div>
<div class="form-group">
    <label for="jumlah">Jumlah Stock</label>
    <input type="text" class="form-control" placeholder="Masukan Jumlah Stock Kain" id="jumlah" name="jumlah">
</div>
<div class="form-group">
    <label for="satuan_barang">Satuan</label>
    <input type="text" class="form-control" placeholder="Masukan Satuan" id="satuan_barang" name="satuan_barang">
</div>
<div class="form-group">
<label for="harga_barang">Harga Satuan Kain</label>
<input type="text" class="form-control" placeholder="Masukan Harga Satuan Kain" id="harga_barang" name="harga_barang">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>