@extends('layouts.auth')
@section('container')


<div class="sign-up-container">
    <div class="sign-up-form">
        <h2>Get Started Now</h2>
        <div class="input-group">
            <label for="email">Email address</label>
            <input type="email" id="email" placeholder="Enter your email">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password">
        </div>
        <button class="sign-up-btn" onclick="window.location.href='{{ url('/home') }}'">Sign in</button>
        <div class="or-divider">
            <hr>
            <span style="margin-top: 3%;">Or</span>
            <hr>
        </div>
        <div class="additional-options">
            <button class="social-sign-up-btn google-btn">
                <img src="https://c.animaapp.com/X8dm0i6q/img/icons8-google-1-1.svg" alt="Google Logo">
                <span>Sign in with Google</span>
            </button>
            <button class="social-sign-up-btn apple-btn">
                <img src="https://c.animaapp.com/X8dm0i6q/img/icons8-apple-logo-1-1.svg" alt="Apple Logo">
                <span>Sign in with Apple</span>
            </button>
        </div>
        <div class="terms-agreement">
            <input type="checkbox" id="terms-agree">
            <label for="terms-agree">I agree to the terms & policy</label>
        </div>
        <div class="have-account">
            <p>Don't have an account? <a href="{{ url('/register') }}">Sign up</a></p>
        </div>        
        <div class="box">
            <div class="rectangle"></div>
        </div>
        <div class="image">
            <img class="eatways" src="images/eatways.png"/>
        </div>
        <div class="image">
            <img class="img10" src="images/image10.png" />
        <div>
            <div class="image">
                <img class="img9" src="images/image9.png" />
            <div>
    </div>
</div>
@endsection

  