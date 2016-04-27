<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM supplier WHERE id_supplier=".$_POST['hapus']);
} else {
	try
	{
		// deklarasikan variabel
		$id_supplier	= $_POST['id'];
		$username	= $_POST['username'];
		$nama	= $_POST['nama'];
		$nama_supplier	= $_POST['nama_supplier'];
		$alamat	= $_POST['alamat'];
		$telepon	= $_POST['telepon'];
		$email = $_POST['email'];
		
		// validasi agar tidak ada data yang kosong
		if($username!="" && $nama_supplier!="") {
			// proses tambah data user
			if($id_supplier == 0) {
				$query = mysql_query("INSERT INTO supplier (id_supplier, email, username, nama, nama_supplier, alamat, telepon) VALUES('','$email','$username','$nama', '$nama_supplier','$alamat', '$telepon')");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			} else {
				$query = mysql_query("UPDATE supplier SET 
				email = '$email',
				username = '$username',
				nama = '$nama',
				nama_supplier = '$nama_supplier',
				alamat = '$alamat',
				telepon = '$telepon'
				WHERE id_supplier = $id_supplier
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
