@extends('layouts.DashboardLayout')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Edit Services</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('update.services')}}">Update Srevices</a></li>
                        <li class="breadcrumb-item active">Edit Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                   
                    <div class="card-body">
                        <form action="{{ route('services.storeupdate', $services->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                        
                            <div class="form-group">
                                <label for='name'>Service</label>
                                <input type="text" id="name" name="name" value="{{old('name',$services->service_name)}}" class="form-control @error('name') is-invalid @enderror" >
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                            </div>
                            <div class="form-group">
                                <label for="about">About</label>
                                <input type="text" id="about" name="about" value="{{old('about',$services->service_detail)}}" class="form-control @error('about') is-invalid @enderror">
                                @error('about')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Related Image</label>
                                <input type="file" id="image" name="image"value="{{old('image',$services->service_img)}}" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Done</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>			
</div>
<!-- /Page Wrapper -->
@endsection
