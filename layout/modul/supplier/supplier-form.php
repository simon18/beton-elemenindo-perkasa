<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_supplier 
$id_supplier = $_POST['id'];

// query untuk menampilkan user berdasarkan id_supplier 
$data = mysql_fetch_array(mysql_query("SELECT * FROM supplier WHERE id_supplier=".$id_supplier));

// jika id_supplier  > 0 / form ubah data
if($id_supplier > 0) { 
	$username	= $data['username'];
	$nama	= $data['nama'];
	$nama_supplier	= $data['nama_supplier'];
	$alamat	= $data['alamat'];
	$telepon = $data['telepon'];
	$email = $data['email'];

//form tambah data
} else {
	$username	= "";
	$nama	= "";
	$nama_supplier	= "";
	$alamat	= "";
	$telepon	= "";
	$email = "";
}
?>
<form id="form-supplier" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Username <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $username ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Nama <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="nama" class="form-control" placeholder="Nama" required value="<?php echo $nama ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Nama Supplier <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier" required value="<?php echo $nama_supplier ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Alamat <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<textarea name="alamat" class="form-control" placeholder="Alamat" required> <?php echo $alamat ?></textarea>
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