@extends('layouts.DashboardLayout')
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
			
        <div class="content container-fluid">
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
                        <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
          
    </div>
   <!--/ Page Wrapper -->
    @endsection
{{-- </x-app-layout> --}}
