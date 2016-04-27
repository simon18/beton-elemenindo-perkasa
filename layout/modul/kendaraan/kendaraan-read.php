<?php
	$lokasi = "../../../";
	include_once($lokasi."resources/config.php");
	koneksi_buka();
?>
<div class="table-responsive">
	<table class="table table-bordered table-hover" id="dataTable">
		<thead>
			<tr>
				<th>#</th>
				<th>No Polisi</th>
				<th>Kapasitas (Buah)</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="body-table">
			<?php
				$sql = "SELECT * FROM kendaraan";
				$query = mysql_query($sql);
				$i = 0;
				while($data = mysql_fetch_assoc($query))
				{
			?>
			<tr>
				<td><?php echo ($i+1) ?></td>
				<td><?php echo $data['no_polisi'] ?></td>
				<td><?php echo $data['kapasitas'] ?></td>
				<td>
					<?php echo ($data['status'] == 1)?"<a href='#dialog-status' class='update-status' id='".$data['id_kendaraan']."'><span class='label label-success'>Tersedia</span></a>":"<a href='#dialog-status' class='update-status' id='".$data['id_kendaraan']."'><span class='label label-danger'>Tidak Tersedia</span></a>"; ?>
				</td>
				<td>
					<a href="#dialog-kendaraan" id="<?php echo $data['id_kendaraan'] ?>" class="update" data-toggle="modal" title="Edit">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="#" id="<?php echo $data['id_kendaraan'] ?>" class="hapus" title="Hapus">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
			<?php
				$i++;
			}
			?>
		</tbody>
	</table>
</div>
<!-- page script DATA TABLES-->
<script> 
  $(function () {
    $('#dataTable').DataTable();
  });
</script>
<?php
	koneksi_tutup();
?>