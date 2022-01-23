<html>

<body>
    <center>
        <h2 style="margin-top:50px;">
            Data Testimoni Peserta Inagurasi Mahasiswa 2021
        </h2>
        <p style="margin-top:-10px;">
            BEM STMIK WIDYA PRATAMA PEKALONGAN 
        </p>
    </center>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NIM</th>
                <th scope="col">Komentar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($semnas as $dt) : ?>
                <tr>
                    <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                    <td style="text-align: left;"><?= $dt->email; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama; ?></td>
                    <td style="text-align: left;"><?= $dt->nim; ?></td>
                    <td style=" text-align: left;"><?= $dt->komentar; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>