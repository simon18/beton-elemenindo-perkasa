<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM kendaraan WHERE id_kendaraan=".$_POST['hapus']);
}
elseif(isset($_POST['update_status']))
{
	if ($_POST['kondisi'] == "Tersedia") {
		mysql_query("UPDATE kendaraan SET status = 0 WHERE id_kendaraan =".$_POST['update_status']);
	}
	else
	{
		mysql_query("UPDATE kendaraan SET status = 1 WHERE id_kendaraan =".$_POST['update_status']);
	}
}
else {
	try
	{
		// deklarasikan variabel
		$id_kendaraan	= $_POST['id'];
		$no_polisi	= $_POST['no_polisi'];
		$kapasitas = $_POST['kapasitas'];
		
		// validasi agar tidak ada data yang kosong
		if($no_polisi!="" && $kapasitas!="") {
			// proses tambah data user
			if($id_kendaraan == 0) {
				$query = mysql_query("INSERT INTO kendaraan (no_polisi, kapasitas, status) VALUES('$no_polisi', '$kapasitas', 1)");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			}else {
				$query = mysql_query("UPDATE kendaraan SET no_polisi = '$no_polisi', kapasitas = '$kapasitas' WHERE id_kendaraan = '$id_kendaraan'
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
