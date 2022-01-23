<?php 
require_once'C:\xampp\htdocs\batik0007\controllers\cek_session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Hallo Admin!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
<body>
	
  <div class="container text-center">
    <h1>Kain BatiQuee</h1>      
    <p>Cintai dan Gunakan Produk Lokal Indonesia</p>
    <h5><i>Owner by ASYIFA RIFTA NUR HALIZA-0007-2P51</i></h5>
  
</div>
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
		<a class="navbar-brand" href="admin.php">Hello BatiQuee Vers!!</a>
    </div>
      <ul class="nav navbar-nav mr-auto">
       
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle glyphicon glyphicon-shopping-cart" href="#" id="navbardrop" data-toggle="dropdown">Transaksi</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="?page=penjualan&action=form_tambah">Input Transaksi</a>
          <a class="dropdown-item" href="?page=penjualan&action=list">Data Transaksi</a>    
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Customer</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="?page=pelanggan">Member</a>
        </div>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Stores</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="?page=barang">List Stock Kain</a>
      </div>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Pengiriman</a>
         <div class="dropdown-menu">
        <a class="dropdown-item" href="?page=pengiriman&action=form_tambah">Input Pengiriman</a>
        <a class="dropdown-item" href="?page=pengiriman&action=list">Data Pengiriman</a>
      </div>
    </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle glyphicon glyphicon-user" href="#" id="navbardrop" data-toggle="dropdown">Your Account</a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="?page=pengguna&action=form_ubah">Change Password</a>
          <a class="dropdown-item" href="index.php">Log Out</a>
     </div>
   </li>
 </ul>
	</nav>
	<br>

	<div class="container">
		<?php
		$page = isset($_GET['page'])? $_GET['page']:'';
		$action = isset($_GET['action'])? $_GET['action']: '';
		if ($page == 'barang') 
		{
			if ($action == 'form_tambah') 
			{
				include 'C:\xampp\htdocs\batik0007\pages\barang_form.php';
			}
			elseif ($action == 'simpan') 
			{
				require 'C:\xampp\htdocs\batik0007\controllers\barang_simpan.php';
			}
			elseif ($action == 'form_ubah') 
			{
				include 'C:\xampp\htdocs\batik0007\pages\barang_ubah.php';
			}
			elseif ($action == 'ubah') 
			{
				require 'C:\xampp\htdocs\batik0007\controllers\barang_simpan_ubah.php';
			}
			elseif ($action == 'hapus')
			{
				require 'C:\xampp\htdocs\batik0007\controllers\barang_hapus.php';
			}
		
			else
			{
				include 'C:\xampp\htdocs\batik0007\pages\barang_list.php';
			}
		}
	elseif ($page=='pelanggan')
	{
		if ($action == 'form_tambah') 
		{
			include 'C:\xampp\htdocs\batik0007\pages\pelanggan_form.php';
		}
		elseif ($action == 'simpan') 
		{
			require'C:\xampp\htdocs\batik0007\controllers\pelanggan_simpan.php';
		}
		elseif ($action =='form_ubah') 
		{
			include 'C:\xampp\htdocs\batik0007\pages\pelanggan_ubah.php';
		}
		elseif ($action == 'ubah') 
		{
			require'C:\xampp\htdocs\batik0007\controllers\pelanggan_simpan_ubah.php';
		}
		elseif ($action =='hapus') 
		{
			require'C:\xampp\htdocs\batik0007\controllers\pelanggan_hapus.php';
		}
		else
		{
			include'C:\xampp\htdocs\batik0007\pages\pelanggan_list.php';
		}
	}
	elseif ($page=='pengguna') 
	{
		if ($action == 'form_ubah') 
		{
			include'C:\xampp\htdocs\batik0007\pages\password_ubah.php';
		}
		elseif ($action =='simpan')
		{
			require'C:\xampp\htdocs\batik0007\controllers\password_simpan_ubah.php';
		}	
	}
	elseif ($page == 'penjualan') 
	{
		if ($action == 'proses_simpan') 
		{
			require 'C:\xampp\htdocs\batik0007\controllers\penjualan_simpan.php';
		}
		elseif ($action == 'form_tambah') 
		{
			require 'C:\xampp\htdocs\batik0007\pages\penjualan_form.php';
		}
		elseif ($action == 'detail')
		{
			require 'pages/penjualan_detail.php';
		}
		else
		{
			require 'C:\xampp\htdocs\batik0007\pages\penjualan_list.php';
		}
	}
	elseif ($page == 'pengiriman') 
	{
		if ($action == 'simpan') 
		{
			require 'C:\xampp\htdocs\batik0007\controllers\pengiriman_simpan.php';
		}
		elseif ($action == 'form_tambah') 
		{
			include 'C:\xampp\htdocs\batik0007\pages\pengiriman_form.php';
		}
		elseif ($action == 'detail')
		{
			require 'pages/pengiriman_detail.php';
		}
		else
		{
			require 'C:\xampp\htdocs\batik0007\pages\pengiriman_list.php';
		}
	}
	else
		{
			include 'C:\xampp\htdocs\batik0007\pages\dashboard.php';
		}
		?>

	</div>
</body>
</html>