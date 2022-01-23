<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'batik_0007';
$con = new mysqli($host, $username, $password, $dbname);

if ($con->connect_error)
{
    die("Koneksi GAGAL : " . $con->connect_error);
}
?>