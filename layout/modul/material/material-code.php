<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM material WHERE id_material=".$_POST['hapus']);
} else {
	try
	{
		// deklarasikan variabel
		$id_material	= $_POST['id'];
		$material	= $_POST['material'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		
		// validasi agar tidak ada data yang kosong
		if($material!="" && $stok!="") {
			// proses tambah data user
			if($id_material == 0) {
				$query = mysql_query("INSERT INTO material (material, stok, harga) VALUES('$material', '$stok', '$harga')");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			}else {
				$query = mysql_query("UPDATE material SET material = '$material', stok = '$stok', harga = '$harga' WHERE id_material = '$id_material'
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
