<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// proses menghapus data user
if(isset($_POST['hapus'])) {
	mysql_query("DELETE FROM karyawan WHERE id_karyawan=".$_POST['hapus']);
} else {
	try
	{
		// deklarasikan variabel
		$id_karyawan	= $_POST['id'];
		$nip	= $_POST['nip'];
		$nama	= $_POST['nama'];
		$telepon	= $_POST['telepon'];
		$email = $_POST['email'];
		$jabatan = $_POST['jabatan'];
		
		// validasi agar tidak ada data yang kosong
		if($nip !="" && $nama !="") {
			// proses tambah data user
			if($id_karyawan == 0) {
				$query = mysql_query("INSERT INTO karyawan (id_karyawan, email, nip, nama, telepon, jabatan) VALUES('','$email','$nip','$nama', '$telepon', '$jabatan')");
				if ($query) {
					echo "ok"; 
				}
				else{
					echo mysql_error();
				}
			// proses ubah data user
			} else {
				$query = mysql_query("UPDATE karyawan SET 
				email = '$email',
				nama = '$nama',
				nip = '$nip',
				telepon = '$telepon',
				jabatan = '$jabatan'
				WHERE id_karyawan = $id_karyawan
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
