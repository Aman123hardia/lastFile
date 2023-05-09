<?php session_start(); 
if(isset($_SESSION['AdminId']))
{
	?>
<script>
    window.open('adminHome','_self');
</script>
	<?php
}
?>
<?php require_once('assets/includes/titlebar.php');?>
<body>
<!-- Container Start -->
<div class='container-fluid border border-grey'>
	<!-- Header Start-->
	<div class='header' style='position:sticky; top: 0;z-index: 999;'>
			<nav class="navbar navbar-expand-lg navbar-light " style="background-color:rgb(228, 221, 212)">
			<img src='assets/images/icon1.png' class="img-fluid " width="50" height="50"/>
				<h6 class="text-lavender mt-3" style="font-family:red-serin;font-size:2vw;">Employee Management System</h6>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse ml-5 font-weight-bold pt-2" id="navbarNavDropdown"
					style="font-family:serif ; font-size:18px; margin-left:15vw;">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signIn">SignIn</a>
						</li>
						<li class="nav-item" id='signUp'>
							<a class="nav-link" href="signUp">SignUp</a>
						</li>
					</ul>
				</div>
			</nav>
	</div>
	<!-- Header End-->

	<!-- Sliding Start-->
	<div class="container-fluid " id="home">
			<div class="w-100 pt-1 shadow-lg  mb-5 bg-white rounded mt-1" style="background-color: #eee; ">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
							aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
							aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
							aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/images/slide1.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="assets/images/slide1.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="assets/images/slide1.jpg" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
	</div>
	<!-- Sliding End-->

	<!-- About Us Start-->
	<div class="container-fluid border border-grey mt-5" id="about">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<h1 class="display-4">About us page</h1>
						<p class="lead text-muted ">Create a minimal about us page using Bootstrap 4.</p>
						<p class="lead text-muted">Snippet by <a href="https://bootstrapious.com/snippets" class="text-muted"> 
							<u>Bootstrapious</u></a>
						</p>
					</div>
					<div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
				</div>
			</div>

			<!-- Contact Us-->
			<div class="container-fluid border border-grey mb-1 mt-5" id="contact">
				
		<div class="bg-light py-5">
			<div class="container py-5">
				<div class="row mb-4">
					<div class="col-lg-5">
						<h2 class="display-4 font-weight-light">Contact Us</h2>
						<p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="row text-center">
					<!-- Team item-->
					<div class="col-xl-3 col-sm-6 mb-5">
						<div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
							<h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
							<ul class="social mb-0 list-inline mt-3">
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- End-->

					<!-- Team item-->
					<div class="col-xl-3 col-sm-6 mb-5">
						<div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
							<h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
							<ul class="social mb-0 list-inline mt-3">
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- End-->

					<!-- Team item-->
					<div class="col-xl-3 col-sm-6 mb-5">
						<div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
							<h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
							<ul class="social mb-0 list-inline mt-3">
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- End-->

					<!-- Team item-->
					<div class="col-xl-3 col-sm-6 mb-5">
						<div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
							<h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
							<ul class="social mb-0 list-inline mt-3">
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- End-->

				</div>
			</div>
		</div>

	</div>
	<!-- About Us End-->

	<!-- Footer Start-->
	<div class="container-fluid border border-grey mt-1">
		<footer class="text-center text-lg-start  text-dark" style="background-color:rgb(228, 221, 212)">
			<!-- Section: Social media -->
			<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
				<!-- Left -->
				<div class="me-5 d-none d-lg-block">
					<span>Get connected with us on social networks:</span>
				</div>
				<!-- Left -->

				<!-- Right -->
				<div>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-google"></i>
					</a>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-github"></i>
					</a>
				</div>
				<!-- Right -->
			</section>
			<!-- Section: Social media -->

			<!-- Section: Links  -->
			<section class="">
				<div class="container text-center text-md-start mt-5">
					<!-- Grid row -->
					<div class="row mt-3">
						<!-- Grid column -->
						<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
							<!-- Content -->
							<h6 class="text-uppercase fw-bold mb-4">
								<i class="fas fa-gem me-3"></i>Company name
							</h6>
							<p>
								Here you can use rows and columns to organize your footer content. Lorem ipsum
								dolor sit amet, consectetur adipisicing elit.
							</p>
						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">
								Products
							</h6>
							<p>
								<a href="#!" class="text-reset">Angular</a>
							</p>
							<p>
								<a href="#!" class="text-reset">React</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Vue</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Laravel</a>
							</p>
						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">
								Useful links
							</h6>
							<p>
								<a href="#!" class="text-reset">Pricing</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Settings</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Orders</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Help</a>
							</p>
						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">Contact</h6>
							<p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
							<p>
								<i class="fas fa-envelope me-3"></i>
								info@example.com
							</p>
							<p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
							<p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
						</div>
						<!-- Grid column -->
					</div>
					<!-- Grid row -->
				</div>
			</section>
			<!-- Section: Links  -->

			<!-- Copyright -->
			<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
				© 2021 Copyright:
				<a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
			</div>
			<!-- Copyright -->
		</footer>
	</div>
	<!-- Footer End-->
</div>
<!-- Container End -->
</body>