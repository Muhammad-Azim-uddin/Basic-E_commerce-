@extends('layouts.authLayout')
@section('title', 'Login')
@section('authContent')
    <!-- *Breadcrumbs Start Here -->
    <section id="Breadcrumbs">
        <div class="container">
            <ul>
                <li class="d-flex align-items-center">
                    <a href="{{route('home')}}" class="homeIcom">
                        <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
                    </a>
                    <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
                </li>
                <li class="d-flex align-items-center">
                    <a href="#">Account</a>
                    <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
                </li>
                <li>
                    <a href="#" class="active">Login</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- *Breadcrumbs End Hear -->


    <!-- *Sign In Start Here -->
    <section id="signIn" class="signIn">
        <div class="container">
            <form action="{{ route('login') }}" method="POST">
               @csrf
                <h1 class="text-center">Sign In</h1>
                <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" >
                @error('email')
                    <span class="error" role="alert">{{ $message }}</span>
                @enderror
                <div class="passwordBox">
                    <input name="password" type="password" id="passwordInputSignIn" required placeholder="Password" value="{{ old('password') }}">
                    <span class="pasToggl">
                       <iconify-icon icon="ion:eye-off-outline" width="25" height="25"
                       style="color: #000"></iconify-icon>
                     </span>
                     @error('password')
                     <span class="error" role="alert">{{ $message }}</span>
                 @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center checkbox">
                    <label for="checkboxSignIn" class="d-flex align-items-center">
                        <input type="checkbox" id="checkboxSignIn">
                        Remember me
                    </label>
                    <a href="#" class="text-end">Forget Password</a>
                </div>
                <button class="d-inline-block">Login</button>
                <p class="text-center">Don’t have an account?
                    <a href="{{ route('register') }}" class="RegisterBtn">Register</a>
                </p>
            </form>
        </div>
    </section>
    <!-- *Sign In End Here -->

@endsection
