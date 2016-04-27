<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM bahan_baku WHERE id_bahan_baku=".$_POST['hapus']);
} else {
	try
	{
		// deklarasikan variabel
		$id_bahan_baku	= $_POST['id'];
		$bahan_baku	= $_POST['bahan_baku'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		
		// validasi agar tidak ada data yang kosong
		if($bahan_baku!="" && $stok!="") {
			// proses tambah data user
			if($id_bahan_baku == 0) {
				$query = mysql_query("INSERT INTO bahan_baku (bahan_baku, stok, harga) VALUES('$bahan_baku', '$stok', '$harga')");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			}else {
				$query = mysql_query("UPDATE bahan_baku SET bahan_baku = '$bahan_baku', stok = '$stok', harga = '$harga' WHERE id_bahan_baku = '$id_bahan_baku'
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
