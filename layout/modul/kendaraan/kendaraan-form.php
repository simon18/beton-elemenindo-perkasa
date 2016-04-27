<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_kendaraan 
$id_kendaraan = $_POST['id'];

// query untuk menampilkan user berdasarkan id_kendaraan 
$data = mysql_fetch_array(mysql_query("SELECT * FROM kendaraan WHERE id_kendaraan=".$id_kendaraan));

// jika id_kendaraan  > 0 / form ubah data
if($id_kendaraan > 0) { 
	$no_polisi	= $data['no_polisi'];
	$kapasitas = $data['kapasitas'];

//form tambah data
} else {
	$no_polisi	= "";
	$kapasitas = "";
}
?>
<form id="form-kendaraan" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">No Polisi <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="no_polisi" class="form-control" placeholder="No Polisi" required value="<?php echo $no_polisi ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Kapasitas <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<div class="input-group">
					<input type="number" name="kapasitas" class="form-control" placeholder="Kapasitas" required value="<?php echo $kapasitas ?>">
					<span class="input-group-addon">
						<i>Buah</i>
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