<?php
session_start();
    require_once 'C:\xampp\htdocs\batik0007\koneksi.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'show';
if (!isset($_SESSION['cart']))
{
	$_SESSION['cart'] = [];
}

$cart = $_SESSION['cart'];
if ($action == 'show')
{
	show();
}
elseif ($action == 'add')
{
	add_cart($_GET['kode_barang'], $_GET['qty']);
}
elseif ($action == 'remove')
{
	remove_cart($_GET['kode_barang']);
}
elseif ($action == 'save')
{
	save_cart();
}
elseif ($action == 'reset')
{
	reset_cart();
}


function show()
{
	global $cart;
	$total = 0;
	foreach ($cart as $key => $value)
	{
	$total += $value['harga_barang'] * $value['qty'];
	}
	$data = ['cart' => $cart, 'total' => $total];
	echo json_encode($data);
	}

function add_cart($kode_barang, $qty)
{

	$ada = false;
	global $cart;
	foreach ($cart as $key => $value)
	{
		
		if ($value['kode_barang'] == $kode_barang)
		{
			$cart[$key]['qty'] = $qty;
			$ada = true;
		}
	}
	
	if (!$ada)
	{
		global $con;
		$stmt = $con->prepare("SELECT kode_barang, nama_barang,
harga_barang FROM ms_barang WHERE kode_barang=?");
		$stmt->bind_param("s", $kode_barang);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($result->num_rows > 0)
		{
			$data = $result->fetch_assoc();
			$data['qty'] = $qty;
			array_push($cart, $data);
			$_SESSION['cart'] = $cart;
		}
	}
	else
	{
		$_SESSION['cart'] = $cart;
	}
}
function remove_cart($kode_barang)
{
	$tmp = [];
	global $cart;
	foreach ($cart as $key => $value)
	{
		if ($value['kode_barang'] !== $kode_barang)
		{
			array_push($tmp, $value);
		}
	}
	$_SESSION['cart'] = $tmp;
}
function save_cart()
{
	global $cart;
	$total = 0;
	$kode_transaksi = date("YmdHis");
	global $con;

	foreach ($cart as $key => $value)
	{
		if ($value['qty'] > 0)
		{
			$total += $value['harga_barang'] * $value['qty'];
		}
	}

	$stmt = $con->prepare("INSERT INTO
penjualan_header(kode_transaksi, tanggal_transaksi, total_transaksi,
kode_pengguna, waktu) VALUES(?, ?, ?, ?, ?)");
	$tanggal = date("Y-m-d");
	$waktu = date("Y-m-d H:i:s");
	$user = $_SESSION['username'];
	$stmt->bind_param("ssiss", $kode_transaksi, $tanggal, $total,
$user, $waktu);
	$stmt->execute();

	foreach ($cart as $key => $value)
	{
		if ($value['qty'] > 0)
		{
			$stmt = $con->prepare("INSERT INTO penjualan_detail(kode_transaksi, kode_barang, harga_jual, jumlah)
VALUES(?, ?, ?, ?)");

			$stmt->bind_param("ssii", $kode_transaksi, $value['kode_barang'], $value['harga_barang'], $value['qty']);

			$stmt->execute();
		}
	}
	reset_cart();
	header('Location:../admin.php?page=penjualan');
}

function reset_cart()
{
	$_SESSION['cart'] = null;
	unset($_SESSION['cart']);
}