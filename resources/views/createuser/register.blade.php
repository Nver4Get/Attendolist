@extends('main.createuser')
@section('login')
<div class="container" id="main">
    <div class="sign-up">
        <form action="/dashboard" method="post">
            @csrf
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>or use your email for registration</p>
            <input type="text" name="txt" placeholder="Name" required="">
            <input type="text" name="txt" placeholder="Username" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <button>Sign Up</button>
        </form>
    </div>
    <div class="sign-in">
        <form action="#">
            <h1>Sign In</h1>
            <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            <p>or use your account</p>
            <input type="text" name="txt" placeholder="Name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <a href="#">Forget your Password?</a>
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-left">
                <h1>WELCOME TO<br>ATTENDANCE<br>&<br>TODO LIST</h1>
                <p>If you already have an account, please log in.</p>
                <button id="signIn">SIGN IN</button>
            </div>
            <div class="overlay-right">
                <h1>WELCOME TO<br>ATTENDANCE<br>&<br>TODO LIST</h1>
                <p>This is used to fill in employee attendance <br> and is used to list your daily tasks while working.</p>
                <button id="signUp">SIGN UP</button>
            </div>
        </div>
    </div>
</div>

