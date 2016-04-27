<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM sales WHERE id_sales=".$_POST['hapus']);
} else {
	try
	{
		// deklarasikan variabel
		$id_sales	= $_POST['id'];
		$username	= $_POST['username'];
		$nama_sales	= $_POST['nama_sales'];
		$alamat_sales	= $_POST['alamat_sales'];
		$telepon	= $_POST['telepon'];
		$email = $_POST['email'];
		
		// validasi agar tidak ada data yang kosong
		if($username!="" && $nama_sales!="") {
			// proses tambah data user
			if($id_sales == 0) {
				$query = mysql_query("INSERT INTO sales (id_sales, email, username, nama_sales, alamat_sales, telepon) VALUES('','$email','$username','$nama_sales','$alamat_sales', '$telepon')");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			} else {
				$query = mysql_query("UPDATE sales SET 
				email = '$email',
				username = '$username',
				nama_sales = '$nama_sales',
				alamat_sales = '$alamat_sales',
				telepon = '$telepon'
				WHERE id_sales = $id_sales
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
