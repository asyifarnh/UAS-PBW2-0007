<h1>Form Laporan Data Mahasiswa</h1>
<hr/>
<form action="?page=laporan&action=simpan" method="POST">
	<div class="form-group">
		<label for="nim">Nim</label>
		<input type="text" class="form-control" placeholder="nim" id="nim" name="nim">
	</div>
	<div class="form-group">
		<label for="nama">nama</label>
		<input type="text" class="form-control" placeholder="nama" id="nama" name="nama">
	</div>
	<div class="form-group">
		<label for="alamat">alamat</label>
		<input type="text" class="form-control" placeholder="alamat" id="alamat" name="alamat">
	</div>
	<div class="form-group">
		<label for="tempat_lahir">tempat lahir</label>
		<input type="text" class="form-control" placeholder="tempat lahir" id="tempat_lahir" name="tempat_lahir">
	</div>
	<div class="form-group">
		<label for="tanggal_lahir">Tanggal lahir</label>
		<input type="text" class="form-control" placeholder="tanggal lahir" id="tanggal_lahir" name="tanggal_lahir">
	</div>
	<div class="form-group">
		<label for="janis_kelamin">Jenis kelamin</label>
		<input type="text" class="form-control" placeholder="janis kelamin" id="janis_kelamin" name="janis_kelamin">
	</div>
	<div class="form-group">
		<label for="agama">agama</label>
		<input type="text" class="form-control" placeholder="agama" id="agama" name="agama">
	</div>
	<div class="form-group">
		<label for="status_sipil">status sipil</label>
		<input type="text" class="form-control" placeholder="status sipil" id="status_sipil" name="status_sipil">
	</div>
<br>
	<button type="simpan" class="btn btn-primary">Simpan</button>
</form>