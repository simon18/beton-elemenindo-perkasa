<?php
define('DB_NAMA', 'bep'); // sesuaikan dengan nama database anda
define('DB_USER', 'root'); // sesuaikan dengan nama pengguna database anda
define('DB_PASSWORD', ''); // sesuaikan dengan kata sandi database anda
define('DB_HOST', 'localhost'); // ganti jika letak database mysql di komputer lain
 
// fungsi untuk melakukan koneksi ke database mysql
function koneksi_buka() {
    mysql_select_db(DB_NAMA,mysql_connect(DB_HOST,DB_USER,DB_PASSWORD));
}
 
// fungsi untuk menutup koneksi ke database mysql
function koneksi_tutup() {
    mysql_close(mysql_connect(DB_HOST,DB_USER,DB_PASSWORD));
}
// BASE URL
$baseURL = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$baseURL .= "://".$_SERVER['HTTP_HOST'];
$baseURL .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

// URL asset jquery
$url = "http://localhost:8080/shout-store/admin/";

function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
}

date_default_timezone_set("Asia/Jakarta");