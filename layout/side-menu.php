<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<?php
		$modul = isset($_GET['modul'])?$_GET['modul']:'';
		?>
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="5000">
			<li class="sidebar-toggler-wrapper">
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler hidden-phone">
				</div>
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			</li>
			<li class="start <?php echo ($modul == '' || $modul == 'home')?"active":'';  ?>">
				<a href="home">
					<i class="fa fa-home"></i>
					<span class="title">
						Home
					</span>
				</a>
			</li>
			<!-- ======================== MENU ADMIN ======================== -->
			<?php
				if ($_SESSION['role'] == "admin") {
				
			?>
			<li class="start <?php echo ($modul == 'user')?"active":'';  ?>">
				<a href="user">
					<i class="fa fa-users"></i>
					<span class="title">
						Data User
					</span>
				</a>
			</li>
			<!-- <li class="start <?php echo ($modul == 'sales')?"active":'';  ?>">
				<a href="sales">
					<i class="fa fa-users"></i>
					<span class="title">
						Data Sales
					</span>
				</a>
			</li>
			<li class="start <?php echo ($modul == 'supplier')?"active":'';  ?>">
				<a href="supplier">
					<i class="fa fa-users"></i>
					<span class="title">
						Data Supllier
					</span>
				</a>
			</li>
			<li class="start <?php echo ($modul == 'karyawan')?"active":'';  ?>">
				<a href="karyawan">
					<i class="fa fa-users"></i>
					<span class="title">
						Data Karyawan
					</span>
				</a>
			</li> -->
			<li class="start <?php echo ($modul == 'kendaraan')?"active":'';  ?>">
				<a href="kendaraan">
					<i class="fa fa-truck"></i>
					<span class="title">
						Data Kendaraan
					</span>
				</a>
			</li>
			<?php
				}
			?>
			<!-- ======================== END MENU ADMIN ======================== -->
			
			<!-- ======================== MENU PERSEDIAAN MATERIAL ======================== -->
			
			<?php
				if ($_SESSION['role'] == "kepala_gudang" || $_SESSION['role'] == "manager") {
				
			?>
			<li class="start <?php echo ($modul == 'material')?"active":'';  ?>">
				<a href="material">
					<i class="fa fa-puzzle-piece"></i>
					<span class="title">
						Persediaan Material
					</span>
				</a>
			</li>
			<?php
				}
			?>
			<!-- ======================== END MENU PERSEDIAAN MATERIAL ======================== -->

			<!-- ======================== MENU PERSEDIAAN PRODUKSI ======================== -->
			<?php
				if ($_SESSION['role'] == "kepala_gudang" || $_SESSION['role'] == "manager") {
				
			?>
			<li class="start <?php echo ($modul == 'produk')?"active":'';  ?>">
				<a href="produk">
					<i class="fa fa-puzzle-piece"></i>
					<span class="title">
						Persediaan Produk
					</span>
				</a>
			</li>
			<?php
				}
			?>
			<!-- ======================== END MENU PERSEDIAAN PRODUKSI ======================== -->

			<!-- ======================== MENU PEMESANAN PRODUK ======================== -->
			<?php
				if ($_SESSION['role'] == "sales" || $_SESSION['role'] == "manager") {
				
			?>
			<li class="start <?php echo ($modul == 'pemesanan-produk')?"active":'';  ?>">
				<a href="pemesanan-produk">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">
						Pemesanan Produk
					</span>
				</a>
			</li>
			<?php
				}
			?>
			<!-- ======================== END MENU PEMESANAN PRODUK ======================== -->
			
			<!-- ======================== MENU PEMESANAN MATERIAL ======================== -->
			<?php
				if ($_SESSION['role'] == "staff" || $_SESSION['role'] == "manager") {
				
			?>
			<li class="start <?php echo ($modul == 'pemesanan-material')?"active":'';  ?>">
				<a href="pemesanan-material">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">
						Pemesanan Material
					</span>
				</a>
			</li>
			<?php
				}
			?>
			<!-- ======================== END MENU PEMESANAN MATERIAL ======================== -->

			<!-- ======================== MENU PENGADAAN ======================== -->
			<?php
				if ($_SESSION['role'] == "adaw") {
				
			?>
			<li class="start <?php echo ($modul == 'pengadaan')?"active":'';  ?>">
				<a href="pengadaan">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">
						Pengadaan
					</span>
				</a>
			</li>
			<?php
				}
			?>
			<!-- ======================== END MENU PENGADAAN ======================== -->

			<!-- ======================== END MENU PENGIRIMAN ======================== -->
			<?php
				if ($_SESSION['role'] == "kepala_gudang") {
				
			?>
			<li class="start <?php echo ($modul == 'pengiriman')?"active":'';  ?>">
				<a href="pengiriman">
					<i class="fa fa-truck"></i>
					<span class="title">
						Pengiriman
					</span>
				</a>
			</li>
			<?php
				}
			?>
			<!-- ======================== END MENU PENGIRIMAN ======================== -->
			
			<li class="start ">
				<a href="logout-code.php">
					<i class="fa fa-sign-out"></i>
					<span class="title">
						Keluar
					</span>
				</a>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<!-- END SIDEBAR