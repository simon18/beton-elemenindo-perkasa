<!-- BEGIN BODY -->
<body class="page-boxed">
<!-- Image Preload //-->
<div id="envor-preload">
	<span>Now loading.<br>Please wait.</span>
	<i class="fa fa-cog fa-spin"></i>
	<p></p>
</div>
<!-- BEGIN HEADER -->
<div class="header navbar">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner container">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
			<img src="assets/img/logosmallfront2.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="layout_boxed_page.html#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="assets/img/avatar.png" width="29px" height="29px" />
					<span class="username">
						 <?php echo $_SESSION['first_name']." ".$_SESSION['last_name']." (".ucwords($_SESSION['role']).")"; ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">
							<i class="fa fa-user"></i> My Profile
						</a>
					</li>
					<li>
						<a href="logout-code.php">
							<i class="fa fa-sign-out"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix"></div>

<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
	