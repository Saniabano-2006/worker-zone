@extends('layouts.commonlayout')
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
            {{-- search result --}}
            <div class="container mt-5">
                <h2>Search Results</h2>
                <div class="row">
                    @foreach($workers as $worker)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $worker->name }}</h5>
                                    <p class="card-text">Service: {{ $worker->service }}</p>
                                    <p class="card-text">Phone: {{ $worker->phone }}</p>
                                    <a href="#" class="btn btn-primary">View Profile</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
             {{-- !search result --}}
@endsection