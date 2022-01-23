<div class="container">
	<h2>Transaksi - Penjualan Kain</h2>
	<div class="row">
		<div class="col-sm-2">
		<label for="nama_barang">Tanggal</label>
	</div>
	<div class="col-sm-4">
		<input type="text" class="form-control" id="tanggal" name="tanggal" value="<?=date('d-m-Y');?>" disabled="disabled">
	</div>
	<div class="col-sm-2">
		<label for="total_transaksi">Total Transaksi</label>
	</div>
	<div class="col-sm-4">
		<input type="text" class="form-control font-weight-bold" id="total_transaksi" placeholder="Total" name="total_transaksi" disabled="disabled">
	</div>
</div>
<div class="row">
	<div class="col-sm-12 text-right">
		<a href="controllers/cart.php?action=save" class="btn btn-primary">Simpan</a>
	</div>
</div>
<table style="width:100%;">
	<tr>
		<th>Kode Kain</th>
		<th>Nama Kain</th>
		<th>Harga</th>
		<th>Qty</th>
		<th></th>
	</tr>
	<tr>
		<td style="width: 150px;"><input type="text" class="form-control" id="kode_barang" name="kode_barang"/></td>
		<td><input type="text" class="form-control font-weight-bold" disabled="disabled" placeholder="Nama Kain" id="nama_barang" name="nama_barang"/></td>
		<td style="width: 200px;"><input type="text" class="form-control font-weight-bold" readonly="readonly" id="harga_barang" name="harga_barang"/></td>
		<td style="width: 120px;"><input type="number" class="form-control" id="qty" name="qty"/></td>
		<td><a href="#" data-href="controllers/cart.php" class="btn btn-primary btn-flat"><i class="fa fa-plus" id="btn-add-cart"></i></a></td>
	</tr>
</table>
<br/>
<table style="width: 100%;" class="table">
	<thead>
		<tr>
			<th style="width: 140px;">Kode Kain</th>
			<th>Nama Kain</th>
			<th style="width: 140px;">Harga</th>
			<th style="width: 80px;">Qty</th>
			<th style="width: 140px;">Jumlah</th>
			<th style="width: 80px;">Aksi</th>
		</tr>
	</thead>
	<tbody id="penjualan-detail">
		<tr>
		</tr>
	</tbody>
</table>
<div class="row">
		<div class="col-sm-3">
			<label for="nama_barang">Bayar</label>
		</div>
		<div class="col-sm-3">
			<input type="text" class="form-control" id="bayar" name="bayar" placeholder="Bayar">
		</div>
		<div class="col-sm-3">
			<label for="total_transaksi">Kembalian</label>
		</div>
		<div class="col-sm-3">
			<input type="text" class="form-control font-weight-bold" id="kembalian" placeholder="Kembalian" name="kembalian" disabled="disabled">
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {

		show();

		$("#kode_barang").focusout(function(){
			if ($('#kode_barang').val() !== '') {
				$.get("controllers/barang_cari.php", {kode_barang: $('#kode_barang').val()}, function(data, status){
					if (data != 'Data tidak ditemukan') {
						var barang = JSON.parse(data);
						$('#nama_barang').val(barang.nama_barang);
						$('#harga_barang').val(barang.harga_barang);
						$('#qty').focus();
					}else{
						$('#nama_barang').val(data);
						$('#harga_barang').val(null);
						$('#qty').val(null);
						$('#kode_barang').focus();
					}
				});
			}
		});
		
		$("#bayar").focusout(function() {
			if($('#total_transaksi').val() !== '') {
					var kembali = $('#bayar').val() - $('#total_transaksi').val();
					$('#kembalian').val(kembali);
			}
		});
		
		$("#btn-add-cart").click(function () {
			$.get("controllers/cart.php?action=add", {kode_barang:
$('#kode_barang').val(), qty: $('#qty').val()}, function (data, status) {
				show();
			});
		});
	});

	function show() {
		$.get("controllers/cart.php?action=show", function (data, status) {

			var data = JSON.parse(data);
			$('#total_transaksi').val(data.total);
			if (data.cart !== null) {
				$("#penjualan-detail").empty();
				jQuery.each(data.cart, function (i, barang) {
					var baris = "<tr>" +
							"<td>" + barang.kode_barang + "</td>" +
							"<td>" + barang.nama_barang + "</td>" +
							"<td>" + barang.harga_barang + "</td>" +
							"<td>" + barang.qty + "</td>" +
							"<td>" + (Number(barang.harga_barang) * Number(barang.qty)) + "</td>" +
							"<td>" + "<a data-href='' barang='" + barang.kode_barang + "' class='btn btn-flat btn-danger fa fa-trash text-white' onclick='hapus_item(this);'></a>" + "</td>" + "</tr>";
				$("#penjualan-detail").append(baris);
			});
			hapus_inputan();
		}
	});
}

function hapus_inputan() {
	$('#kode_barang').val(null);
	$('#nama_barang').val(null);
	$('#harga_barang').val(null);
	$('#qty').val(null);
	$('#kode_barang').focus();
}

function hapus_item(obj) {
	$.get("controllers/cart.php?action=remove", {kode_barang: obj.getAttribute('barang')}, function (data, status) {

		show();
	});
}
</script>