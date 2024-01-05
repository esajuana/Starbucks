<!-- Topbar Start -->
<div class="container-fluid bg-dark py-3 d-none d-md-block">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
				<div class="d-inline-flex align-items-center">
					<a class="text-white pr-3" href="contact.php">FAQs</a>
					<span class="text-white">|</span>
					<a class="text-white px-3" href="contact.php">Help</a>
					<span class="text-white">|</span>
					<a class="text-white pl-3" href="contact.php">Support</a>
				</div>
			</div>
			<div class="col-md-6 text-center text-lg-right">
				<div class="d-inline-flex align-items-center">
					<a class="text-white px-3" href="https://www.facebook.com/Starbucks/" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="text-white px-3" href="https://twitter.com/starbucks" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
					<a class="text-white px-3" href="https://www.linkedin.com/company/pt--sari-coffee-indonesia" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a class="text-white px-3" href="https://www.instagram.com/starbucks/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="text-white pl-3" href="https://www.youtube.com/channel/UCgf_0QZuvtjOakskzX6Fehg" target="_blank">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
	<div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
		<nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
				<div class="navbar-nav ml-auto py-0">
					<a href="<?php echo site_url('') ?>" class="nav-item nav-link">Home</a>
					<a href="<?php echo site_url('about') ?>" class="nav-item nav-link ">About</a>
					<a href="<?php echo site_url('product') ?>" class="nav-item nav-link">Product</a>
				</div>
				<a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
					<img style="height: 50px;" src="<?php echo base_url() ?>/img/logo_starbuks.png" alt="">
				</a>
				<div class="navbar-nav mr-auto py-0">
					<a href="<?php echo site_url('service') ?>" class="nav-item nav-link">Service</a>
					<a href="<?php echo site_url('gallery') ?>" class="nav-item nav-link">Gallery</a>
					<a href="<?php echo site_url('contact') ?>" class="nav-item nav-link">Contact</a>
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- Navbar End -->
