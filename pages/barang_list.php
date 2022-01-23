<h2>Data Stock Kain</h2>
<a href="?page=barang&action=form_tambah" class="btn btn-primary"><i
class="fa fa-plus"></i>Tambah</a>
<a href="pages/barang_cetak.php" class="btn btn-success"><i class="fa fa-print"></i>Cetak</a>
<link rel="stylesheet" href="assets/css/all.css">
<table class="table table-striped">
    <thead>
        <tr>
            <th><center>No</center></th>
            <th><center>Kode Kain</center></th>
            <th><center>Nama Kain</center></th>
            <th><center>Jumlah Stock</center></th>
            <th><center>Satuan</center></th>
            <th><center>Harga Satuan (Rp)</center></th>
            <th colspan="2"><center>Aksi</center></th>
        </tr>
</thead>
<tbody>
    <?php 
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
    $query = "SELECT * FROM ms_barang";
    $result = $con->query($query);

    if ($result->num_rows > 0)
    {
        $no = 1;
        while ($row = $result->fetch_assoc())
        {
            ?>
            <tr>
                <td><center><?= $no++; ?></center></td>
                <td><center><?= $row['kode_barang'];?></center></td>
                <td><?= $row['nama_barang'];?></td>
                <td><center><?= $row['jumlah'];?></center></td>
                <td><center><?= $row['satuan_barang'];?></center></td>
                <td class="text-right"><?= number_format($row['harga_barang'], 0, ',', '.');?></td>
                <td><center><a href="?page=barang&action=form_ubah&kode=<?=$row['kode_barang'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a></center></td>
                <td><a href="#" data-href="?page=barang&action=hapus&kode=<?= $row['kode_barang']; ?>" data-toggle="modal" data-target="#confirm-delete" data-barang="<?= $row['nama_barang']; ?>" class="icon-hapus"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php
        }
    }
    ?>
</tbody>
</table>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                Konfirmasi Hapus Data Kain
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data <strong><label id="data-barang-hapus"></label></strong> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-hapus text-light">Delete</a>
            </div>
        </div>
    </div>
</div>
                <script>
                    $('.icon-hapus').on('click', function (e) {
                        $('#data-barang-hapus').text($(this).data('barang'));
                    });

                    $('#confirm-delete').on('show.bs.modal', function (e) {
                        $(this).find('.btn-hapus').attr('href', $(e.relatedTarget).data('href'));
                    });
                </script>