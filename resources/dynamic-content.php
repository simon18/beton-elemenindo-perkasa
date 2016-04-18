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
elseif ($modul == 'bahan-baku-tambah') {
	include_once("layout/modul/bahan-baku/bahan-baku-tambah.php");
}

// DATA PEMESANAN
elseif ($modul == 'pemesanan') {
	include_once("layout/modul/pemesanan/pemesanan.php");
}
elseif ($modul == 'pemesanan-tambah') {
	include_once("layout/modul/pemesanan/pemesanan-tambah.php");
}

// DATA PENGADAAN
elseif ($modul == 'pengadaan') {
	include_once("layout/modul/pengadaan/pengadaan.php");
}
elseif ($modul == 'pengadaan-tambah') {
	include_once("layout/modul/pengadaan/pengadaan-tambah.php");
}

// DATA PENGIRIMAN
elseif ($modul == 'pengiriman') {
	include_once("layout/modul/pengiriman/pengiriman.php");
}
elseif ($modul == 'pengiriman-tambah') {
	include_once("layout/modul/pengiriman/pengiriman-tambah.php");
}

// DATA USER
elseif ($modul == 'user') {
	include_once("layout/modul/user/user.php");
}
elseif ($modul == 'user-tambah') {
	include_once("layout/modul/user/user-tambah.php");
}