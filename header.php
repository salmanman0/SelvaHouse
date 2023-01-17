<!DOCTYPE html>
<html lang="en">

<head>
	<title>Selva House</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/style.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/jquery.fancybox.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/owl.carousel.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/owl.theme.default.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/all.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/aos.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/animate.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/media.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/swiper.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/fullpage.css'?>">
	<script type="text/javascript" src="<?php echo base_url('javascript/jquery-3.3.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/popper.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/bootstrap.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/jquery.fancybox.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/owl.carousel.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/all.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/aos.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/rellax.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/parallax.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/jquery.stellar.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/swiper.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('javascript/fullpage.js') ?>"></script>
	<link rel="icon" href="<?php echo base_url().'assets/interface/LogoSelva.png'?>">
  <link href="<?= base_url('assets/interface') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
	<div class="w-100 navbar navbar-expand-lg navbar-dark bg-nav">
		<div class="container-fluid">
			<a href="<?= base_url('index.php/Dashboard/')?>" class="navbar-brand-1 navbar-brand"><img class="logo"
					src="<?php echo base_url().'assets/interface/logoSelva.png'?>"> Selva House</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNavbar"
				aria-expanded="false" aria-controls="collapseNavbar">
				<i class="fa fa-bars text-mark"></i>
			</button>
			<div class="collapse navbar-collapse" id="collapseNavbar">
				<ul class="nav navbar-nav mx-auto" id="menu">
					<li class="nav-item">
						<a href="<?=base_url('index.php/Dashboard/')?>" class="nav-link nav-1">Home</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/Dashboard/#about')?>" class="nav-link nav-hide nav-1">About</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/Dashboard/#showcase')?>"
							class="nav-link nav-hide nav-1">Showcase</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link nav-hide nav-1 dropdown-toggle" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item drop1" href="<?= base_url('index.php/Dashboard/yasmeera')?>"> <img
									class="logo" src="<?php echo base_url('assets/interface/logoYasmeera.png')?>"
									alt=""> Yasmeera</a>
							<a class="dropdown-item drop1" href="<?= base_url('index.php/Dashboard/wanoja')?>"><img
									class="logo" src="<?php echo base_url('assets/interface/wanojatest.png')?>" alt="">
								Wanoja</a>
							<a class="dropdown-item drop1" href="<?= base_url('index.php/Dashboard/labella')?>"> <img
									class="logo" src="<?php echo base_url('assets/interface/logoLabella.png')?>" alt="">
								Labella</a>
						</div>
					</li>
					<li class="nav-item">
						<a data-toggle="modal" data-target="#modalalamat" class="nav-link nav-hide nav-1">Contact us</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('index.php/Dashboard/detail/')?>" class="nav-link nav-1"
							data-toggle="tooltip" title="Your Shopping Items!" id="cart"><i
								class="fa fa-shopping-cart"></i>
								 Cart <span class="badge badge-danger badge-counter"> <?= $jlh ?></span></a>
					</li>
				</ul>
				<?php if(isset($_SESSION['email'])) { ?>
				<a href="<?=base_url('index.php/Auth/logout')?>">
					<button class="btn btn-outline-danger my-2 my-sm-0 btn-tip2">Log Out</button>
				</a>
				<?php } else { ?>
					<a href="<?=base_url('index.php/Auth/')?>">
					<button class="btn btn-outline-danger my-2 my-sm-0 btn-tip2">Log In</button>
				</a>
				<?php };?> 
			</div>
		</div>
	</div>
	<div class="w-100 navbar navbar-expand-lg navbar-dark bg-nav2" id="navbar">
		<div class="container-fluid">
			<a href="<?= base_url('index.php/Dashboard/')?>" class="navbar-brand-2 navbar-brand"><img class="logo"
					src="<?php echo base_url('assets/interface/logoSelva.png')?>"> Selva House</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNavbar"
				aria-expanded="false" aria-controls="collapseNavbar">
				<i class="fa fa-bars text-mark"></i>
			</button>
			<div class="collapse navbar-collapse" id="collapseNavbar">
				<ul class="nav navbar-nav mx-auto" id="menu">
					<li data-menuanchor="firstPage" class="nav-item">
						<a href="<?=base_url('index.php/Dashboard/')?>" class="nav-link nav-hide nav-2">Home</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/Dashboard/#about')?>" class="nav-link nav-hide nav-2">About</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('index.php/Dashboard/#showcase')?>"
							class="nav-link nav-hide nav-2">Showcase</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link nav-hide nav-2 dropdown-toggle" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item drop1" href="<?= base_url('index.php/Dashboard/yasmeera')?>"> <img
									class="logo" src="<?= base_url('assets/interface/logoYasmeera.png')?>" alt="">
								Yasmeera</a>
							<a class="dropdown-item drop1" href="<?= base_url('index.php/Dashboard/wanoja')?>"><img
									class="logo" src="<?= base_url('assets/interface/wanojatest.png')?>" alt="">
								Wanoja</a>
							<a class="dropdown-item drop1" href="<?= base_url('index.php/Dashboard/labella')?>"> <img
									class="logo" src="<?= base_url('assets/interface/logoLabella.png')?>" alt="">
								Labella</a>
						</div>
					</li>
					<li class="nav-item">
						<a data-toggle="modal" data-target="#modalalamat" class="nav-link nav-hide nav-2">Contact us</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('index.php/Dashboard/detail/')?>" class="nav-link nav-2"
							data-toggle="tooltip" title="Your Shopping Items!" id="cart2">
							<i class="fa fa-shopping-cart tex-white"></i>
								<span class="badge badge-danger badge-counter"> <?= $jlh ?></span> Cart</a>
					</li>
				</ul>
				<?php if(isset($_SESSION['email'])) { ?>
				<a href="<?=base_url('index.php/Auth/logout')?>" >
					<button class="btn btn-outline-danger my-2 my-sm-0 btn-tip2">Log Out</button>
				</a>
				<?php } else { ?>
					<a href="<?=base_url('index.php/Auth/')?>">
					<button class="btn btn-outline-danger my-2 my-sm-0 btn-tip2">Log In</button>
				</a>
				<?php };?> 
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="modalalamat" data-backdrop="static">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><b>Contact Us</b></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-4">
								<img class="text-center mt-1 ml-5"
									src="<?php echo base_url().'assets/interface/instagram_logo.png'?>" alt=""
									widht="30px" height="30px">

							</div>
							<div class="col-8">
								<a rows="5" class="form-custom w-100" href="instagram.com">@selvahouse</a>
							</div>
							<div class="col-4">
								<img class="text-center mt-2 ml-5"
									src="<?php echo base_url().'assets/interface/whatsapp_logo.png'?>" alt=""
									widht="30px" height="30px">

							</div>
							<div class="col-8">
								<a rows="5" class="form-custom w-100 mt-2" href="whatsapp.com">@selvahouse</a>
							</div>
							<div class="col-4">
								<img class="text-center mt-2 ml-5"
									src="<?php echo base_url().'assets/interface/telegram_logo.png'?>" alt=""
									widht="30px" height="30px">

							</div>
							<div class="col-8">
								<a rows="5" class="form-custom w-100 mt-2" href="telegram.com">@selvahouse</a>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger mx-auto d-block" data-dismiss="modal"
						aria-label="Close">Close</button>

				</div>
			</div>
		</div>
	</div>