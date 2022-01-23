<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/registrystyle.css') ?>">

<div class="container">
	<div class="row">
		<div class="col">
			<div class="info">
				<center>
					<h2><i class="fas fa-user-edit"></i>&nbsp;&nbsp;Testimoni Peserta Inagurasi Mahasiswa 2021</h2>
				</center>
				<hr style="border: 1px grey solid;">
			</div><br>

			<form action="<?= base_url('semnas/save'); ?>" method="POST">
				<?= csrf_field(); ?>
				<div class="registry">
					<div class="avatar">
						<i class="pencil fas fa-pencil-alt"></i>
						<i class="book fas fa-book-open"></i>
					</div>

					<div class="box-registry">
						<i class="fas fa-envelope-open-text"></i>
						<input type="email" placeholder="Email" name="email" autofocus required>
					</div>

					<div class="box-registry">
						<i class="fab fa-teamspeak"></i>
						<input type="name" placeholder="Nama Mahasiswa" name="nama" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-globe-europe"></i>
						<input type="text" placeholder="NIM" name="nim" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-comments"></i>
						<input type="text" placeholder="Komentar" name="komentar" required>
					</div>

					<div class="button-class">
						<button type="submit" name="save" class="button btn btn-primary">
							<i class="fas fa-check"></i>&nbsp;&nbsp;Kirim  Testimoni
						</button>

						<button onclick=" window.location.href='<?= base_url('registry'); ?>" type="submit" name="cancel" class="button btn btn-danger">
							<i class="fas fa-times"></i>&nbsp;&nbsp;Batal
						</button>
					</div>
				</div><br>
			</form>

		</div>
	</div>
</div>

<?= $this->endSection(); ?>
				