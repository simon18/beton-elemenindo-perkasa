
<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN PAGE HEADER-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
						<?php echo ucwords($modul); ?>
						</h3>
						<ul class="page-breadcrumb breadcrumb">
							<li class="btn-group">
								<button type="button" class="btn blue dropdown-toggle" style="cursor:default">
								<i class="fa fa-calendar"></i>
								<span>
									<?php echo indonesian_date (); ?>
								</span>
								</button>
							</li>
							<li>
								<i class="fa fa-home"></i>
								<a href="home">
									Home
								</a>
								<?php
									if (($modul != 'home') ||($modul != '')) {
								?>
								<i class="fa fa-angle-right"></i>
								<?php
									}
								?>
							</li>
							<?php
								if (($modul != 'home') || ($modul != '')) {
							?>
							<li>
								<a href="<?php echo $modul; ?>">
									<?php echo ucwords($modul); ?>
								</a>
							</li>
							<?php
								}
							?>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						 <?php include_once("resources/dynamic-content.php") ?>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		</div>
	<!-- END CONTAINER -->