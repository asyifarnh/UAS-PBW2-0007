<?php

session_start();
require_once 'C:\xampp\htdocs\batik0007\koneksi.php';

$kode_pengguna = $_POST['usr'];
$pswd_pengguna = $_POST['pwd'];

$query = 'SELECT * FROM ms_pengguna WHERE kode_pengguna=? AND pswd_pengguna=?';
$stmt = $con->prepare($query);
$stmt->bind_param('ss', $kode_pengguna, md5($pswd_pengguna));
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0)
{
    $data = $result->fetch_assoc();
    $_SESSION['username'] = $kode_pengguna;
    $_SESSION['realname'] = $data['nama_pengguna'];
    header('Location:../admin.php');
}
else
{
    $_SESSION['error'] = 'Username atau Password SALAH !!!';
    header('Location:../index.php');

}   