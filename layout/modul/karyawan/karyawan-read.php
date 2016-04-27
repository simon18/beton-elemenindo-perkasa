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
				<th>NIP</th>
				<th>Nama</th>
				<th>Telepon</th>
				<th>Email</th>
				<th>Jabatan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="body-table">
			<?php
				$sql = "SELECT * FROM karyawan";
				$query = mysql_query($sql);
				$i = 0;
				while($data = mysql_fetch_assoc($query))
				{
			?>
			<tr>
				<td><?php echo ($i+1) ?></td>
				<td><?php echo $data['nip'] ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['telepon'] ?></td>
				<td><?php echo $data['email'] ?></td>
				<td><?php echo $data['jabatan'] ?></td>
				<td>
					<a href="#dialog-karyawan" id="<?php echo $data['id_karyawan'] ?>" class="update" data-toggle="modal">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="#" id="<?php echo $data['id_karyawan'] ?>" class="hapus">
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