<!doctype html>
<?php
    
    $base_url = $_SERVER['HTTP_HOST'];
    $self = $_SERVER['PHP_SELF'];
    $arr = explode("/", $self);
    $with_ext = $arr['1'];
    $arr2 = explode(".", $with_ext);
    $port_page = $arr2['0'] ;
    
?>

<html lang="en" class="no-js">
<head>
	<title>Techno Savvy | Providing Sound Successful Solutions to All</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="portfolio/css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="portfolio/css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="portfolio/css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="portfolio/css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="portfolio/css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="portfolio/css/responsive.css" media="screen">
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favico.png" />
    <link rel="icon" type="image/png" href="./assets/images/favico.png" sizes="32x32" />
	<!-- Fancy Box -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>

</head>
<body class="portfolio-body portfolio-main">
	<div id="preloader"><img src="./assets/images/loader/techno-savvy-Loading.gif"/></div>
	<!-- Container -->
	<div id="container" class="portfolio-page-tn">
		<!-- Header
		    ================================================== -->
		<header>
			<div class="logo-box">
				<div class="logo-box-in">
					<a class="logo" href="https://technosavvyllc.com/">
						<img alt="/Techno Savvy/" src="./assets/images/home/logo.svg">
					</a>
					<p class="slogan">
						Accomplishing countless US government affiliated and high-profile business projects, we take delight in presenting our magnificent profile to our clients!
					</p>
				</div>
			</div>
			
			<!-- <a class="elemadded responsive-link" href="#">Menu</a> -->

			<div class="menu-box">
				<ul class="tab-links-ntn">
					
					<li>
					    <a class="tab-link-ntn 
					        <?php 
					            if ( $port_page == 'portfolios' || $port_page == 'digital-marketing-portfolio')
					            { 
					                echo 'active' ;
					            }
					         ?>" href="javascript:void(0)" data-id="tab-ntn-1">
					        Digital Marketing
					    </a>
					</li>
					<li><a class="tab-link-ntn <?php if ($port_page == 'web-development-portfolio') { echo 'active';}?>" href="javascript:void(0)" data-id="tab-ntn-2">Web Development</a></li>
					<li><a class="tab-link-ntn <?php if ($port_page == 'app-development-portfolio') { echo 'active';}?>" href="javascript:void(0)" data-id="tab-ntn-3">App Development</a></li>
					<li><a class="tab-link-ntn <?php if ($port_page == 'brand-creative-portfolio') { echo 'active';}?>" href="javascript:void(0)" data-id="tab-ntn-4">Brand And Creative</a></li>
					<!-- <li><a class="tab-link-ntn <?php if ($port_page == 'animations-portfolio') { echo 'active';}?>" href="javascript:void(0)" data-id="tab-ntn-5">Animations</a></li> -->
				</ul>
			</div>
			<div class="social-box">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/TechnoSavvyllc"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/technosavvyllc"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>

		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="portfolio-page">
					<div class="tab-box-ntn">
						<!-- 1 -->
						<div class="tab-content-ntn active digital-markrting" id="tab-ntn-1">
							<div class="portfolio-box">
								<div class="project-post">
									<img alt="" src="assets/images/portfolio/digital-marketing/1.jpg">
									<div class="hover-box">
										<a href="" class="zoom-image-tn" data-toggle="modal" data-target="#exampleModal3"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="" class="">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Valvoline</h2>
												<span>Valvoline™ is a leading worldwide producer and</span>						
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/digital-marketing/2.jpg">
									<div class="hover-box">
										<a href="" class="zoom-image-tn" data-toggle="modal" data-target="#exampleModal4"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Beyondant</h2>
												<span>Beyondant, LLC, is the leader in usable NFC devices,</span>				
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/digital-marketing/3.jpg">
									<div class="hover-box">
										<a href="" class="zoom-image-tn" data-toggle="modal" data-target="#exampleModal5"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>OneWorldRental</h2>
												<span>At One World Rental, IT rental are just the</span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/digital-marketing/4.jpg">
									<div class="hover-box">
										<a href="" class="zoom-image-tn" data-toggle="modal" data-target="#exampleModal6"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>GreenField Services</h2>
												<span>Here at green field services we take pride in providing the </span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 2 -->
						<div class="tab-content-ntn web-dev" id="tab-ntn-2">
							<div class="portfolio-box">

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/1.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p1-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p1-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>AltrxLabs</h2>
												<span>  </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/2.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p2-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p2-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Beyondant</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/3.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p3-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p3-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Cay Technologies</h2>
												<span>  </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/4.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p4-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p4-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Creative Solutions</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/5.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p5-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p5-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Chris hesand</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/6.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p6-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p6-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>The Thinking Society</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/7.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p7-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p7-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Criminal Defence Lawyer</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/8.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p8-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p8-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>FCMA</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/9.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p9-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p9-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Elite Lab Testing</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/10.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p10-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p10-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>First Sterling Management</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/11.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p11-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p11-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Georginas</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/12.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p12-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p12-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>FLCleanup</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/13.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p13-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p13-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Jungle Safaris</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/14.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p14-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p14-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Love Beyond the orphanage</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/15.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p15-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p15-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Pluto Projects</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/web-development/16.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/web-development/p16-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/web-development/p16-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Value Expose</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 3 -->
						<div class="tab-content-ntn app-dev" id="tab-ntn-3">
							<div class="portfolio-box">

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/app-development/1.jpg">
									<div class="hover-box">
										<a href="" class="zoom-image-tn" data-toggle="modal" data-target="#exampleModal1"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="javascript:void(0)" class="">		
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Ammit</h2>
												<span>Client’s aim was to build an online database</span>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/app-development/2.jpg">
									<div class="hover-box">
										<a href="" class="zoom-image-tn" data-toggle="modal" data-target="#exampleModal2"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/full.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Evoke</h2>
												<span>Clients’ aim was to launch an app that </span>							
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- 4 -->
						<div class="tab-content-ntn brand-creative" id="tab-ntn-4">
							<div class="portfolio-box">

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/1.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p1-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p1-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Benchmark</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/2.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p2-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p2-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Benchmark</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/3.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p3-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p3-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Brighter Day</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/4.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p4-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p4-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Cay Technologies</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/5.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p5-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p5-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Creating Favours</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/6.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p6-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p6-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Che Rogers</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/7.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p7-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p7-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Fun House</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/8.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p8-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p8-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Island Time</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/9.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p9-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p9-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Jump Startt</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/10.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p10-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p10-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Magnetic</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/11.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p11-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p11-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>No Strees Claims</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/12.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p12-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p12-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Pluto Projects</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/13.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p13-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p13-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Roam Reel</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/14.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p14-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p14-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Vaim Technologies</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/15.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p15-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p15-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Zerverlay</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/brand-creative/16.jpg">
									<div class="hover-box">
										<a href="assets/images/portfolio/brand-creative/p16-large.jpg" class="zoom-image zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a href="assets/images/portfolio/brand-creative/p16-large.jpg" class="zoom-image">
														<i class="fa fa-plus"></i>
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Xfit Gyms</h2>
												<span> </span>							
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 5 -->
						<div class="tab-content-ntn" id="tab-ntn-5">
							<div class="portfolio-box">

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/2.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=6U7vwdmLdvI" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=6U7vwdmLdvI" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Quantum Leap</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/1.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=e2bCm23kE-I" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=e2bCm23kE-I" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Cinpals</h2>
											</div>
										</div>
									</div>
								</div>  

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/4.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=kyLvfJxf2Qo" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=kyLvfJxf2Qo" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li> 
											</ul>
											<div class="project-title">
												<h2>Cloud Phone</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/3.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=hr5aQPSCEpU" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=hr5aQPSCEpU" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Donot Disturb App</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/5.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=X65IEEVEsIQ&t=6s" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=X65IEEVEsIQ&t=6s" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>QA Mentor</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/6.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=Nn7vXmn5tFk" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=Nn7vXmn5tFk" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Sales Scout Data</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/7.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=hCqLuJM5NjE" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=hCqLuJM5NjE" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Export Hub Marketing</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/8.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=Cq0DqNOX1tg" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=Cq0DqNOX1tg" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Knomadix</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/9.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=kZmSigQ4Mpg" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=kZmSigQ4Mpg" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>NASGO</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/14.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=J0GHf1Y-uVY" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=J0GHf1Y-uVY" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Orangecrm</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/10.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://youtu.be/LQxlPE4iPcA" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://youtu.be/LQxlPE4iPcA" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Outdoor Adventure</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/11.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=auWkqmx79q8" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=auWkqmx79q8" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Genex Power</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/12.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=p2C95K9UdW4" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=p2C95K9UdW4" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Imagine America Career</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/13.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=exGjdiYOxZc" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=exGjdiYOxZc" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Smart City Cairo</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/15.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=_317jpQxbSc" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=_317jpQxbSc" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Tempsure</h2>
											</div>
										</div>
									</div>
								</div>

								<div class="project-post">
									<img alt="" src="assets/images/portfolio/animations/16.jpg">
									<div class="hover-box">
										<a data-fancybox href="https://www.youtube.com/watch?v=BKd79LxSPLI" class="zoom-image-tn"></a>
										<div class="hover-box-in">
											<ul class="project-links">
												<li>
													<a data-fancybox href="https://www.youtube.com/watch?v=BKd79LxSPLI" class="">
														<img src="assets/images/portfolio/play-btn.png">
													</a>
												</li>
											</ul>
											<div class="project-title">
												<h2>Outdoor Cinpals</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->

	</div>
	<!-- End Container -->

	<div class="preloader">
		<!-- <img alt="" src="portfolio/images/preloader.gif"> -->
	</div>

	<!-- App Popup 1 -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-portfolio">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">  
          	<div class="top-modal-content">  
          		<img src="assets/images/portfolio/app-development/p1-large.jpg">
          	</div>
          	<div class="bottom-modal-content">
          		<div class="inner-model-bottom row">
          			<div class="col-lg-3 col-xs-12">
          				<img src="assets/images/portfolio/app-development/ammit-ico.jpg" />
          			</div>
          			<div class="col-lg-9 col-xs-12">
          				<h4>Ammit</h4>
          				<p>
          					Client’s aim was to build an online database that includes information related to films and TV programs. Also, the app should serve as a social network so that users could easily interact with each other, share views and reviews about the movies and TV programs and earn rewards.
          				</p>
          			</div>
          		</div>
          	</div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- App Popup 2 -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-portfolio">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">  
          	<div class="top-modal-content">  
          		<img src="assets/images/portfolio/app-development/p2-large.jpg">
          	</div>
          	<div class="bottom-modal-content">
          		<div class="inner-model-bottom row">
          			<div class="col-lg-3 col-xs-12">
          				<img src="assets/images/portfolio/app-development/evoke.webp" />
          			</div>
          			<div class="col-lg-9 col-xs-12">
          				<h4>Evoke</h4>
          				<p>
          					Clients’ aim was to launch an app that changes the way artists connect with their fans and how fans discover new music/artists. The overall mission is to change the way people stream and enjoy music.
          				</p>
          			</div>
          		</div>
          	</div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Digital Marketing Popup 1 -->
	<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-portfolio">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">  
          	<div class="top-modal-content">  
          		<img src="assets/images/digital/port1.jpg">
          	</div>
          	<div class="bottom-modal-content">
          		<div class="inner-model-bottom row">
          			<div class="col-lg-3 col-xs-12">
          				<img src="assets/images/digital/port1-logo.png" />
          			</div>
          			<div class="col-lg-9 col-xs-12">
          				<h4>Valvoline</h4>
          				<p>
          					Valvoline™ is a leading worldwide producer and distributor of premium-branded automotive, commercial and industrial lubricants, and automotive chemicals. In 2016, it ranks as the #2 quick-lube chain by number of stores and #3 passenger car motor oil in the DIY market by volume brand in the United States. 
          				</p>
          			</div>
          		</div>
          	</div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Digital Marketing Popup 2 -->
	<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-portfolio">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">  
          	<div class="top-modal-content">  
          		<img src="assets/images/digital/port4.jpg">
          	</div>
          	<div class="bottom-modal-content">
          		<div class="inner-model-bottom row">
          			<div class="col-lg-3 col-xs-12">
          				<img src="assets/images/digital/port4-logo.png" />
          			</div>
          			<div class="col-lg-9 col-xs-12">
          				<h4>Beyondant</h4>
          				<p>
          					Beyondant, LLC, is the leader in usable NFC devices, deploying wireless data transfer methods that detect and enable technology in close secured proximity to direct your customer/prospects to a desired Internet destination. The coronavirus has now changed the way we conduct business.
          				</p>
          			</div>
          		</div>
          	</div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Digital Marketing Popup 3 -->
	<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-portfolio">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">  
          	<div class="top-modal-content">  
          		<img src="assets/images/digital/port3.jpg">
          	</div>
          	<div class="bottom-modal-content">
          		<div class="inner-model-bottom row">
          			<div class="col-lg-3 col-xs-12">
          				<img src="assets/images/digital/port3-logo.png" />
          			</div>
          			<div class="col-lg-9 col-xs-12">
          				<h4>One World Rental</h4>
          				<p>
          					At One World Rental, IT rental are just the tip of the iceberg. We hire the latest cutting-edge rental technology and technical event solutions. This includes software, hardware, delivery, installation, Wi-Fi installation, and a technical on-site presence for any size event, anywhere in the world.
          				</p>
          			</div>
          		</div>
          	</div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Digital Marketing Popup 4 -->
	<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-portfolio">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">  
          	<div class="top-modal-content">  
          		<img src="assets/images/digital/port2.jpg">
          	</div>
          	<div class="bottom-modal-content">
          		<div class="inner-model-bottom row">
          			<div class="col-lg-3 col-xs-12">
          				<img src="assets/images/digital/port2-logo.png" />
          			</div>
          			<div class="col-lg-9 col-xs-12">
          				<h4>Greenfield Services Inc</h4>
          				<p>
          					Here at green field services we take pride in providing the highest quality work possible. We have a highly trained crew, with decades of combined experience. We provide all excavation, and underground utility services. 
          				</p>
          			</div>
          		</div>
          	</div>
          </div>
          
        </div>
      </div>
    </div>

   

	<script type="text/javascript" src="portfolio/js/jquery.min.js"></script>
	<script type="text/javascript" src="portfolio/js/jquery.migrate.js"></script>
	<script type="text/javascript" src="portfolio/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="portfolio/js/bootstrap.js"></script>
	<script type="text/javascript" src="portfolio/js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="portfolio/js/jquery.isotope.min.js"></script>
	<!-- <script type="text/javascript" src="portfolio/js/retina-1.1.0.min.js"></script> -->
	<!-- <script type="text/javascript" src="portfolio/js/jquery.nicescroll.min.js"></script> -->
	<script type="text/javascript" src="portfolio/js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="portfolio/js/script.js"></script>
	<!-- Fancy Box -->
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- Custom jquery -->
	<script>
	    
	    
	    
		jQuery(window).load(function(){
			jQuery('.tab-content-ntn').hide();
			jQuery('.tab-content-ntn.active').show();
		});	
		jQuery('.tab-links-ntn>li>a').click(function(){
            var active_a = jQuery(this).attr('data-id');
            jQuery('.tab-links-ntn>li>a').removeClass('active');
            jQuery(this).addClass('active');
            jQuery('.tab-content-ntn').removeClass('active');
            jQuery('.tab-content-ntn#' + active_a).addClass('active');
            jQuery('.tab-content-ntn').fadeOut();
            jQuery('.tab-content-ntn#' + active_a).fadeIn();
        });

        // auto click tabs
	    jQuery('.tab-links-ntn a.tab-link-ntn.active').trigger('click');
        
	</script>
	 <!-- Preloader Start -->
    <script>
         jQuery(window).on('load', function () {
              jQuery('#preloader').fadeOut();
         });
    </script>
    <!-- Preloader End -->
</body>
</html>