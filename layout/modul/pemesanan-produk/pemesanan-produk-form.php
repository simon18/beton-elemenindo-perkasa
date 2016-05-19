<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_pemesanan 
$id_pemesanan = $_POST['id'];

// query untuk menampilkan user berdasarkan id_pemesanan 
$data = mysql_fetch_array(mysql_query("SELECT * FROM pemesanan_produk WHERE id_pemesanan=".$id_pemesanan));

// jika id_pemesanan  > 0 / form ubah data
if($id_pemesanan > 0) { 
	$pemesanan	= $data['pemesanan'];
	$stok = $data['stok'];
	$harga = $data['harga'];

//form tambah data
} else {
	$pemesanan	= "";
	$stok = "";
	$harga = "";
}
?>
<form id="form-pemesanan" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Pemesanan <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="pemesanan" class="form-control" placeholder="Bahan Baku" required value="<?php echo $pemesanan ?>">
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