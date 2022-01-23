
<h1>Form Ubah Password</h1>
<hr />
<form action="?page=pengguna&action=simpan" method="POST">
    <div class="form-group">
        <label for='kode_pengguna'>Kode Pengguna</label>
        <input type="text" class="form-control" placeholder="Kode Pengguna" id="kode_pengguna" name="kode_pengguna" value="<?=$_SESSION['username'];?>" readonly="readonly">
    </div>
     <div class="form-group">
        <label for="pswd_pengguna">Password Baru</label>
        <input type="password" class="form-control" placeholder="Password Baru" id="pswd_pengguna" name="pswd_pengguna" required="readonly">
        
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>