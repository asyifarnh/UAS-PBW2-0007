<h1>Form Member</h1>
<hr />
<form action="?page=pelanggan&action=simpan" method="POST">
	<div class="form-group">
		<label for="kode_pelanggan">Kode Member</label>
		<input type="text" class="form-control" placeholder="Masukan Kode Member" id="kode_pelanggan" name="kode_pelanggan">
	</div>
	<div class="form-group">
		<label for="nama_pelanggan">Nama Member</label>
		<input type="text" class="form-control" placeholder="Masukan Nama Member" id="nama_pelanggan" name="nama_pelanggan">
	</div>
	<div class="form-group">
		<label for="alamat_pelanggan">Alamat</label>
		<input type="text" class="form-control" placeholder="Masukan Alamat Member" id="alamat_pelanggan" name="alamat_pelanggan">
	</div>
	<div class="form-group">
		<label for="telp_pelanggan">Telp</label>
		<input type="text" class="form-control" placeholder="Masukan Telp Member" id="telp_pelanggan" name="telp_pelanggan">
	</div>
	 <div class="form-group pretty p-switch p-fill">
        <input type="checkbox" id="aktif_pelanggan" name="aktif_pelanggan" />
        <div class="state p-success">
            <label for="aktif_pelanggan">Aktif</label>
        </div>
    </div>
    <br>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>