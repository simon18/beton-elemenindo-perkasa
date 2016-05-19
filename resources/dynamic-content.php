<?php

$modul = isset($_GET['modul'])?$_GET['modul']:'';

// HOME
if ($modul == '' || $modul == 'home') {
	include_once("layout/modul/home/home.php");
}

// DATA BAHAN BAKU
elseif ($modul == 'material') {
	include_once("layout/modul/material/material.php");
}

// DATA PRODUK
elseif ($modul == 'produk') {
	include_once("layout/modul/produk/produk.php");
}

// DATA PEMESANAN PRODUK
elseif ($modul == 'pemesanan-produk') {
	include_once("layout/modul/pemesanan-produk/pemesanan-produk.php");
}

// DATA PEMESANAN MATERIAL
elseif ($modul == 'pemesanan-material') {
	include_once("layout/modul/pemesanan-material/pemesanan-material.php");
}

// DATA PENGADAAN
elseif ($modul == 'pengadaan') {
	include_once("layout/modul/pengadaan/pengadaan.php");
}

// DATA PENGIRIMAN
elseif ($modul == 'pengiriman') {
	include_once("layout/modul/pengiriman/pengiriman.php");
}

// DATA PENGIRIMAN
elseif ($modul == 'kendaraan') {
	include_once("layout/modul/kendaraan/kendaraan.php");
}

// DATA USER
elseif ($modul == 'user') {
	include_once("layout/modul/user/user.php");
}

// DATA SALES
elseif ($modul == 'sales') {
	include_once("layout/modul/sales/sales.php");
}

// DATA SUPLLIER
elseif ($modul == 'supplier') {
	include_once("layout/modul/supplier/supplier.php");
}

// DATA KARYAWAN
elseif ($modul == 'karyawan') {
	include_once("layout/modul/karyawan/karyawan.php");
}

else{
	include_once("layout/modul/404/404.php");
}