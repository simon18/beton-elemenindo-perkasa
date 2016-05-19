<div class="table-toolbar">
	<div class="btn-group">
		<a class="btn blue add" data-toggle="modal" id="0" href="#dialog-pemesanan">
		<i class="fa fa-plus"></i> Tambah Pemesanan 
		</a>
	</div>
	<div class="btn-group pull-right">
		<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
		</button>
		<ul class="dropdown-menu pull-right">
			<li>
				<a href="#">
					<i class="fa fa-file-pdf-o"></i> Save as PDF
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-file-excel-o"></i> Export to Excel
				</a>
			</li>
		</ul>
	</div>
</div>
<div id="data-pemesanan">
	<!-- CONTENT GOES HERE -->
</div>
<div id='loader-image' class="display-none"></div>

<div class="modal fade" id="dialog-pemesanan" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Tambah Pemesanan</h4>
				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn blue" id="simpan-pemesanan">Simpan</button>
				</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<script>
	$('#loader-image').show();
  	showPemesanan();
  	// clicking the 'read store' button
	  $('#read-store').click(function(){
	      // show a loader img
	      $('#loader-image').show();
	      showPemesanan();
	  });
	function showPemesanan(){
           
	      // fade out effect first
	      $('#data-pemesanan').fadeOut('fast', function(){
	          $('#data-pemesanan').load('<?php echo $baseURL; ?>layout/modul/pemesanan/pemesanan-read.php', function(){
	              // hide loader image
	              $('#loader-image').hide(); 
	               
	              // fade in effect
	              $('#data-pemesanan').fadeIn('fast');
	          });
	      });
    }
	$(document).ready(function(){
         
        // deklarasikan variabel
        var id = 0;
        var main = "<?php echo $baseURL; ?>layout/modul/pemesanan/pemesanan-read.php";
     	// $("#data-pemesanan").load(main);
        // ketika tombol ubah/tambah di tekan
        $('.add, .update').live("click", function(){
             
            var url = "<?php echo $baseURL; ?>layout/modul/pemesanan/pemesanan-form.php";
            // ambil nilai id dari tombol ubah
            id = this.id;
             
            if(id != 0) {
                // ubah judul modal dialog
                $(".modal-title").html("Ubah Data Pemesanan");
            } else {
                // saran dari mas hangs 
                $(".modal-title").html("Tambah Data Pemesanan");
            }
 
            $.post(url, {id: id} ,function(data) {
                // tampilkan mahasiswa.form.php ke dalam <div class="modal-body"></div>
                $(".modal-body").html(data).show();
            });
        });
         
        // ketika tombol simpan ditekan
        $("#simpan-pemesanan").bind("click", function(event) {
        	var data = $("#form-pemesanan").serializeArray();
        	data.push({ name: "id", value: id });
            var url = "<?php echo $baseURL; ?>layout/modul/pemesanan/pemesanan-code.php";
            var stateSuccess = function(){
            	$('#loader-image').show();
				showPemesanan();
                // sembunyikan modal dialog
                $('#dialog-pemesanan').modal('hide');
                // kembalikan judul modal dialog
                $(".modal-title").html("Tambah Data Pemesanan");
                $("#simpan-pemesanan").html('&nbsp; Simpan');
			};
 			$.ajax({
				type : 'POST',
				url  : url,
				data : data,
				beforeSend: function()
				{ 
					$("#error").fadeOut();
					$("#simpan-pemesanan").html('<img src="<?php echo $baseURL; ?>assets/img/ajax_loading.gif" /> &nbsp; Menyimpan ...');
					setTimeout(function(){},3000);
				},
				success :  function(response)
					{      
					if(response=="ok"){
						$("#simpan-pemesanan").html('<img src="<?php echo $baseURL; ?>assets/img/ajax_loading.gif" /> &nbsp; Menyimpan ...');
						setTimeout(stateSuccess,4000);
					}
					else
					{
						$("#simpan-pemesanan").html('&nbsp; Simpan');
						alert(response);
					}
				}
			});
			return false;
        });
    });

	// HAPUS
	$(document).on('click', '.hapus', function(){
        var url = "<?php echo $baseURL; ?>layout/modul/pemesanan/pemesanan-code.php";
        // ambil nilai id dari tombol hapus
        id = this.id;
         
        // tampilkan dialog konfirmasi
        swal(
	      {
	        title: 'Apakah anda yakin?',
	        text: "Semua data yang berhubungan dengan data ini akan terhapus!",
	        type: 'warning',
	        showCancelButton: true,
	        confirmButtonColor: '#3085d6',
	        cancelButtonColor: '#d33',
	        confirmButtonText: 'Ya',
	        cancelButtonText: 'Tidak',
	        confirmButtonClass: 'btn btn-success btn-flat btn-xs',
	        cancelButtonClass: 'btn btn-danger btn-flat btn-xs',
	        closeOnConfirm: false,
	        closeOnCancel: true
	      },
	      function(isConfirm) {
	        if (isConfirm) {
	        	swal.disableButtons();
		          setTimeout(function() {
		            swal('Terhapus','','success');
		          }, 500)
	          // mengirimkan perintah penghapusan ke berkas transaksi.input.php
                $.post(url, {hapus: id} ,function() {
                    // show loader image
		            $('#loader-image').show();
		            // reload the store list
		            showPemesanan();
                });
	        }
	      }
	    );
    });
</script>