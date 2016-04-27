<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_sales 
$id_sales = $_POST['id'];

// query untuk menampilkan user berdasarkan id_sales 
$data = mysql_fetch_array(mysql_query("SELECT * FROM sales WHERE id_sales=".$id_sales));

// jika id_sales  > 0 / form ubah data
if($id_sales > 0) { 
	$username	= $data['username'];
	$nama_sales	= $data['nama_sales'];
	$alamat_sales	= $data['alamat_sales'];
	$telepon = $data['telepon'];
	$email = $data['email'];

//form tambah data
} else {
	$username	= "";
	$nama_sales	= "";
	$alamat_sales	= "";
	$telepon	= "";
	$email = "";
}
?>
<form id="form-sales" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Username <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $username ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">First Name <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="nama_sales" class="form-control" placeholder="First Name" required value="<?php echo $nama_sales ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Alamat <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<textarea name="alamat_sales" class="form-control" placeholder="Alamat" required> <?php echo $alamat_sales ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Telepon <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="number" name="telepon" class="form-control" placeholder="Telepon" required value="<?php echo $telepon ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Email <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo $email ?>">
			</div>
		</div>
	</div>
</form>

<?php
// tutup koneksi ke database mysql
koneksi_tutup();

?>