<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_user 
$id_user = $_POST['id'];

// query untuk menampilkan user berdasarkan id_user 
$data = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE id_user=".$id_user));

// jika id_user  > 0 / form ubah data
if($id_user > 0) { 
	$role	= $data['role'];
	$username	= $data['username'];
	$password	= $data['password'];
	$first_name	= $data['first_name'];
	$last_name	= $data['last_name'];
	$email = $data['email'];

//form tambah data
} else {
	$role	= "";
	$username	= "";
	$password	= "";
	$first_name	= "";
	$last_name	= "";
	$email = "";
}
?>
<form id="form-user" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Role <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<select class="form-control" name="role" required>
					<option value="">~ Pilih Role ~</option>
					<option value="manager_staff" <?php echo ($role == "manager_staff"?"selected":"") ?>>Manager Staff</option>
					<option value="staff" <?php echo ($role == "staff"?"selected":"") ?>>Staff</option>
					<option value="supplier" <?php echo ($role == "supplier"?"selected":"") ?>>Supplier</option>
					<option value="sales" <?php echo ($role == "sales"?"selected":"") ?>>Sales</option>
					<option value="admin" <?php echo ($role == "admin"?"selected":"") ?>>Admin</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Username <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $username ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Password <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="password" name="password" class="form-control" placeholder="Password" required value="<?php echo $password ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">First Name <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="first_name" class="form-control" placeholder="First Name" required value="<?php echo $first_name ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Last Name <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="last_name" class="form-control" placeholder="Last Name" required value="<?php echo $last_name ?>">
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