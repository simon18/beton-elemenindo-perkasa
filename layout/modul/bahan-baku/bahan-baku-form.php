<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_bahan_baku 
$id_bahan_baku = $_POST['id'];

// query untuk menampilkan user berdasarkan id_bahan_baku 
$data = mysql_fetch_array(mysql_query("SELECT * FROM bahan_baku WHERE id_bahan_baku=".$id_bahan_baku));

// jika id_bahan_baku  > 0 / form ubah data
if($id_bahan_baku > 0) { 
	$bahan_baku	= $data['bahan_baku'];
	$stok = $data['stok'];

//form tambah data
} else {
	$bahan_baku	= "";
	$stok = "";
}
?>
<form id="form-bahan-baku" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Bahan Baku <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="bahan_baku" class="form-control" placeholder="Bahan Baku" required value="<?php echo $bahan_baku ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Stok <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="stok" class="form-control" placeholder="Stok" required value="<?php echo $stok ?>">
			</div>
		</div>
		
	</div>
</form>

<?php
// tutup koneksi ke database mysql
koneksi_tutup();

?>