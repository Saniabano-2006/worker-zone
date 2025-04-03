@extends('layouts.DashboardLayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
        <div class="row d-flex justify-content-center">
            @if(Session::has('success'))
                <div class="col-md-10 mt-4 alert alert-success">{{Session::get('success')}}</div>
            @endif
        </div>
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">List of Services</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">View Services</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>About</th>
                                            <th>Created at</th>
                                            <th>Related image</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                            
                                     
                                        <tr>
                                            <td>
                                               {{$service->service_name}}
                                            </td>
                                            <td> {{$service->service_detail}}</td>
                                            <td> {{$service->created_at}}</td>
                                            
                                            
                                            <td><img width="50" class="avatar-img rounded-circle" src="{{asset('styles/img/services/'.$service->service_img)}}" alt=" {{$service->service_name}}"></td>
                                           
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
            
        </div>			
    </div>
    <!-- /Page Wrapper -->
@endsection