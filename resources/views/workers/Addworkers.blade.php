@extends('layouts.DashboardLayout')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Add Workers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Worker</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                   
                    <div class="card-body">
                        <form action="{{route('worker.stored')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-group">
                                <label for='name'>Name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" >
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                            </div>
                            
                            <div class="form-group">
                                <label for='address'>Address</label>
                                <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" >
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="form-group">
                                <label for='pno'>Phone No</label>
                                <input type="number" id="pno" name="pno" class="form-control @error('pno') is-invalid @enderror" >
                                    @error('pno')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="form-group">
                                <label for='service'>Service</label>
                                <select id="service" name="service" class="form-control @error('service') is-invalid @enderror">
                                    <option value="">Select Service</option>
                                    <option value="Plumber">Plumber</option>
                                    <option value="Electrician">Electrician</option>
                                    <option value="Carpenter">Carpenter</option>
                                    <option value="Gardener">Gardener</option>
                                    <option value="Painter">Painter</option>

                                    <option value="Mason">Mason</option>
                                </select>
                                @error('service')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Add</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>			
</div>
<!-- /Page Wrapper -->
@endsection
