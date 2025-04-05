<!DOCTYPE html> 
<html lang="en">
	
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		@yield('title')
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('styles/img/favicon.png" rel="icon')}}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('styles/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('styles/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('styles/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('styles/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

	
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{route('home')}}" class="navbar-brand logo">
							<img src="{{asset('styles/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						
						<ul class="main-nav">
							<li class="active">
								<a href="{{route('home')}}">Home</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						@if (Route::has('login'))
				@auth
				<li class="nav-item">
					<a href="{{ url('/dashboard') }}" class="nav-link header-login">Dashboard</a>
				</li>
				@else
				<li class="nav-item">
					<a href="{{ route('login') }}" class="nav-link header-login">Log in</a>
				</li>
				@if (Route::has('register'))
				<li class="nav-item">
					<a href="{{ route('register') }}" class="nav-link header-login">Register</a>
				</li>
				@endif
				@endauth
			@endif
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
						
		@yield('content')
		<!-- Footer -->
		<footer class="footer">
				
			<!-- Footer Top -->
			<div class="footer-top ">
				<div class="container-fluid ">
					<div class="row">
						<div class="col-lg-3 col-md-6">
						
							<!-- Footer Widget -->
							<div class="footer-widget footer-about">
								<div class="footer-logo">
									<img src="{{asset('styles/img/logo.png')}}" class="img-fluid" alt="logo">
								</div>
								<div class="footer-about-content">
									<p>At Worker Zone, our mission is to bridge the gap between local workers and clients, making it easier for people to find the help they need. We strive to provide a user-friendly platform that benefits both workers and clients, promoting a sense of community and cooperation.
									</p>
									
								</div>
							</div>
							<!-- /Footer Widget -->
							
						</div>
						<div class="col-lg-3 col-md-6">
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For client</h2>
									<ul>
										<li><a href="{{route('login')}}"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="{{route('register')}}"><i class="fas fa-angle-double-right"></i> Register</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->				
						</div>
						<div class="col-lg-3 col-md-6">
						
							<!-- Footer Widget -->
							
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									
									<p>
										<i class="fas fa-phone-alt"></i>
										+1 315 369 5943
									</p>
									<p class="mb-0">
										<i class="fas fa-envelope"></i>
										workerzone@example.com
									</p>
								</div>
							</div>
							<!-- /Footer Widget -->
							<div class="col-lg-3 col-md-6">
								<h2 class="footer-title">Social links</h2>
								<div class="social-icon">
									<ul>
										<li>
											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container-fluid">
				
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							
							
							
								<!-- Copyright Menu -->
								<div class="copyright-menu text-center text-light mx-auto">
							

										Developed By: Sania and Mahnoor
									
								</div>
								<!-- /Copyright Menu -->
								
						</div>
					</div>
					<!-- /Copyright -->
					
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->
		<script src="{{asset('styles/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('styles/js/popper.min.js')}}"></script>
		<script src="{{asset('styles/js/bootstrap.min.js')}}"></script>
		
		<!-- Slick JS -->
		<script src="{{asset('styles/js/slick.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('styles/js/script.js')}}"></script>
		</body>
</html>	