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
	// deklarasikan variabel
	$id_user	= $_POST['id_user'];
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
			mysql_query("INSERT INTO users (id_user, role, email, username, password, first_name, last_name) VALUES('','$role','$email','$username','$password','$first_name', '$last_name')");
		// proses ubah data user
		} else {
			mysql_query("UPDATE users SET 
			role = '$role',
			email = '$email',
			username = '$username',
			password = '$password',
			first_name = '$first_name',
			last_name = '$last_name',
			WHERE id_user = $id_user
			");
		}
	}
}

// tutup koneksi ke database mysql
koneksi_tutup();

?>
