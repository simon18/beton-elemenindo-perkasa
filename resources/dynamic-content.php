<?php

$modul = isset($_GET['modul'])?$_GET['modul']:'';

// HOME
if ($modul == '' || $modul == 'home') {
	include_once("layout/modul/home/home.php");
}

// DATA BAHAN BAKU
elseif ($modul == 'bahan-baku') {
	include_once("layout/modul/bahan-baku/bahan-baku.php");
}

// DATA PEMESANAN
elseif ($modul == 'pemesanan') {
	include_once("layout/modul/pemesanan/pemesanan.php");
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