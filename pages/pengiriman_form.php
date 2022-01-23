<h1>Form Pengiriman</h1>
<hr />
<form action="?page=pengiriman&action=simpan" method="POST">
    <div class="form-group">
        <label for="kode_pengiriman">Kode Pengiriman</label>
        <input type="text" class="form-control" placeholder="Masukan Kode Pengiriman" id="kode_pengiriman" name="kode_pengiriman">
</div>
<div class="form-group">
    <label for="kode_pengguna">Kode Pengirim</label>
    <input type="text" class="form-control" placeholder="Masukan Kode Pengirim" id="kode_pengguna" name="kode_pengguna">
</div>
<div class="form-group">
    <label for="nama_penerima">Nama Penerima</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Penerima" id="nama_penerima" name="nama_penerima">
</div>
<div class="form-group">
    <label for="alamat">Alamat Pengiriman</label>
    <input type="text" class="form-control" placeholder="Masukan Alamat Pengiriman" id="alamat" name="alamat">
</div>
<div class="form-group">
<label for="tanggal">Tanggal Pengiriman</label>
<input type="date" class="form-control" placeholder="Masukan Tanggal Pengiriman" id="tanggal" name="tanggal">
</div>
<div class="form-group">
    <label for="ekspedisi">Ekspedisi Pengiriman</label>
    <input type="text" class="form-control" placeholder="Masukan Ekspedisi Pengiriman
    " id="ekspedisi" name="ekspedisi">
</div>
<div class="form-group">
    <label for="kode_barang">Kode Barang</label>
    <input type="text" class="form-control" placeholder="Masukan Kode Barang" id="kode_barang" name="kode_barang">
</div>
<div class="form-group">
    <label for="jumlah">Jumlah Barang</label>
    <input type="text" class="form-control" placeholder="Masukan Jumlah Barang" id="jumlah" name="jumlah">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>