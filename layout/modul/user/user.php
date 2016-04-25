<div class="table-toolbar">
	<div class="btn-group">
		<a class="btn blue add" data-toggle="modal" id="0" href="#dialog-user">
		Tambah User <i class="fa fa-plus"></i>
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
<div id="data-user">
	<!-- CONTENT GOES HERE -->
</div>
<div id='loader-image' class="display-none"></div>

<div class="modal fade" id="dialog-user" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Tambah Bahan Baku</h4>
				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn blue" id="simpan-user">Simpan</button>
				</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<script>
	$('#loader-image').show();
  	showUser();
  	// clicking the 'read store' button
	  $('#read-store').click(function(){
	      // show a loader img
	      $('#loader-image').show();
	      showUser();
	  });
	function showUser(){
           
	      // fade out effect first
	      $('#data-user').fadeOut('fast', function(){
	          $('#data-user').load('<?php echo $baseURL; ?>layout/modul/user/user-read.php', function(){
	              // hide loader image
	              $('#loader-image').hide(); 
	               
	              // fade in effect
	              $('#data-user').fadeIn('fast');
	          });
	      });
    }
	$(document).ready(function(){
         
        // deklarasikan variabel
        var id = 0;
        var main = "<?php echo $baseURL; ?>layout/modul/user/user-read.php";
     	// $("#data-user").load(main);
        // ketika tombol ubah/tambah di tekan
        $('.add, .update').live("click", function(){
             
            var url = "<?php echo $baseURL; ?>layout/modul/user/user-form.php";
            // ambil nilai id dari tombol ubah
            id = this.id;
             
            if(id != 0) {
                // ubah judul modal dialog
                $(".modal-title").html("Ubah Data User");
            } else {
                // saran dari mas hangs 
                $(".modal-title").html("Tambah Data User");
            }
 
            $.post(url, {id: id} ,function(data) {
                // tampilkan mahasiswa.form.php ke dalam <div class="modal-body"></div>
                $(".modal-body").html(data).show();
            });
        });
        // ketika tombol simpan ditekan
        $("#simpan-user").bind("click", function(event) {
        	var data = $("#form-user").serializeArray();
        	data.push({ name: "id", value: id });
            var url = "<?php echo $baseURL; ?>layout/modul/user/user-code.php";
            var stateSuccess = function(){
            	$('#loader-image').show();
				showUser();
                // sembunyikan modal dialog
                $('#dialog-user').modal('hide');
                // kembalikan judul modal dialog
                $(".modal-title").html("Tambah Data User");
			};
 			$.ajax({
				type : 'POST',
				url  : url,
				data : data,
				beforeSend: function()
				{ 
					$("#error").fadeOut();
					$("#simpan-user").html('<img src="<?php echo $baseURL; ?>assets/img/ajax_loading.gif" /> &nbsp; Menyimpan ...');
					setTimeout(function(){},3000);
				},
				success :  function(response)
					{      
					if(response=="ok"){
						$("#simpan-user").html('<img src="<?php echo $baseURL; ?>assets/img/ajax_loading.gif" /> &nbsp; Menyimpan ...');
						setTimeout(stateSuccess,4000);
					}
					else
					{
						$("#simpan-user").html('&nbsp; Simpan');
						alert(response);
					}
				}
			});
			return false;
        });

        // ketika tombol simpan ditekan
        // $("#simpan-user").bind("click", function(event) {
        // 	var data = $("#form-user").serializeArray();
        //     var url = "<?php echo $baseURL; ?>layout/modul/user/user-code.php";
 
        //     // mengambil nilai dari inputbox, textbox dan select
        //     var v_role = $('select[name=irole]').val();
        //     var v_username = $('input:text[name=iusername]').val();
        //     var v_password = $('input[name=ipassword]').val();
        //     var v_first_name = $('input:text[name=ifirst_name]').val();
        //     var v_last_name = $('input:text[name=ilast_name]').val();
        //     var v_email = $('input[name=iemail]').val();
        //     // mengirimkan data ke berkas transaksi.input.php untuk di proses
        //     $.post(url, {role: v_role, username: v_username, password: v_password, first_name: v_first_name, last_name: v_last_name, email: v_email, id: id} ,function() {
        //         // tampilkan data mahasiswa yang sudah di perbaharui
        //         // ke dalam <div id="data-mahasiswa"></div>
        //         $("#data-user").load(main);
 
        //         // sembunyikan modal dialog
        //         $('#dialog-user').modal('hide');
                 
        //         // kembalikan judul modal dialog
        //         $(".modal-title").html("Tambah Data User");
        //     });
        // });
    });

	// HAPUS
	$(document).on('click', '.hapus', function(){
        var url = "<?php echo $baseURL; ?>layout/modul/user/user-code.php";
        // ambil nilai id dari tombol hapus
        id = this.id;
         
        // tampilkan dialog konfirmasi
        swal(
	      {
	        title: 'Apakah anda yakin?',
	        text: "Semua data yang berhubungan dengan store ini akan terhapus!",
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
		            showUser();
                });
	        }
	      }
	    );
    });
</script>