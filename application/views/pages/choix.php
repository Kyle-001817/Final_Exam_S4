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

<<<<<<< HEAD
			<form action="<?php echo site_url('Welcome/getChoix'); ?>" method="POST" id="fruitkha-contact">
=======
			<form action="<?php echo site_url('Controller/proposition_alimentaire'); ?>" method="POST" id="fruitkha-contact">
>>>>>>> fbb9cb48b08c41d350b785d5e6217a57cb8d327b
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url('assets/img/maigrir.jpg'); ?>" alt=""></a>
						</div>
						<h3>Perdre du poids</h3>
<<<<<<< HEAD
						<p class="product-price"><span></span></p>
=======
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
>>>>>>> fbb9cb48b08c41d350b785d5e6217a57cb8d327b
					</div>
				</div>
			
				<div class="col-lg-6 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url('assets/img/manger-le-soir.jpg'); ?>" alt=""></a>
						</div>
						<h3>Gagner du poids</h3>
<<<<<<< HEAD
						<p class="product-price"><span></span></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-6 offset-md-3 offset-lg-0 text-center"></div>
				<div class="col-lg-8 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="contact-form">
						<p>
							<input type="number" placeholder="poids inferieur a 25Kg" name="poids" id="name" required>	
						</p>
						<p>Choisir 
							<select name="choice" id="" placeholder="Votre choix">
								<option value="1">Maigrir</option>
								<option value="0">Grossir</option>
							</select>
						</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 offset-md-3 offset-lg-0 text-center"></div>
=======
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
>>>>>>> fbb9cb48b08c41d350b785d5e6217a57cb8d327b
			</div>
			<center><input type="submit" value="Valider" style="width: 300px;"></center>
			</form>
		</div>
	</div>
	<!-- end product section -->
