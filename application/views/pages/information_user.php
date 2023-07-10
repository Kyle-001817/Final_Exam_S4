<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Veuillez saisir plus d'information sur vous</p>
						<h1>PLUS D'INFORMATION</h1>
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
						<form action="<?php echo site_url('Welcome/accueil'); ?>" method="POST" id="fruitkha-contact">
							<p>
								<input type="number" placeholder="Taille en cm" name="name" id="name">
								<select name="" class="selecta" placeholder="Genre">
									<option value="">Femme</option>
									<option value="">Homme</option>
								</select>
							</p>
							<p>
								<input type="number" placeholder="Poids" name="poids" id="phone">
								<input type="number" placeholder="Age" name="age" id="age">
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
