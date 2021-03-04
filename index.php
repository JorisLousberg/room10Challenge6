<?php
require "navbar.php";
?>

				<!-- Main -->
					<div id="main">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/vistacars.JPG" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/Backgoundcarrousel.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/Backgroundcarousell2.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Vorige</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Volgende</span>
						  </a>
						</div>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Welkom bij VistaCars!</h1>
								<p>Dealer van Toyota en Lexus.en andere automerken. Bij ons kunt u terecht voor Auto advies, of mischien wel een Nieuwe Auto?
								bekijk ons assortiment nu. </p>
							</header>

							<br>

							<h2 class="h2">Onze Auto's</h2>

							<!-- Cars -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/toyota-prius-21091874_12972403_284.jpg" alt="" />
									</span>
									<a href="car-details.php">
										<h2>Toyota Prius 2011</h2>
										
										<p><del>€6000</del> <strong>€6000</strong></p>

										<p>
		                                	<i class="fa fa-dashboard"></i> 230 000km &nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cube"></i> 1000cc cc&nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cog"></i> Handmatige koppeling
										</p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/Toyotachr.jpg" alt="" />
									</span>
									<a href="car-details.php">
										<h2>Toyota C H-R Hybrid</h2>
										
										<p><del>€10 000</del> <strong>€10 000</strong></p>

										<p>
		                                	<i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cube"></i> 1800 cc&nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cog"></i> Automaat
										</p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/LexusUX250hFSport.jpg" alt="" />
									</span>
									<a href="car-details.php">
										<h2>Lexus UX 250h F Sport</h2>
										
										<p><del>€15 000</del> <strong>€15 000</strong></p>

										<p>
		                                	<i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cube"></i> 1800 cc&nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cog"></i> Automaat
										</p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/LexusGS350.jpg" alt="" />
									</span>
									<a href="car-details.php">
										<h2>Lexus Gs 350</h2>
										
										<p><del>€11 999</del> <strong>€11 779</strong></p>

										<p>
		                                	<i class="fa fa-dashboard"></i> 160 000km &nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cube"></i> 1300 cc&nbsp;&nbsp;&nbsp;&nbsp;
			                                <i class="fa fa-cog"></i> Automaat
										</p>
									</a>
								</article>
							</section>

							<p class="text-center"><a href="cars.php">Bekijk Auto's &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
							
							<br>

							<h2 class="h2">Beoordelingen</h2>
							
							<div class="row">
								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Laats eens langsgeweest, voor het kijken van een nieuwe auto. Werd gelijk vriendelijk geholpen, en mocht mijn oude auto inleveren voor -prijs"</em></p>

									<p><strong> - VSTA</strong></p>
								</div>

								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Top Service. Haal al jaren mijn Auto's bij VistaCars. Echter nog nooit klachten gehad."</em></p>

									<p><strong>- CLLGE</strong> </p>
								</div>
							</div>

							<br>


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contact Ons</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Naam" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="Onderwerp" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Bericht"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Stuur Bericht" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">VistaCars@company.nl</a></li>
									<li><span class="fa fa-phone"></span>  088 001 5000 </li>
									<li><span class="fa fa-map-pin"></span> Sibemaweg 20, 6224 DC Maastricht </li>
								</ul>

								<h2>Volg Ons</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 VistaCars </li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>