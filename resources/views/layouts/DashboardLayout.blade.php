<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('styles/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('styles/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('styles/css/feathericon.min.css')}}">
		
		<link rel="stylesheet" href="{{asset('styles/plugins/morris/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('styles/css/style2.css')}}">
		
		
    </head>
    <body>
        		<!-- Main Wrapper -->
                <div class="main-wrapper">
		
                    <!-- Header -->
                    <div class="header">
                    
                        <!-- Logo -->
                        <div class="header-left">
                            <a href="{{ route('home') }}" class="logo">
                                <img src="{{asset('styles/img/logo.png')}}" alt="Logo">
                            </a>
                           
                        </div>
                        <!-- /Logo -->
                        
                        <a href="{{asset('javascript:void(0)')}}" id="toggle_btn">
                            <i class="fe fe-text-align-left"></i>
                        </a>
                        
                        <div class="top-nav-search">
                            <form>
                                <input type="text" class="form-control" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        
                        <!-- Mobile Menu Toggle -->
                        <a class="mobile_btn" id="mobile_btn">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- /Mobile Menu Toggle -->
                        
                        <!-- Header Right Menu -->
                        <ul class="nav user-menu">
        
     
		<!-- User name -->
        <li style="margin: 12px; color:cornflowerblue;">{{ Auth::user()->name }}</li>
          <!-- /User name -->                  
                            <!-- User Menu -->
                            <li class="nav-item dropdown has-arrow">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="user-img"><img class="rounded-circle" src="#" width="31" alt="name"></span>
                                </a>
                                <div class="dropdown-menu">
                                   
                                    <a class="dropdown-item" href="{{route('profile.edit')}}">My Profile</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    <a class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit(); " href="{{route('logout')}}" >Logout</a>
                                    </form>
                                </div>
                            </li>
                            <!-- /User Menu -->
                            
                        </ul>
                        <!-- /Header Right Menu -->
                        
                    </div>
                    <!-- /Header -->
                    <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{ route('dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="menu-title"> 
								<span>Services</span>
							</li>
							@foreach($links as $link)
							<li class="active"> 
								<a href="{{$link['url']}}"><i class="{{$link['icon']}}"></i> <span>{{$link['name']}}</span></a>
							</li>
								
							@endforeach
						</ul>
						
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
            @yield('content');
                </div>
    </body>
    <!-- jQuery -->
    <script src="{{asset('styles/js/jquery-3.2.1.min.js')}}"></script>
		
    <!-- Bootstrap Core JS -->
    <script src="{{asset('styles/js/popper.min.js')}}"></script>
    <script src="{{asset('styles/js/bootstrap.min.js')}}"></script>
    
    <!-- Slimscroll JS -->
    <script src="{{asset('styles/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    
    <script src="{{asset('styles/plugins/raphael/raphael.min.js')}}"></script>    
    <script src="{{asset('styles/plugins/morris/morris.min.js')}}"></script>  
    <script src="{{asset('styles/js/chart.morris.js')}}"></script>
    
    <!-- Custom JS -->
    <script  src="{{asset('styles/js/script2.js')}}"></script>
</html>                 