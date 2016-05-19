<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM users WHERE id_user=".$_POST['hapus']);
} else {
	try
	{
		// deklarasikan variabel
		$id_user	= $_POST['id'];
		$role	= $_POST['role'];
		$username	= $_POST['username'];
		$password	= $_POST['password'];
		$first_name	= $_POST['first_name'];
		$last_name	= $_POST['last_name'];
		$email = $_POST['email'];
		
		// validasi agar tidak ada data yang kosong
		if($role!="" && $username!="" && $password!="") {
			// proses tambah data user
			if($id_user == 0) {
				$passwordTambah =  md5($_POST['password']);
				$query = mysql_query("INSERT INTO users (id_user, role, email, username, password, first_name, last_name) VALUES('','$role','$email','$username','$passwordTambah','$first_name', '$last_name')");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			} else {
				$query = mysql_query("UPDATE users SET 
				role = '$role',
				email = '$email',
				username = '$username',
				password = '$password',
				first_name = '$first_name',
				last_name = '$last_name'
				WHERE id_user = $id_user
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
