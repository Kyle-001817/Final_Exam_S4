<?php $message1 = "perdre du poids";
$message2 = "gagner du poids";?>
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
						<h3> <?php echo $utilisateur['nomUtilisateur']; ?></h3><h2><span>Votre IMC : <?php echo $utilisateur['Imc'];?></span><h2>
						<h3><span>Vous devez <?php if($utilisateur['Imc']<18){echo $message2;}else if($utilisateur['Imc']>24){ echo $message1;}else{ echo "Faite votre regime";}?></span><h3>
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
						<h4><strong> Votre argent:  <?php echo $somme; ?> Ariary </strong></h4>
					</div>
					<div class="contact-form">
						<form action="<?php echo site_url('Controller/admin'); ?>" method="post">
							<p>
								<input type="text" placeholder="Votre code" name="name" id="name">
							</p>
							<p><input type="submit" value="Valider" class="btn btn-block btn-primary"></p>
						</form>
					</div>
				</div>
			</div>
					<table class="table table-bordered table-striped table-condensed" border=1px cellspacing=0 style="margin-top: 50px;">
						<tr>
							<th>Code</th>
							<th>Valeurs</th>
						</tr>
						<?php for($i=0; $i<count($allcode['code_code']); $i++) { ?>
							<tr>
								<td><?php echo $allcode['code_code'][$i]; ?></td>
								<td><?php echo $allcode['valeur'][$i]; ?></td>
							</tr>
						<?php } ?>
					</table>
		</div>
	</div>
	
	

