
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/meanmenu.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">

</head>
<!--PreLoader-->
<div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Veuillez vous inscrire ici avant</p>
						<h1>INSCRIPTION</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Vous avez des questions?</h2>
						<p>Veuillez remplir ces formulaires afin de beneficier de notre service</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form action="<?php echo site_url('Controller/information_user'); ?>" method="POST" id="fruitkha-contact">
							<p>
								<input type="text" placeholder="Votre Nom" name="name" id="name">
								<input type="password" placeholder="Mot de passe" name="poids" id="phone">

							</p>
							<p>
								<input type="text" placeholder="Photo" name="poids" id="phone">
							</p>
							
							<p><input type="submit" value="Valider"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>Andoharanofotsy <br> . <br> ITUniversity</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>24heure <br> sur 24heure </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +261 34 61 167 51 <br>Email: andorakotoarimandimby7@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->
