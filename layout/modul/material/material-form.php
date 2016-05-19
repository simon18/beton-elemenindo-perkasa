<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_material 
$id_material = $_POST['id'];

// query untuk menampilkan user berdasarkan id_material 
$data = mysql_fetch_array(mysql_query("SELECT * FROM material WHERE id_material=".$id_material));

// jika id_material  > 0 / form ubah data
if($id_material > 0) { 
	$material	= $data['material'];
	$stok = $data['stok'];
	$harga = $data['harga'];

//form tambah data
} else {
	$material	= "";
	$stok = "";
	$harga = "";
}
?>
<form id="form-material" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Material <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="material" class="form-control" placeholder="Material" required value="<?php echo $material ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Stok <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<div class="input-group">
					<input type="number" name="stok" class="form-control" placeholder="Stok" required value="<?php echo $stok ?>">
					<span class="input-group-addon">
						<i>Kg</i>
					</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Harga <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<div class="input-group">
					<input type="number" name="harga" class="form-control" placeholder="Harga" required value="<?php echo $harga ?>">
					<span class="input-group-addon">
						<i>/Kg</i>
					</span>
				</div>
			</div>
		</div>
	</div>
</form>

<?php
// tutup koneksi ke database mysql
koneksi_tutup();

?>