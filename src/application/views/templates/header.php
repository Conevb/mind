<!DOCTYPE html>
<html class="no-js" lang="sr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<title>Bootstrap 4 Starter Pack</title>
</head>

<body>
<div class="d-flex flex-column">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light sticky-top order-lg-3">
		<div class="container">
			<button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse w-75" id="mainMenu">
				<ul class="navbar-nav text-uppercase font-weight-bold">
					<li class="nav-item active"><a href="<?php echo base_url(); ?>" class="nav-link">Početna</a></li>
					<li class="nav-item"><a href="<?php echo base_url(); ?>proizvodi" class="nav-link">Prodavnica</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Kontakt</a></li>
				</ul>
			</div>

			<!-- Cart Button -->
			<div class="dropdown show">
				<a href="#" class="btn btn-link dropdown-toggle" role="button" id="cartDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-shopping-cart text-primary mr-2"></i>Korpa
				</a>

				<div class="dropdown-menu" aria-labelledby="#cartDropdown">
					<a href="#" class="dropdown-item">Link</a>
				</div>
			</div>
		</div>
	</nav>

	<!-- Top Bar -->
	<div class="top-bar bg-dark text-white py-2 order-lg-1">
		<div class="container d-flex">
			<span class="mr-auto font-weight-bold"><i class="fa fa-phone mr-2"></i>060/60-61-036</span>

			<a href="#" class="text-white"><i class="fa fa-facebook"></i></a>
		</div>
	</div>

	<!-- Header -->
	<header class="top bg-light order-lg-2">
		<div class="container">
			<div class="d-flex flex-wrap justify-content-between">
				<!-- Logo -->
				<a href="<?php echo base_url(); ?>">
					<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" class="mx-auto mx-lg-0 py-4 align-self-center order-1">
				</a>

				<!-- Search form -->
				<form action="" class="mx-auto py-4 align-self-center search-form order-3 order-lg-2">
					<div class="input-group input-group-lg">
						<input type="text" class="form-control" placeholder="Pretraga">
						<span class="input-group-btn">
									<button class="btn btn-primary"><span class="fa fa-search"></span></button>
								</span>
					</div>
				</form>

				<!-- Avvount links -->
				<div class="account-links px-4 mx-auto d-flex align-items-center justify-content-around order-2 order-lg-3">
					<a href="#" class="text-white" data-toggle="modal" data-target="#loginModal">Prijavi se</a>
					<a href="<?php echo base_url(); ?>register" class="text-white">Registruj se</a>
					<a href="#" class="text-white">Lista zelja</a>
				</div>

				<?php $this->load->view('templates/login-modal'); ?>
			</div>
		</div>
	</header>
</div>