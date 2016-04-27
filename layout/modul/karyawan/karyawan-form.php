<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_karyawan 
$id_karyawan = $_POST['id'];

// query untuk menampilkan user berdasarkan id_karyawan 
$data = mysql_fetch_array(mysql_query("SELECT * FROM karyawan WHERE id_karyawan=".$id_karyawan));

// jika id_karyawan  > 0 / form ubah data
if($id_karyawan > 0) { 
	$nip	= $data['nip'];
	$nama	= $data['nama'];
	$telepon = $data['telepon'];
	$email = $data['email'];
	$jabatan = $data['jabatan'];

//form tambah data
} else {
	$nip	= "";
	$nama	= "";
	$telepon	= "";
	$email = "";
	$jabatan = "";
}
?>
<form id="form-karyawan" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">NIP <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="nip" class="form-control" placeholder="NIP" required value="<?php echo $nip ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Nama <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="nama" class="form-control" placeholder="Nama" required value="<?php echo $nama ?>">
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
		<div class="form-group">
			<label class="col-md-3 control-label">Jabatan <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<select class="form-control" name="jabatan" required>
					<option value="">~ Pilih Jabatan ~</option>
					<option value="manager" <?php echo ($jabatan == "manager"?"selected":"") ?>>Manager</option>
					<option value="staff" <?php echo ($jabatan == "staff"?"selected":"") ?>>Staff</option>
					<option value="Bagian Gudang" <?php echo ($jabatan == "Bagian Gudang"?"selected":"") ?>>Bagian Gudang</option>
				</select>
			</div>
		</div>
	</div>
</form>

<?php
// tutup koneksi ke database mysql
koneksi_tutup();

?>