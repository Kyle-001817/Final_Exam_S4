
	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="form-title">
						<h1>Votre profil</h1>
					</div>
					<div class="client-avater">
						<img src="<?php echo base_url('assets/img/avaters/'.$utilisateur['Photo']); ?>" alt="">
					</div>
					<div class="client-meta">
						<h3> <?php echo $utilisateur['nomUtilisateur']; ?><span>Local shop owner</span></h3>
						<p class="testimonial-body">
							" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
						</p>
						<div class="last-icon">
							<i class="fas fa-quote-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Enter your code?</h2>
					</div>
					<div class="contact-form">
						<form action="<?php echo site_url('Controller/index'); ?>" method="post">
							<p>
								<input type="text" placeholder="Votre code" name="name" id="name">
							</p>
							<p><input type="submit" value="Valider" class="btn btn-block btn-primary"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

