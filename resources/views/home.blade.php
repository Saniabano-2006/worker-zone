@extends('layouts.CommonLayout')
@section('title')
    <title>Worker Zone</title>
@endsection
@section('content')
    <!-- Home Banner -->
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Transform Your Workplace with Skilled Workers</h1>
							<p>Discover a platform that connects you with top talent.</p>
						</div>
                         
						<!-- Search -->
						<div class="search-box d-flex justify-content-center">
                      
							<form action="/search" method="post">
								@csrf
								@method('get')
								<div class="form-group search-info ">
									<input type="text" name="search" class="form-control" placeholder="Search workers">
									<span class="form-text">Ex : plumber electrician etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
                        </div>
						</div>
						<!-- /Search -->
						
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
            <!-- top services -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Services</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">
							  @foreach($services as $service)
								 <!-- Slider Item -->
								 <div  class="speicality-item text-center">
									<div class="speicality-img  ">
										<img src="{{asset('styles/img/services/'.$service->service_img)}}" class="img-fluid avatar-img rounded-circle" alt="{{$service->service_name}}">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<h4>{{$service->service_name}}</h4>
									<p style="width:250px">{{$service->service_detail}}</p>
								</div>	
								<!-- /Slider Item -->
							  @endforeach							   
					
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section> 
			<!-- top services -->
            	<!-- Worker Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-lg-4">
							<div class="section-header ">
								<h2> Our Workers</h2>
							</div>
							<div class="about-content">
								<p>Workers are the lifeblood of any economy, forming the foundation of industries, organizations, and communities. 
								</p>
								<p>They are the individuals who toil behind the scenes, creating, producing, and delivering the goods and services that drive progress and prosperity.</p>					
								
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider">
							
								<!-- worker Widget -->
								@foreach($workers as $worker)
								<div class="profile-widget">
									<div class="doc-img">
											<img class="img-fluid" style="height:200px" alt="{{$worker->name}}" src="{{asset('styles/img/workers/'.$worker->profile_pic)}}">
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<h5>{{$worker->name}}</h5> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">{{$worker->service}}</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> {{$worker->address}}
											</li>
											
											
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="#" class="btn view-btn">View Profile</a>
											</div>
											
										</div>
									</div>
								</div>
								@endforeach
								<!-- /worker Widget -->
						
							
								
							</div>
						</div>
				   </div>
				</div>
			</section>
			<!-- /Popular Section -->
@endsection