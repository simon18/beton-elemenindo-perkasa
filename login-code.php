<?php
// CONNECTING TO DATABASE
include_once("resources/config.php");
koneksi_buka();

if(isset($_POST['btn-login']))
{
	$username = isset($_POST['username'])?$_POST['username']:'';
	$password = md5(isset($_POST['password'])?$_POST['password']:'');
	$role = isset($_POST['role'])?$_POST['role']:'';
	try
  	{ 
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = '$role'";
		$q = mysql_query($sql);
		$qCount = mysql_num_rows($q);
		session_start();
		if ($qCount != 0 ) {
			$data = mysql_fetch_assoc($q);
			$_SESSION['first_name'] = $data['first_name'];
			$_SESSION['last_name'] = $data['last_name'];
			$_SESSION['id_user'] = $data['id_user'];
			$_SESSION['role'] = $data['role'];
			$_SESSION['loginAplikasiBEP']= true;
			echo "ok"; // log in
		}
		else
		{
			// header('Location:index.php');
			echo "Username, Password dan Role tidak sesuai";
		}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}
koneksi_tutup();


