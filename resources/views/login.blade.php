@extends('layouts.app_student')

@section('content')

<div class="container">
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{asset('asset_db_student/images/icon/logo.png')}}" alt="CoolAdmin">
                </a>
            </div>
            <div class="login-form">
                <form action="{{route('login.get_access')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="text" name="id" placeholder="Email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="remember">Remember Me
                        </label>
                        <label>
                            <!-- <a href="#">Forgotten Password?</a> -->
                        </label>
                    </div>
                    <div class="login">
                        <button class="login_btn" type="submit" >login</button>
                    </div>
                    <!-- <div class="social-login-content">
                        <div class="login">
                            <a class="facebook_btn" href="index.html">login with facebook</a>
                        </div>
                    </div> -->
                </form>
                <div class="register-link">
                    <p>
                        Don't you have account?
                        <a href="{{route('register')}}">Sign Up Here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop