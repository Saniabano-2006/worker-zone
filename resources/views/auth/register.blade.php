@extends('layouts.commonlayout')
@section('title')
<title>register</title>
@endsection
@section('content')
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            
                <!-- Account Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="{{asset('styles/img/logo.png')}}" class="img-fluid" alt="register ">	
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Register </h3>
                            </div>
                            
                            <!-- Register Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="text" id="name" name="name" class="form-control floating">
                                    <label for="name" class="focus-label">Name</label>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="form-group form-focus">
                                    <input type="email" id="email" name="email" class="form-control floating">
                                    <label for="email" class="focus-label">Email</label>
                                   
                                    <div class="error">
                                        
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div> 
                                    

                                </div>
                                <div class="form-group form-focus">
                                    <input type="password" id="password" name="password" class="form-control floating">
                                    <label for="password" class="focus-label">Create Password</label>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>
                                <div class="form-group form-focus">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control floating">
                                    <label for="password_confirmation" class="focus-label">Confirm Password</label>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                </div>
                                <div class="text-right">
                                    <a class="forgot-link" href="{{ route('login') }}">Already have an account?</a>
                                </div>
                                <input class="btn btn-primary btn-block btn-lg login-btn" type="submit" value="Signup">
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                <div class="row form-row social-login">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                    </div>
                                </div>
                            </form>
                            <!-- /Register Form -->
                            
                        </div>
                    </div>
                </div>
                <!-- /Account Content -->
                  <br>
<br>
<br>

            </div>
        </div>

    </div>

</div>		
<!-- /Page Content -->
{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@endsection
