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
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><?php echo $proposition['prop_aliment'][$triplet[1]]['nom_produits']; ?></h3>
							<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> <?php echo $proposition['prop_aliment'][$triplet[1]]['prixUnitaire'];  $somme_prix=$somme_prix+$proposition['prop_aliment'][$triplet[1]]['prixUnitaire'];?> Ariary</span>
							<span class="author"><i class="fas fa-user"></i>Midi</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
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

				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-4"></div></a>
						<div class="news-text-box">
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
	<!-- end logo carousel -->
