<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Giner - Conference page</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{ asset('Ginger') }}/assets/img/favicon.png">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('Ginger') }}/assets/css/slick.min.css"/>
	<link rel="stylesheet" href="{{ asset('Ginger') }}/assets/css/bootstrap-grid.css">
	<link href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('Ginger') }}/assets/css/nice-select.css">
	<link rel="stylesheet" href="{{ asset('Ginger') }}/assets/css/style.css">
</head>
<body id="conference-page" style="background-image: url(assets/img/conference_bg.svg);">
	<!-- =============== PRELOADER =============== -->
	<div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner cssload-one"></div>
			<div class="cssload-inner cssload-two"></div>
			<div class="cssload-inner cssload-three"></div>
		</div>
	</div>
	<!-- ============== PRELOADER END ============== -->
	<!-- ================= HEADER ================= -->
	<header class="conference-header-fixed header-fixed">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="container">
			<div class="row conference-header-row">
				<div class="col-sm-3 col-lg-2 col-xl-3">
					<a href="index.html" class="logo"><img src="{{ asset('Ginger') }}/assets/img/logo-white.svg" alt="logo"></a>
				</div>
				<div class="col-sm-9 col-lg-8 col-xl-6">
					<nav class="nav-menu menu">
						<ul class="nav-list">
							
							<li><a href="#about">about us</a></li>
							<li><a href="#schedule">schedule</a></li>
							<li><a href="#location">location</a></li>
							<li><a href="#register">register</a></li>
							<li><a href="#news">news</a></li>
							{{-- <li class="dropdown">
								<a href="#">pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul>
									<li><a href="conference-team.html">Conference Team</a></li>
									<li><a href="dance-team.html">Dance Teame</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="page-error.html">Page Error 404</a></li>
								</ul>
							</li> --}}
						</ul>
					</nav>
				</div>
				<div class="col-md-3 col-lg-2 col-xl-3 conference-header-btn">
					<a href="#register" class="btn"><span>Get Tickets</span></a>
				</div>
			</div>
		</div>
	</header>
	<!-- =============== HEADER END =============== -->

	<!-- =========== S-CONFERENCE-SLIDER =========== -->
	<section class="s-conference-slider">
		<div class="conference-slider">
			<div class="conference-slide" style="background-image: url({{ asset('Ginger') }}/assets/img/slide1-home-2.jpg);">
				<img class="conference-slide-tringle" src="{{ asset('Ginger') }}/assets/img/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="{{ asset('Ginger') }}/assets/img/effect-slider-left.svg" alt="img">
				<div class="container">
					<div class="conference-slide-item">
						<div class="date">12oct 2019</div>
						<div class="conference-slider-title">High-Quality</div>
						<h2 class="title"><span>Best Eventio</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="conference-slide" style="background-image: url({{ asset('Ginger') }}/assets/img/slide4-home-2.jpg);">
				<img class="conference-slide-tringle" src="{{ asset('Ginger') }}/assets/img/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="{{ asset('Ginger') }}/assets/img/effect-slider-left.svg" alt="img">
				<div class="container">
					<div class="conference-slide-item">
						<div class="date">21dec 2019</div>
						<div class="conference-slider-title">Dedicated To</div>
						<h2 class="title"><span>Your Success</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="conference-slide" style="background-image: url({{ asset('Ginger') }}/assets/img/slide3-home-2.jpg);">
				<img class="conference-slide-tringle" src="{{ asset('Ginger') }}/assets/img/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="{{ asset('Ginger') }}/assets/img/effect-slider-left.svg" alt="img">
				<div class="container">
					<div class="conference-slide-item">
						<div class="date">27dec 2019</div>
						<div class="conference-slider-title">Evolving With</div>
						<h2 class="title"><span>Our Business</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-SLIDER END ========= -->

	<!-- =========== S-CONFERENCE-COUNTER =========== -->
	<section id="about" class="s-conference-mission" style="background-image: url({{ asset('Ginger') }}/assets/img/bg-about-home2.png);">
		<div class="s-conference-counter">
			<div class="container">
				<div class="conference-counter-wrap">
					<img class="conference-counter-effect-1" src="{{ asset('Ginger') }}/assets/img/counter-icon-1.svg" alt="img">
					<div class="conference-counter-cover">
						<h4>The event will begin through</h4>
						<div id="clockdiv" class="clock-timer clock-timer-conference">
							<div class="clock-item days-item">
								<span class="days"></span>
								<div class="smalltext">Days</div>
							</div>
							<div class="clock-item hours-item">
								<span class="hours"></span>
								<div class="smalltext">Hours</div>
							</div>
							<div class="clock-item minutes-item">
								<span class="minutes"></span>
								<div class="smalltext">Minutes</div>
							</div>
							<div class="clock-item seconds-item">
								<span class="seconds"></span>
								<div class="smalltext">Seconds</div>
							</div>
						</div>
					</div>
					<img class="conference-counter-effect-2" src="{{ asset('Ginger') }}/assets/img/counter-icon-2.svg" alt="img">
				</div>
			</div>
		</div>
		<div class="s-our-mission s-about-speaker">
			<div class="container">
				<h2 class="title-conference"><span>Our mission</span></h2>
				<div class="row">
					<div class="col-lg-6 our-mission-img">
						<span>
							<img src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/our-mission-2.svg" alt="" class="mission-img-effect-1 rx-lazy">
							<img class="mission-img rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/img-about-home2.jpg" alt="img">
							<img src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/tringle-gray-little.svg" alt="" class="about-img-effect-2 rx-lazy">
						</span>
					</div>
					<div class="col-lg-6 our-mission-info">
						<ul class="mission-meta">
							<li><i aria-hidden="true" class="fas fa-map-marker-alt"></i>London</li>
							<li><i aria-hidden="true" class="fas fa-calendar-alt"></i>31.10.2019</li>
							<li><i class="far fa-clock"></i>14:00 AM - 19:00 AM</li>
						</ul>
						<h4>Od tempor incididunt ut labore aliqua. ullamco laboris nisi ut aliquip</h4>
						<div class="mission-info-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
						</div>
						<div class="mission-list-cover">
							<ul class="mission-list">
								<li><i class="fas fa-chevron-right"></i>Lorem ipsum dolor sit amet</li>
								<li><i class="fas fa-chevron-right"></i>Consectetur adipiscing elit</li>
								<li><i class="fas fa-chevron-right"></i>Eiusmod tempor incididunt ut</li>
							</ul>
							<ul class="mission-list">
								<li><i class="fas fa-chevron-right"></i>Lorem ipsum dolor sit amet</li>
								<li><i class="fas fa-chevron-right"></i>Consectetur adipiscing elit</li>
								<li><i class="fas fa-chevron-right"></i>Eiusmod tempor incididunt ut</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-COUNTER END ========= -->

	<!-- ============ SPEAKER & SCHEDULE ============ -->
	<section id="schedule" class="s-speakers-schedule">
		<div class="container">
			<h2 class="title-conference"><span>Speaker & Schedule</span></h2>
			<div class="speakers-timeline-cover">
				<div class="speakers-timeline-item">
					<div class="speakers-timeline-img">
						<a href="conference-team.html" class="our-speaker-item">
							<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/speaker-1.jpg" alt="img">
							<div class="speaker-item-info">
								<h3 class="name">Eileen Walsh</h3>
								<p class="prof">Business Manager</p>
							</div>
						</a>
					</div>
					<div class="speakers-timeline-info">
						<div class="date">8:30 AM - 9:30 AM</div>
						<h3 class="title">Teamwork all you need <br>to know the manager</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="speakers-timeline-item">
					<div class="speakers-timeline-img">
						<a href="conference-team.html" class="our-speaker-item">
							<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/speaker-2.jpg" alt="img">
							<div class="speaker-item-info">
								<h3 class="name">David Green</h3>
								<p class="prof">Business Manager</p>
							</div>
						</a>
					</div>
					<div class="speakers-timeline-info">
						<div class="date">10:30 AM - 11:30 AM</div>
						<h3 class="title">24/7 Service <br>how to make a client happy</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="speakers-timeline-item">
					<div class="speakers-timeline-img">
						<a href="conference-team.html" class="our-speaker-item">
							<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/speaker-3.jpg" alt="img">
							<div class="speaker-item-info">
								<h3 class="name">Jennifer Oliver</h3>
								<p class="prof">Business Manager</p>
							</div>
						</a>
					</div>
					<div class="speakers-timeline-info">
						<div class="date">12:30 AM - 13:30 AM</div>
						<h3 class="title">Everything about <br>market analytics</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="speakers-timeline-item">
					<div class="speakers-timeline-img">
						<a href="conference-team.html" class="our-speaker-item">
							<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/speaker-4.jpg" alt="img">
							<div class="speaker-item-info">
								<h3 class="name">Paul Bates</h3>
								<p class="prof">Business Manager</p>
							</div>
						</a>
					</div>
					<div class="speakers-timeline-info">
						<div class="date">14:30 AM - 15:30 AM</div>
						<h3 class="title">Career growth how to <br>become a sought-after </h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========== SPEAKER & SCHEDULE END ========== -->

	<!--================= S-HAVE-PREPARED =================-->
	<section class="s-have-prepared counter-animate counter-active" style="background-image: url({{ asset('Ginger') }}/assets/img/bg-headway.jpg);">
		<div class="container">
			<h2 class="title-conference title-conference-white"><span>We have prepared</span></h2>
			<div class="row">
				<div class="col-6 col-sm-3 have-prepared-item">
					<div class="have-prepared">
						<img src="{{ asset('Ginger') }}/assets/img/tringle-blue.svg" alt="img">
						<span data-number="128">0</span>
						<h4>Successful projects</h4>
					</div>
				</div>
				<div class="col-6 col-sm-3 have-prepared-item">
					<div class="have-prepared">
						<img src="{{ asset('Ginger') }}/assets/img/tringle-blue.svg" alt="img">
						<span data-number="16">0</span>
						<h4>Conferences per year</h4>
					</div>
				</div>
				<div class="col-6 col-sm-3 have-prepared-item">
					<div class="have-prepared">
						<img src="{{ asset('Ginger') }}/assets/img/tringle-blue.svg" alt="img">
						<span data-number="8">0</span>
						<h4>Online courses</h4>
					</div>
				</div>
				<div class="col-6 col-sm-3 have-prepared-item">
					<div class="have-prepared">
						<img src="{{ asset('Ginger') }}/assets/img/tringle-blue.svg" alt="img">
						<span data-number="10">0</span>
						<h4>Years in profession</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=============== S-HAVE-PREPARED END ===============-->

	<!--================= S-PRICING-TABLE =================-->
	<section class="s-pricing-table">
		<div class="container">
			<h2 class="title-conference"><span>Pricing table</span></h2>
			<div class="row pricing-table-cover">
				<div class="col-md-4 pricing-table-col">
					<div class="pricing-table-item">
						<h3>Basic</h3>
						<div class="price-cover">
							<span>$</span>
							<div class="price">130</div>
							<img src="{{ asset('Ginger') }}/assets/img/tringle-price-yellow.svg" alt="img">
						</div>
						<div class="name">one day</div>
						<div class="price-text">Active Event</div>
						<ul class="price-list">
							<li><i class="fas fa-check"></i>Ut enim ad minim</li>
							<li><i class="fas fa-check"></i>veniam, quis nostrud</li>
							<li><i class="fas fa-check"></i>exercitation ullamco</li>
						</ul>
						<a href="#" class="btn btn-yellow">buy ticket</a>
					</div>
				</div>
				<div class="col-md-4 pricing-table-col premium">
					<div class="pricing-table-item">
						<h3>Premium</h3>
						<div class="price-cover">
							<span>$</span>
							<div class="price">150</div>
							<img src="{{ asset('Ginger') }}/assets/img/tringle-price-blue.svg" alt="img">
						</div>
						<div class="name">three day</div>
						<div class="price-text">Active Event</div>
						<ul class="price-list">
							<li><i class="fas fa-check"></i>consectetur adipiscing</li>
							<li><i class="fas fa-check"></i>elit, sed do eiusmod </li>
							<li><i class="fas fa-check"></i>tempor incididunt</li>
							<li><i class="fas fa-check"></i>ut labore et dolore</li>
						</ul>
						<a href="#" class="btn btn-yellow">buy ticket</a>
					</div>
				</div>
				<div class="col-md-4 pricing-table-col">
					<div class="pricing-table-item">
						<h3>Ultimate</h3>
						<div class="price-cover">
							<span>$</span>
							<div class="price">140</div>
							<img src="{{ asset('Ginger') }}/assets/img/tringle-price-yellow2.svg" alt="img">
						</div>
						<div class="name">two day</div>
						<div class="price-text">Active Event</div>
						<ul class="price-list">
							<li><i class="fas fa-check"></i>Duis aute irure dolor in</li>
							<li><i class="fas fa-check"></i>reprehenderit in</li>
							<li><i class="fas fa-check"></i>voluptate velit esse</li>
						</ul>
						<a href="#" class="btn btn-yellow">buy ticket</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=============== S-PRICING-TABLE END ===============-->


	<!--================== S-BUY-TICKET ==================-->
	<section id="register" class="s-buy-ticket">
		<div class="container">
			<h2 class="title-conference"><span>Buy ticket</span></h2>
			<div class="row">
				<div class="col-md-6">
					<div class="buy-ticket-left">
						<h5>Od tempor incididunt ut labore et dolore magna</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed od tempor incididunt ut labore et dolore magna aliqua.</p>
						<div class="ticket-contact-cover">
							<div class="ticket-contact-item">
								<h5>Event organizer</h5>
								<ul>
									<li><span>Name:</span>Eugene Scott</li>
									<li><span>Phone:</span><a href="tel:+343234345">+3 432 343 45</a></li>
									<li><span>Email:</span><a href="mailto:rovadex@gmail.com">rovadex@gmail.com</a></li>
								</ul>
							</div>
							<div class="ticket-contact-item">
								<h5>Support</h5>
								<ul>
									<li><span>Name:</span>Eugene Scott</li>
									<li><span>Phone:</span><a href="tel:+343234345">+3 432 343 45</a></li>
									<li><span>Email:</span><a href="mailto:rovadex@gmail.com">rovadex@gmail.com</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="buy-ticket-form">
						<form id='contactform' action="{{ asset('Ginger') }}/assets/php/contact.php" name="contactform">
							<h5>Information</h5>
							<ul class="form-cover">
								<li class="inp-cover inp-name"><input id="name" type="text" name="your-name" placeholder="Name"></li>
								<li class="inp-cover inp-email"><input id="email" type="email" name="your-email" placeholder="E-mail"></li>
								<li class="inp-cover inp-profession">
									<select class="nice-select">
										<option selected="selected" disabled>Profession</option>
										<option>Designer</option>
										<option>Developer</option>
										<option>QA</option>
									</select>
								</li>
								<li class="inp-cover inp-price">
									<select class="nice-select">
										<option selected="selected" disabled>Ticket Type</option>
										<option value="130$">Basic</option>
										<option value="140$">Ultimate</option>
										<option value="150$">Premium</option>
									</select>
								</li>
								<li class="pay-method">
									<h5>Payment method</h5>
									<div class="pay-item">
										<input type="radio" name="pay-1" checked value="credit card">
										<span></span>
										<p>credit card</p>
									</div>
									<div class="pay-item">
										<input type="radio" name="pay-1" value="payPal">
										<span></span>
										<p>payPal</p>
									</div>
								</li>
							</ul>
							<div class="checkbox-wrap">
								<div class="checkbox-cover">
									<input type="checkbox">
									<p>By using this form you agree with the storage and handling of your data by this website.</p>
								</div>
							</div>
							<div class="price-final">
								<span>price:</span>
								<div class="price-final-text">130$</div>
							</div>
							<div class="btn-form-cover">
								<button id="#submit" type="submit" class="btn"><span>Buy now</span></button>
							</div>
						</form>
						<div id="message"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ S-BUY-TICKET END ================-->

	<!--================ CONFERENCE NEWS ================-->
	<section id="news" class="s-conference-news" style="background-image: url({{ asset('Ginger') }}/assets/img/bg-news.jpg);">
		<div class="conference-news-container">
			<h2 class="title-conference title-conference-white"><span>Our news</span></h2>
			<div class="conference-news-slider">
				<div class="conference-news-slide">
					<div class="conference-news-item">
						<div class="conference-post-thumbnail">
							<a href="single-blog.html"><img src="{{ asset('Ginger') }}/assets/img/post-1-home2.jpg" alt="img"></a>
						</div>
						<div class="date"><span>Oct</span>28,2019</div>
						<div class="conference-post-content">
							<h4><a href="single-blog.html">Business strategy</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
							<div class="conference-post-meta"><i class="fas fa-user" aria-hidden="true"></i>By <a href="blog.html">Samson peters</a>
							</div>
							<a href="single-blog.html" class="btn"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="conference-news-slide">
					<div class="conference-news-item">
						<div class="conference-post-thumbnail">
							<a href="single-blog.html"><img src="{{ asset('Ginger') }}/assets/img/post-2-home2.jpg" alt="img"></a>
						</div>
						<div class="date"><span>Oct</span>21,2019</div>
						<div class="conference-post-content">
							<h4><a href="single-blog.html">Sed ut perspiciatis</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
							<div class="conference-post-meta"><i class="fas fa-user" aria-hidden="true"></i>By <a href="blog.html">Samson peters</a>
							</div>
							<a href="single-blog.html" class="btn"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="conference-news-slide">
					<div class="conference-news-item">
						<div class="conference-post-thumbnail">
							<a href="single-blog.html"><img src="{{ asset('Ginger') }}/assets/img/post-3-home2.jpg" alt="img"></a>
						</div>
						<div class="date"><span>Oct</span>18,2019</div>
						<div class="conference-post-content">
							<h4><a href="single-blog.html">Architecto beatae</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
							<div class="conference-post-meta"><i class="fas fa-user" aria-hidden="true"></i>By <a href="blog.html">Samson peters</a>
							</div>
							<a href="single-blog.html" class="btn"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="conference-news-slide">
					<div class="conference-news-item">
						<div class="conference-post-thumbnail">
							<a href="single-blog.html"><img src="{{ asset('Ginger') }}/assets/img/post-4-home2.jpg" alt="img"></a>
						</div>
						<div class="date"><span>Oct</span>12,2019</div>
						<div class="conference-post-content">
							<h4><a href="single-blog.html">Business strategy</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
							<div class="conference-post-meta"><i class="fas fa-user" aria-hidden="true"></i>By <a href="blog.html">Samson peters</a>
							</div>
							<a href="single-blog.html" class="btn"><span>Read More</span></a>
						</div>
					</div>
				</div>
				<div class="conference-news-slide">
					<div class="conference-news-item">
						<div class="conference-post-thumbnail">
							<a href="single-blog.html"><img src="{{ asset('Ginger') }}/assets/img/post-2-home2.jpg" alt="img"></a>
						</div>
						<div class="date"><span>Oct</span>10,2019</div>
						<div class="conference-post-content">
							<h4><a href="single-blog.html">Sed ut perspiciatis</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
							<div class="conference-post-meta"><i class="fas fa-user" aria-hidden="true"></i>By <a href="blog.html">Samson peters</a>
							</div>
							<a href="single-blog.html" class="btn"><span>Read More</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--============== CONFERENCE NEWS END ==============-->

	<!-- =============== CONFERENCE-MAP =============== -->
	<section id="location" class="conference-map">
		<div class="container">
			<h2 class="title-conference"><span>Our location</span></h2>
			<div class="row">
				<div class="col-lg-5 conference-map-info">
					<ul class="mission-meta">
						<li><i aria-hidden="true" class="fas fa-calendar-alt"></i>28.08.2019</li>
						<li><i class="far fa-clock"></i>14:00 AM - 19:00 AM</li>
					</ul>
					<h3>New York Mark Plaza <span>3rd floor</span> Conference Hall</h3>
					<div class="conference-map-content">
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas </p>
					</div>
					<ul class="mission-meta">
						<li><i aria-hidden="true" class="fas fa-map-marker-alt"></i>New York, Valley Stream</li>
					</ul>
				</div>
				<div class="col-lg-7 conference-map-item">
					<span>
						<div id="map" class="cont-map google-map"></div>
					</span>
				</div>
			</div>
		</div>
	</section>
	<!-- ============= CONFERENCE-MAP END ============= -->

	<!--=================== S-CLIENTS ===================-->
	<section class="s-clients s-partners">
		<div class="container">
			<h2 class="title-conference"><span>Our partners</span></h2>
			<div class="clients-cover">
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('Ginger') }}/assets/img/client-1.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('Ginger') }}/assets/img/client-2.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('Ginger') }}/assets/img/client-4.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('Ginger') }}/assets/img/client-5.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('Ginger') }}/assets/img/client-6.svg" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================= S-CLIENTS END =================-->

	<!--================== S-INSTAGRAM ==================-->
	<section class="s-instagram">
		<div class="instagram-cover">
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">234 <i class="far fa-comment"></i></li>
					<li class="like">134 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-1.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">222 <i class="far fa-comment"></i></li>
					<li class="like">118 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-2.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">224 <i class="far fa-comment"></i></li>
					<li class="like">124 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-3.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">155 <i class="far fa-comment"></i></li>
					<li class="like">107 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-4.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">350 <i class="far fa-comment"></i></li>
					<li class="like">140 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-5.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">350 <i class="far fa-comment"></i></li>
					<li class="like">140 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-6.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">350 <i class="far fa-comment"></i></li>
					<li class="like">140 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-7.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">350 <i class="far fa-comment"></i></li>
					<li class="like">140 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-8.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">350 <i class="far fa-comment"></i></li>
					<li class="like">140 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-9.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">350 <i class="far fa-comment"></i></li>
					<li class="like">140 <i class="far fa-heart"></i></li>
				</ul>
				<img class="rx-lazy" src="{{ asset('Ginger') }}/assets/img/placeholder-all.png" data-src="{{ asset('Ginger') }}/assets/img/conference-insta-10.jpg" alt="img">
			</a>
		</div>
	</section>
	<!--================ S-INSTAGRAM END ================-->

	<!--==================== FOOTER ====================-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-cont col-12 col-sm-6 col-lg-4">
					<a href="index.html" class="logo"><img src="{{ asset('Ginger') }}/assets/img/logo.svg" alt="logo"></a>
					<p>7100 Athens Place Washington, DC 20521</p>
					<ul class="footer-contacts">
						<li class="footer-phone">
							<i aria-hidden="true" class="fas fa-phone"></i>
							<a href="tel:+18001234567">1-800-1234-567</a>
						</li>
						<li class="footer-email">
							<a href="mailto:rovadex@gmail.com">rovadex@gmail.com</a>
						</li>
					</ul>
					<div class="footer-copyright"><a target="_blank" href="https://rovadex.com">Rovadex</a> © 2019. All Rights Reserved.</div>
				</div>
				<div class="footer-item-link col-12 col-sm-6 col-lg-4">
					<div class="footer-link">
						<h5>Event</h5>
						<ul class="footer-list">
							<li><a href="#about">About</a></li>
							<li><a href="#news">News</a></li>
							<li><a href="#news">Key figures</a></li>
							<li><a href="#news">Runners' Photos</a></li>
							<li><a href="#news">Results</a></li>
							<li><a href="#news">Partners</a></li>
						</ul>
					</div>
					<div class="footer-link">
						<h5>Social</h5>
						<ul class="footer-list">
							<li><a target="_blank" href="https://www.facebook.com/rovadex">Facebook</a></li>
							<li><a target="_blank" href="https://twitter.com/RovadexStudio">Twitter</a></li>
							<li><a target="_blank" href="https://www.instagram.com/rovadex">Instagram</a></li>
							<li><a target="_blank" href="https://www.youtube.com">Youtube</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-subscribe col-12 col-sm-6 col-lg-4">
					<h5>Subscribe to our newsletter. Stay up to date with our latest news and updates.</h5>
					<form class="subscribe-form">
						<input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
						<button class="btn-form" type="submit"><i class="fas fa-paper-plane"></i></button>
					</form>
					<p>By clicking the button you agree to the <a href="#" target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms and Conditions</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================== FOOTER END ==================-->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	<script src="{{ asset('Ginger') }}/assets/js/jquery-2.2.4.min.js"></script>
	<script src="{{ asset('Ginger') }}/assets/js/slick.min.js"></script>
	<script src="{{ asset('Ginger') }}/assets/js/rx-lazy.js"></script>
	<script src="{{ asset('Ginger') }}/assets/js/jquery.nice-select.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=you_googlemap_key"></script>
	<script src="{{ asset('Ginger') }}/assets/js/parallax.min.js"></script>
	<script src="{{ asset('Ginger') }}/assets/js/scripts.js"></script>
</body>
</html>
