@extends("layouts.CommonLayout")
@section('title')
    <title>login</title>
@endsection
@section('content')
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
<!-- Login Tab Content -->
<div class="account-content">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-7 col-lg-6 login-left">
            <img src="{{asset('styles/img/logo.png')}}" class="img-fluid" alt="Login ">		
        </div>
        <div class="col-md-12 col-lg-6 login-right">
            <div class="login-header">
                <h3>Login </h3>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group form-focus">
                    <input type="email" id="email" name="email" class="form-control floating @error('email') is-invalid @enderror">
                    <label for="email" class="focus-label">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group form-focus">
                    <input type="password" id="password" name="password" class="form-control floating @error('email') is-invalid @enderror">
                    <label  for="password" class="focus-label">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-right">
                    <a class="forgot-link"  href="{{ route('password.request') }}">Forgot Password ?</a>
                </div>
                <input type="submit" class="btn btn-primary btn-block btn-lg login-btn" value="Log in">
                
                <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
            </form>
        </div>
    </div>
</div>

<!-- /Login Tab Content -->
<br>
<br>
<br>
</div>
</div>

</div>

</div>		
<!-- /Page Content -->
{{-- <form method="POST" action="{{ route('login') }}">
    @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        

        {{-- <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
<input type="submit" class="btn btn-primary btn-block btn-lg login-btn" value="Log in">
           
        </div>
    </form> --}}
@endsection