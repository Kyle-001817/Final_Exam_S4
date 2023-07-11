<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Vous pouvez suivre ces regimes</p>
						<h1>PROPOSITION</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
<<<<<<< HEAD
			<center><h3><i> Duree du regime : <?php echo $proposition['duree'][0]['duree_prop'];?> Jours</i></h3></center><hr>
			<div class="row">
				<?php 	
				$somme_prix = 0;
				foreach ($proposition['triplets'] as $index => $triplet) { ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><?php echo $proposition['prop_aliment'][$triplet[0]]['nom_produits']; ?></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> <?php echo $proposition['prop_aliment'][$triplet[0]]['prixUnitaire']; $somme_prix=$somme_prix+$proposition['prop_aliment'][$triplet[0]]['prixUnitaire'];?> Ariary</span>
								<span class="author"><i class="fas fa-user"></i>Matin</span>
							</p>
=======
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
>>>>>>> fbb9cb48b08c41d350b785d5e6217a57cb8d327b
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
<<<<<<< HEAD
						<a href=""><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><?php echo $proposition['prop_aliment'][$triplet[1]]['nom_produits']; ?></h3>
							<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> <?php echo $proposition['prop_aliment'][$triplet[1]]['prixUnitaire'];  $somme_prix=$somme_prix+$proposition['prop_aliment'][$triplet[1]]['prixUnitaire'];?> Ariary</span>
							<span class="author"><i class="fas fa-user"></i>Midi</span>
							</p>
=======
						<a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
>>>>>>> fbb9cb48b08c41d350b785d5e6217a57cb8d327b
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
<<<<<<< HEAD
						<a href=""><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><?php echo $proposition['prop_aliment'][$triplet[2]]['nom_produits']; ?></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> <?php echo $proposition['prop_aliment'][$triplet[2]]['prixUnitaire'];  $somme_prix=$somme_prix+$proposition['prop_aliment'][$triplet[2]]['prixUnitaire'];?> Ariary</span>
								<span class="author"><i class="fas fa-user"></i>Soir</span>
							</p>
						</div>
					</div>
				</div>
				<?php } ?>
		</div>
		<center><h3><i> Activites sportives</i></h3></center><hr>
		<div class="row">
				<?php for($j=0;$j<count($proposition['prop_sport']);$j++){ ?>

=======
						<a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
>>>>>>> fbb9cb48b08c41d350b785d5e6217a57cb8d327b
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-4"></div></a>
						<div class="news-text-box">
<<<<<<< HEAD
							<h3><?php echo $proposition['prop_sport'][$j]['nom_sport']; ?></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> <?php echo $proposition['prop_sport'][$j]['nbr_exercice']; ?> par jour</span>
							</p>
						</div>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
	<center><h3><i><?php echo $somme_prix; ?>Ariary/7j</i></h3></center><hr>
	<center><h3><i>Somme :<?php echo $som = intval($somme_prix*($proposition['duree'][0]['duree_prop']/7)); ?> Ariary</i></h3></center><hr>
	<center><h5><?php $ok = $proposition['somme']-$som;
	if($ok<0){
		echo "Balance insuffisante !!!!";
	}else{ ?>
		
	<center><a href="<?php echo site_url('Controller/achat/'.$ok)?>">Effectuer</a></center>
	<?php } ?>

	</h5></center>
	<!-- end latest news -->

	<!-- logo carousel -->
=======
							<h3><a href="single-news.html">Fall in love with the fresh orange</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-5"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Why the berries always look delecious</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-6"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Love for fruits are genuine of John Doe</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2018</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="<?php echo site_url('assets/img/company-logos/1.png'); ?>" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?php echo site_url('assets/img/company-logos/2.png'); ?>" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?php echo site_url('assets/img/company-logos/3.png'); ?>" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?php echo site_url('assets/img/company-logos/4.png'); ?>" alt="">
						</div>
						<div class="single-logo-item">
							<img src="<?php echo site_url('assets/img/company-logos/5.png'); ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
>>>>>>> fbb9cb48b08c41d350b785d5e6217a57cb8d327b
	<!-- end logo carousel -->
