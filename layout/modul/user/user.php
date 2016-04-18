<?php
	koneksi_buka();
?>
<div class="table-toolbar">
	<div class="btn-group">
		<a class="btn blue add" data-toggle="modal" href="#dialog-user">
		Tambah User <i class="fa fa-plus"></i>
		</a>
	</div>
	<div class="btn-group pull-right">
		<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
		</button>
		<ul class="dropdown-menu pull-right">
			<li>
				<a href="export_file/export_pdf/kontrakan">
					<i class="fa fa-file-pdf-o"></i> Save as PDF
				</a>
			</li>
			<li>
				<a href="export_file/export_excel/kontrakan">
					<i class="fa fa-file-excel-o"></i> Export to Excel
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="table-responsive">
	<table class="table table-bordered table-hover" id="dataTable">
		<thead>
			<tr>
				<th>#</th>
				<th>Role</th>
				<th>Username</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT * FROM users";
				$query = mysql_query($sql);
				$i = 0;
				while($data = mysql_fetch_assoc($query))
				{
			?>
			<tr>
				<td><?php echo ($i+1) ?></td>
				<td><?php echo $data['role'] ?></td>
				<td><?php echo $data['username'] ?></td>
				<td><?php echo $data['first_name'] ?></td>
				<td><?php echo $data['last_name'] ?></td>
				<td><?php echo $data['email'] ?></td>
				<td>
					<a href="#dialog-user" id="<?php echo $data['id_user'] ?>" class="update" data-toggle="modal">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="#" id="<?php echo $data['id_user'] ?>" class="hapus">
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
<script type="text/javascript">
	$(document).ready(function(){
         
        // deklarasikan variabel
        var id_user = 0;
        var main = "<?php echo $baseURL; ?>layout/modul/user/user-read.php";
         
        // ketika tombol ubah/tambah di tekan
        $('.add, .update').live("click", function(){
             
            var url = "<?php echo $baseURL; ?>layout/modul/user/user-form.php";
            // ambil nilai id dari tombol ubah
            id_user = this.id;
             
            if(id_user != 0) {
                // ubah judul modal dialog
                $(".modal-title").html("Ubah Data User");
            } else {
                // saran dari mas hangs 
                $(".modal-title").html("Tambah Data User");
            }
 
            $.post(url, {id: id_user} ,function(data) {
                // tampilkan mahasiswa.form.php ke dalam <div class="modal-body"></div>
                $(".modal-body").html(data).show();
            });
        });
         
        // ketika tombol hapus ditekan
        $('.hapus').live("click", function(){
            var url = "<?php echo $baseURL; ?>layout/modul/user/user-code.php";
            // ambil nilai id dari tombol hapus
            id_user = this.id;
             
            // tampilkan dialog konfirmasi
            var answer = confirm("Apakah anda ingin mengghapus data ini?");
             
            // ketika ditekan tombol ok
            if (answer) {
                // mengirimkan perintah penghapusan ke berkas transaksi.input.php
                $.post(url, {hapus: id_user} ,function() {
                    // tampilkan data mahasiswa yang sudah di perbaharui
                    // ke dalam <div id="data-mahasiswa"></div>
                    var table = $('#dataTable').DataTable();
					table.ajax.reload();
                });
            }
        });
         
        // // ketika tombol simpan ditekan
        // $("#simpan-mahasiswa").bind("click", function(event) {
        //     var url = "mahasiswa.input.php";
 
        //     // mengambil nilai dari inputbox, textbox dan select
        //     var v_nim = $('input:text[name=nim]').val();
        //     var v_nama = $('input:text[name=nama]').val();
        //     var v_alamat = $('textarea[name=alamat]').val();
        //     var v_kelas = $('select[name=kelas]').val();
        //     var v_status = $('select[name=status]').val();
 
        //     // mengirimkan data ke berkas transaksi.input.php untuk di proses
        //     $.post(url, {nim: v_nim, nama: v_nama, alamat: v_alamat, kelas: v_kelas, status: v_status, id: id_user} ,function() {
        //         // tampilkan data mahasiswa yang sudah di perbaharui
        //         // ke dalam <div id="data-mahasiswa"></div>
        //         $("#data-mahasiswa").load(main);
 
        //         // sembunyikan modal dialog
        //         $('#dialog-mahasiswa').modal('hide');
                 
        //         // kembalikan judul modal dialog
        //         $("#myModalLabel").html("Tambah Data Mahasiswa");
        //     });
        // });
    });
</script>

<div class="modal fade" id="dialog-user" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Tambah Kontrakan</h4>
				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn blue">Simpan</button>
				</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<?php
	koneksi_tutup();
?>