<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM produk WHERE id_produk=".$_POST['hapus']);
} else {
	try
	{
		// deklarasikan variabel
		$id_produk	= $_POST['id'];
		$nama_produk	= $_POST['nama_produk'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		
		// validasi agar tidak ada data yang kosong
		if($nama_produk!="" && $stok!="") {
			// proses tambah data user
			if($id_produk == 0) {
				$query = mysql_query("INSERT INTO produk (nama_produk, stok, harga) VALUES('$nama_produk', '$stok', '$harga')");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			}else {
				$query = mysql_query("UPDATE produk SET nama_produk = '$nama_produk', stok = '$stok', harga = '$harga' WHERE id_produk = '$id_produk'
					");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			}
		}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}

// tutup koneksi ke database mysql
koneksi_tutup();

?>
