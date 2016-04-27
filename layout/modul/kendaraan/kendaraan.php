<div class="table-toolbar">
	<div class="btn-group">
		<a class="btn blue add" data-toggle="modal" id="0" href="#dialog-kendaraan">
		<i class="fa fa-plus"></i> Tambah Kendaraan 
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
<div id="data-kendaraan">
	<!-- CONTENT GOES HERE -->
</div>
<div id='loader-image' class="display-none"></div>

<div class="modal fade" id="dialog-kendaraan" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Tambah Kendaraan</h4>
				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn blue" id="simpan-kendaraan">Simpan</button>
				</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<script>
	$('#loader-image').show();
  	showKendaraan();
  	// clicking the 'read store' button
	  $('#read-store').click(function(){
	      // show a loader img
	      $('#loader-image').show();
	      showKendaraan();
	  });
	function showKendaraan(){
           
	      // fade out effect first
	      $('#data-kendaraan').fadeOut('fast', function(){
	          $('#data-kendaraan').load('<?php echo $baseURL; ?>layout/modul/kendaraan/kendaraan-read.php', function(){
	              // hide loader image
	              $('#loader-image').hide(); 
	               
	              // fade in effect
	              $('#data-kendaraan').fadeIn('fast');
	          });
	      });
    }
	$(document).ready(function(){
         
        // deklarasikan variabel
        var id = 0;
        var main = "<?php echo $baseURL; ?>layout/modul/kendaraan/kendaraan-read.php";
     	$('.add, .update').live("click", function(){

 		});
        // ketika tombol ubah/tambah di tekan
        $('.add, .update').live("click", function(){
             
            var url = "<?php echo $baseURL; ?>layout/modul/kendaraan/kendaraan-form.php";
            // ambil nilai id dari tombol ubah
            id = this.id;
             
            if(id != 0) {
                // ubah judul modal dialog
                $(".modal-title").html("Ubah Data Kendaraan");
            } else {
                // saran dari mas hangs 
                $(".modal-title").html("Tambah Data Kendaraan");
            }
 
            $.post(url, {id: id} ,function(data) {
                // tampilkan mahasiswa.form.php ke dalam <div class="modal-body"></div>
                $(".modal-body").html(data).show();
            });
        });
         
        // ketika tombol simpan ditekan
        $("#simpan-kendaraan").bind("click", function(event) {
        	var data = $("#form-kendaraan").serializeArray();
        	data.push({ name: "id", value: id });
            var url = "<?php echo $baseURL; ?>layout/modul/kendaraan/kendaraan-code.php";
            var stateSuccess = function(){
            	$('#loader-image').show();
				showKendaraan();
                // sembunyikan modal dialog
                $('#dialog-kendaraan').modal('hide');
                // kembalikan judul modal dialog
                $(".modal-title").html("Tambah Data Kendaraan");
                $("#simpan-kendaraan").html('&nbsp; Simpan');
			};
 			$.ajax({
				type : 'POST',
				url  : url,
				data : data,
				beforeSend: function()
				{ 
					$("#error").fadeOut();
					$("#simpan-kendaraan").html('<img src="<?php echo $baseURL; ?>assets/img/ajax_loading.gif" /> &nbsp; Menyimpan ...');
					setTimeout(function(){},3000);
				},
				success :  function(response)
					{      
					if(response=="ok"){
						$("#simpan-kendaraan").html('<img src="<?php echo $baseURL; ?>assets/img/ajax_loading.gif" /> &nbsp; Menyimpan ...');
						setTimeout(stateSuccess,4000);
					}
					else
					{
						$("#simpan-kendaraan").html('&nbsp; Simpan');
						alert(response);
					}
				}
			});
			return false;
        });
    });

	// HAPUS
	$(document).on('click', '.hapus', function(){
        var url = "<?php echo $baseURL; ?>layout/modul/kendaraan/kendaraan-code.php";
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
		            showKendaraan();
                });
	        }
	      }
	    );
    });
	
	// EDIT STATUS
	$(document).on('click', '.update-status', function(){
        var url = "<?php echo $baseURL; ?>layout/modul/kendaraan/kendaraan-code.php";
        // ambil nilai id dari tombol hapus
        id = this.id;
        var kondisi = $(this).text();
        // tampilkan dialog konfirmasi
        swal(
	      {
	        title: 'Ubah Status Kendaraan?',
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
		            swal('Status Berhasil Di Ubah','','success');
		          }, 500)
	          // mengirimkan perintah penghapusan ke berkas transaksi.input.php
                $.post(url, {update_status: id, kondisi: kondisi} ,function() {
                    // show loader image
		            $('#loader-image').show();
		            // reload the store list
		            showKendaraan();
                });
	        }
	      }
	    );
    });
</script>