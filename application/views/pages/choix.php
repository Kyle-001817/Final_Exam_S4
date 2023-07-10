	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Faire un</span> Choix</h3>
						<p>Vous pouvez faire un choix si vous voulez maigrir ou gagner de poids</p>
					</div>
				</div>
			</div>

			<form action="<?php echo site_url('Welcome/accueil'); ?>" method="POST" id="fruitkha-contact">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url('assets/img/maigrir.jpg'); ?>" alt=""></a>
						</div>
						<h3>Perdre du poids</h3>
						<p class="product-price">
							<span>
							<div class="contact-form">
								<p>
									<input type="number" placeholder="poids inferieur a 25Kg" name="name" id="name">	
								</p>
								<p>
									<label for="">Maigrir: </label>
									<input type="checkbox" name="" id="">
								</p>
							</div>
							</span> 
						</p>
					</div>
				</div>
			
				<div class="col-lg-6 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url('assets/img/manger-le-soir.jpg'); ?>" alt=""></a>
						</div>
						<h3>Gagner du poids</h3>
						<p class="product-price">
							<span>
							<div class="contact-form">
								<p>
									<input type="number" placeholder="poids inferieur a 25Kg" name="name" id="name">	
								</p>
								<p>
									<label for="">Grossir: </label>
									<input type="checkbox" name="" id="">
								</p>
							</div>
							</span> 
						</p>
					</div>
				</div>
			</div>
			<center><input type="submit" value="Valider" style="width: 300px;"></center>
			</form>
		</div>
	</div>
	<!-- end product section -->
