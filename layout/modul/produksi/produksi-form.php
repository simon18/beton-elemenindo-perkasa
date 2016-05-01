<?php
// CONNECTING TO DATABASE
$lokasi = "../../../";
include_once($lokasi."resources/config.php");

// buat koneksi ke database mysql
koneksi_buka();

// tangkap variabel id_produk 
$id_produk = $_POST['id'];

// query untuk menampilkan user berdasarkan id_produk 
$data = mysql_fetch_array(mysql_query("SELECT * FROM produk WHERE id_produk=".$id_produk));

// jika id_produk  > 0 / form ubah data
if($id_produk > 0) { 
	$nama_produk	= $data['nama_produk'];
	$stok = $data['stok'];
	$harga = $data['harga'];

//form tambah data
} else {
	$nama_produk	= "";
	$stok = "";
	$harga = "";
}
?>
<form id="form-produksi" class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Nama Produk <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required value="<?php echo $nama_produk ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Stok <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<div class="input-group">
					<input type="number" name="stok" class="form-control" placeholder="Stok" required value="<?php echo $stok ?>">
					<span class="input-group-addon">
						<i>Buah</i>
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
						<i>/Buah</i>
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