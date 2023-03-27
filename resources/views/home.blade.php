@extends('layouts.base')
@section('content')

	<!-- Début Section type de vins et recherche -->

	<div class="py-4 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-2 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">Vins de France</span>
						</div>                   
					</div>
				</div>
				<div class="col-lg-2 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">Vins d'Espagne</span>
						</div>                   
					</div>
				</div>
				<div class="col-lg-2 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">Vins d'Italie</span>
						</div>                   
					</div>
				</div>
				<div class="col-lg-2 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">Vins d'Amérique</span>
						</div>                   
					</div>
				</div>
				<div class="col-lg-2 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">Vins d'Afrique</span>
						</div>                   
					</div>
				</div>
				<div class="col-lg-2 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">Les spiritueux</span>
						</div>                   
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="s003 my-30">
		<form>
			<div class="inner-form">           
				<div class="input-field second-wrap">
					<input id="search" type="text" placeholder="Trouver un produit" />
				</div>
				<div class="input-field third-wrap">
					<button class="btn-search" type="button">
						<svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
						</svg>
					</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Fin Section type de vins et recherche -->

<!-- <section class="ftco-section">
	<div class="container">
		<div class="row no-gutters ftco-services">
          	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            	<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-shipped"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Free Shipping</h3>
						<span>On order over $100</span>
					</div>
            	</div>      
          	</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-diet"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Always Fresh</h3>
						<span>Product well package</span>
					</div>
				</div>    
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-award"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Superior Quality</h3>
						<span>Quality Products</span>
					</div>
				</div>      
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-customer-service"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Support</h3>
						<span>24/7 Support</span>
					</div>
				</div>      
			</div>
    	</div>
	</div>
</section> -->

	<!-- Début Section catégories -->

	<section class="ftco-section ftco-category ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6 order-md-last align-items-stretch d-flex">
							<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
								<div class="text text-center">
									<h2>Vegetables</h2>
									<p>Protect the health of every home</p>
									<p><a href="#" class="btn btn-primary">Shop now</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
								<div class="text px-3 py-1">
									<h2 class="mb-0"><a href="#">Fruits</a></h2>
								</div>
							</div>
							<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
								<div class="text px-3 py-1">
									<h2 class="mb-0"><a href="#">Vegetables</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
						<div class="text px-3 py-1">
							<h2 class="mb-0"><a href="#">Juices</a></h2>
						</div>		
					</div>
					<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
						<div class="text px-3 py-1">
							<h2 class="mb-0"><a href="#">Dried</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Fin Section catégorie -->

	<!-- Début Section Description catégorie -->
	<section class="team-section">
		<div class="auto-container">
			<div class="row clearfix">				
				<!-- Title Column -->
				<div class="title-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title-inner">
								<div class="title">EUROPE</div>
								<h2>Vins et spiritueux</h2>
							</div>
						</div>
						<div class="text1">Quand on parle de vin, on ne peut ne pas parler des vignobles français et des grands vins qu y sont produits.</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-9 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="team-carousel owl-carousel owl-theme">
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-2.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-2.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="team-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title-inner">
								<div class="title">AMERIQUE</div>
								<h2>Vins et spiritueux</h2>
							</div>
						</div>
						<div class="text1">Quand on parle de vin, on ne peut ne pas parler des vignobles français et des grands vins qu y sont produits.</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-9 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="team-carousel owl-carousel owl-theme">
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-2.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-2.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="team-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title-inner">
								<div class="title">ASIE</div>
								<h2>Vins et spiritueux</h2>
							</div>
						</div>
						<div class="text1">Quand on parle de vin, on ne peut ne pas parler des vignobles français et des grands vins qu y sont produits.</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-9 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="team-carousel owl-carousel owl-theme">
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-4.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-5.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-6.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-7.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-8.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-9.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="team-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title-inner">
								<div class="title">AUSTRALIE</div>
								<h2>Vins et spiritueux</h2>
							</div>
						</div>
						<div class="text1">Quand on parle de vin, on ne peut ne pas parler des vignobles français et des grands vins qu y sont produits.</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-9 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="team-carousel owl-carousel owl-theme">
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-2.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-4.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-5.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-6.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="team-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title-inner">
								<div class="title">AFRIQUE</div>
								<h2>Vins et spiritueux</h2>
							</div>
						</div>
						<div class="text1">Quand on parle de vin, on ne peut ne pas parler des vignobles français et des grands vins qu y sont produits.</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-9 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="team-carousel owl-carousel owl-theme">
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-7.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-8.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-9.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-1.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-2.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
							<!--Team Block-->
							<div class="team-block">
								<div class="inner-box">
									<div class="border-one"></div>
									<div class="border-two"></div>
									<div class="image">
										<a href="team.html"><img src="images/resource/team-3.jpg" alt="" /></a>
										<ul class="social-icons">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-dribbble"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										</ul>
									</div>
									<div class="lower-box">
										<h3><a href="team.html">Monica Wagase</a></h3>
										<div class="designation">Camical officer</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Fin Section Description catégorie -->

	<!-- Début Section produits -->	

    <section class="ftco-section">
    	<div class="container">
			<!-- <div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Featured Products</span>
					<h2 class="mb-4">Our Products</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
        	</div>    -->		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Strawberry</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Green Beans</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Purple Cabbage</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Tomatoe</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Brocolli</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Carrots</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Fruit Juice</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Strawberry</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Green Beans</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Purple Cabbage</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Tomatoe</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Brocolli</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Carrots</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Fruit Juice</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Strawberry</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Green Beans</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Purple Cabbage</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Tomatoe</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Brocolli</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Carrots</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Fruit Juice</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Strawberry</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Green Beans</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Purple Cabbage</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Tomatoe</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Brocolli</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Carrots</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Fruit Juice</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
			<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Strawberry</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Green Beans</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Purple Cabbage</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Tomatoe</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Brocolli</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Carrots</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Fruit Juice</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	<!-- Fin Section produits -->

	<!-- Début Section promotion -->
		
	<section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
			<div class="row justify-content-end">
    			<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
					<span class="subheading">Best Price For You</span>
					<h2 class="mb-4">Deal of the day</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
					<h3><a href="#">Spinach</a></h3>
					<span class="price">$10 <a href="#">now $5 only</a></span>
            		<div id="timer" class="d-flex mt-5">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
					</div>
          		</div>
        	</div>   		
    	</div>
    </section>

	<!-- Fin Section promotion -->

     <hr>

	<!-- Début Section newsletter -->

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      	<div class="container py-4">
        	<div class="row d-flex justify-content-center py-5">
				<div class="col-md-6">
					<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
					<span>Get e-mail updates about our latest shops and special offers</span>
				</div>
				<div class="col-md-6 d-flex align-items-center">
						<form action="#" class="subscribe-form">
							<div class="form-group d-flex">
								<input type="text" class="form-control" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="submit px-3">
							</div>
						</form>
				</div>
        	</div>
      	</div>
    </section>

	<!-- Fin Section newsletter -->
@endsection