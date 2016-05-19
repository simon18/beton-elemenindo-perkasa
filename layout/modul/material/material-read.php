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
				<th>Material</th>
				<th>Stok (Kg)</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="body-table">
			<?php
				$sql = "SELECT * FROM material";
				$query = mysql_query($sql);
				$i = 0;
				while($data = mysql_fetch_assoc($query))
				{
			?>
			<tr>
				<td><?php echo ($i+1) ?></td>
				<td><?php echo $data['material'] ?></td>
				<td><?php echo $data['stok'] ?></td>
				<td><?php echo $data['harga'] ?></td>
				<td>
					<a href="#dialog-material" id="<?php echo $data['id_material'] ?>" class="update" data-toggle="modal">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="#" id="<?php echo $data['id_material'] ?>" class="hapus">
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