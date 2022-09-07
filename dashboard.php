<?php
include 'inc/templates/header.php';
?>

<body>
	<div class="container-xxl bg-white p-0">
		<!-- Spinner Start -->
		<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->


		<!-- Navbar & Hero Start -->
		<div class="container-xxl position-relative p-0">
			<?php
			include 'inc/templates/navbar-admin.php';
			?>

			<div class="container-xxl py-5 bg-dark hero-header mb-5">
				<div class="container my-5 py-5">
					<div class="row ">
						<div class="col-lg-12 text-center text-lg-start">
							<h6 class="display-3 text-white animated text-center">Bienvenidos @</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Navbar & Hero End -->


		<!-- Service Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<div class="row g-4">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
								<h5>Master Chefs</h5>
								<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-utensils text-primary mb-4"></i>
								<h5>Quality Food</h5>
								<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
								<h5>Online Order</h5>
								<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-headset text-primary mb-4"></i>
								<h5>24/7 Service</h5>
								<p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service End -->

		<!-- Testimonial Start -->
		<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container">
				<div class="text-center">
					<h5 class="section-title ff-secondary text-center text-primary fw-normal">Comentarios</h5>
					<!-- <h1 class="mb-5">Our Clients Say!!!</h1> -->
				</div>
				<div class="owl-carousel testimonial-carousel">
					<div class="testimonial-item bg-transparent border rounded p-4">
						<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
						<p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
						<div class="d-flex align-items-center">
							<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
							<div class="ps-3">
								<h5 class="mb-1">Client Name</h5>
								<small>Profession</small>
							</div>
						</div>
					</div>
					<div class="testimonial-item bg-transparent border rounded p-4">
						<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
						<p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
						<div class="d-flex align-items-center">
							<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
							<div class="ps-3">
								<h5 class="mb-1">Client Name</h5>
								<small>Profession</small>
							</div>
						</div>
					</div>
					<div class="testimonial-item bg-transparent border rounded p-4">
						<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
						<p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
						<div class="d-flex align-items-center">
							<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
							<div class="ps-3">
								<h5 class="mb-1">Client Name</h5>
								<small>Profession</small>
							</div>
						</div>
					</div>
					<div class="testimonial-item bg-transparent border rounded p-4">
						<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
						<p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
						<div class="d-flex align-items-center">
							<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
							<div class="ps-3">
								<h5 class="mb-1">Client Name</h5>
								<small>Profession</small>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="padding-top: 0rem !important;">
			<div class="container">
				<div class="text-center">
					<div class="row g-4">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-4">
							<div class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
								<div class="col-12">
									<input type="hidden" id="tipo" value="login">
									<button class="btn btn-primary w-100 py-3" id="submit" type="submit">Gestionar Comentarios</button>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonial End -->


		<?php
		include 'inc/templates/footer.php';
		?>