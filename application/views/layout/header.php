<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zorrito</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/materializecss/css/materialize.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">





	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green-light sidebar-collapse sidebar-mini">
<div class="wrapper">

	<header class="main-header">

		<!-- Logo -->
		<a href="#" class="logo" data-toggle="push-menu" role="button"  >
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini">CN</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Clinicor Norte</b></span>
		</a>

		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Messages: style can be found in dropdown.less-->

					<!-- Notifications: style can be found in dropdown.less -->

					<!-- Tasks: style can be found in dropdown.less -->
					
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						</a>
						<ul class="dropdown-menu">
							
							
							<span class="hidden-xs"><?php echo $this->session->userdata('s_nombre'); ?></span>
							<!-- Menu Footer-->
							<li class="user-footer">
								
									<a href="#" class="btn btn-default btn-flat">Cerrar Sesion</a>
								
							</li>
						</ul>
					</li>
					
				</ul>
			</div>	

		</nav>
	</header>