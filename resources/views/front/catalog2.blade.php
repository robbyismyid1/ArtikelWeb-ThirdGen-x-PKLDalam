<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="/assets/front/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="/assets/front/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/assets/front/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/front/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="/assets/front/css/nouislider.min.css">
	<link rel="stylesheet" href="/assets/front/css/ionicons.min.css">
	<link rel="stylesheet" href="/assets/front/css/plyr.css">
	<link rel="stylesheet" href="/assets/front/css/photoswipe.css">
	<link rel="stylesheet" href="/assets/front/css/default-skin.css">
	<link rel="stylesheet" href="/assets/front/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="/assets/front/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="/assets/front/icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/front/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/front/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/front/icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">
	
	<!-- header -->
	@include('layouts.front.header')
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="/assets/front/img/section/john.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Catalog list</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Catalog list</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<!-- filter item -->
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">GENRE:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Action/Adventure">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
									<li>Action/Adventure</li>
									<li>Animals</li>
									<li>Animation</li>
									<li>Biography</li>
									<li>Comedy</li>
									<li>Cooking</li>
									<li>Dance</li>
									<li>Documentary</li>
									<li>Drama</li>
									<li>Education</li>
									<li>Entertainment</li>
									<li>Family</li>
									<li>Fantasy</li>
									<li>History</li>
									<li>Horror</li>
									<li>Independent</li>
									<li>International</li>
									<li>Kids</li>
									<li>Kids & Family</li>
									<li>Medical</li>
									<li>Military/War</li>
									<li>Music</li>
									<li>Musical</li>
									<li>Mystery/Crime</li>
									<li>Nature</li>
									<li>Paranormal</li>
									<li>Politics</li>
									<li>Racing</li>
									<li>Romance</li>
									<li>Sci-Fi/Horror</li>
									<li>Science</li>
									<li>Science Fiction</li>
									<li>Science/Nature</li>
									<li>Spanish</li>
									<li>Travel</li>
									<li>Western</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
						
							<!-- end filter item -->
						</div>
						
						<!-- filter btn -->
						<button class="filter__btn" type="button">apply filter</button>
						<!-- end filter btn -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->

	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
				<!-- card -->
				<div class="col-6 col-sm-12 col-lg-6">
					<div class="card card--list">
						<div class="row">
							<div class="col-12 col-sm-4">
								<div class="card__cover">
									<img src="/assets/front/img/covers/cover.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
							</div>

							<div class="col-12 col-sm-8">
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>

									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="card__description">
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-12 col-lg-6">
					<div class="card card--list">
						<div class="row">
							<div class="col-12 col-sm-4">
								<div class="card__cover">
									<img src="/assets/front/img/covers/cover2.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
							</div>

							<div class="col-12 col-sm-8">
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>

									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="card__description">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-12 col-lg-6">
					<div class="card card--list">
						<div class="row">
							<div class="col-12 col-sm-4">
								<div class="card__cover">
									<img src="/assets/front/img/covers/cover3.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
							</div>

							<div class="col-12 col-sm-8">
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>

									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="card__description">
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-12 col-lg-6">
					<div class="card card--list">
						<div class="row">
							<div class="col-12 col-sm-4">
								<div class="card__cover">
									<img src="/assets/front/img/covers/cover4.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
							</div>

							<div class="col-12 col-sm-8">
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>

									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="card__description">
										<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-12 col-lg-6">
					<div class="card card--list">
						<div class="row">
							<div class="col-12 col-sm-4">
								<div class="card__cover">
									<img src="/assets/front/img/covers/cover5.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
							</div>

							<div class="col-12 col-sm-8">
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>

									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="card__description">
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-12 col-lg-6">
					<div class="card card--list">
						<div class="row">
							<div class="col-12 col-sm-4">
								<div class="card__cover">
									<img src="/assets/front/img/covers/cover6.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
							</div>

							<div class="col-12 col-sm-8">
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>

									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>

										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="card__description">
										<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- paginator -->
				<div class="col-12">
					<ul class="paginator paginator--list">
						<li class="paginator__item paginator__item--prev">
							<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
						</li>
						<li class="paginator__item paginator__item--active"><a href="#">1</a></li>
						<li class="paginator__item"><a href="#">2</a></li>
						<li class="paginator__item"><a href="#">3</a></li>
						<li class="paginator__item"><a href="#">4</a></li>
						<li class="paginator__item paginator__item--next">
							<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
						</li>
					</ul>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>
	<!-- end catalog -->

	<!-- expected premiere -->
	<section class="section section--bg" data-bg="/assets/front/img/home/john.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Expected premiere</h2>
				</div>
				<!-- end section title -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/assets/front/img/covers/cover.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/assets/front/img/covers/cover3.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Benched</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/assets/front/img/covers/cover2.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Whitney</a></h3>
							<span class="card__category">
								<a href="#">Romance</a>
								<a href="#">Drama</a>
								<a href="#">Music</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/assets/front/img/covers/cover6.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Blindspotting</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
								<a href="#">Drama</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/assets/front/img/covers/cover4.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="/assets/front/img/covers/cover5.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Benched</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- section btn -->
				<div class="col-12">
					<a href="#" class="section__btn">Show more</a>
				</div>
				<!-- end section btn -->
			</div>
		</div>
	</section>
	<!-- end expected premiere -->

	<!-- footer -->
	@include('layouts.front.footer')
	<!-- end footer -->

	<!-- JS -->
	<script src="/assets/front/js/jquery-3.3.1.min.js"></script>
	<script src="/assets/front/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/front/js/owl.carousel.min.js"></script>
	<script src="/assets/front/js/jquery.mousewheel.min.js"></script>
	<script src="/assets/front/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="/assets/front/js/wNumb.js"></script>
	<script src="/assets/front/js/nouislider.min.js"></script>
	<script src="/assets/front/js/plyr.min.js"></script>
	<script src="/assets/front/js/jquery.morelines.min.js"></script>
	<script src="/assets/front/js/photoswipe.min.js"></script>
	<script src="/assets/front/js/photoswipe-ui-default.min.js"></script>
	<script src="/assets/front/js/main.js"></script>
</body>

</html>