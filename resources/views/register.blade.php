@extends('layouts.app')
@section('title', 'Register Free Account')
@section('data-page-id', 'auth')

@section('content')
    <div class="auth" id="auth">
        <section class="register_form">
            <div class="row">
                <div class="small-12 medium-7 medium-centered">
                    <h2 class="text-center"style="color: #000fff">Registration Form</h2>
                    <p>Please fill in this form to create an account.</p>
                    @include('includes.message')
                    <form action="/register" method="post">
                        <label for="fullname" class="fa fa-address-book icon" > FULL NAME</label>
                        <input type="text" name="fullname" placeholder="eg: John Doe"
                        value="{{ \App\Classes\Request::old('post', 'fullname') }}">
                        <label for="email" class="fa fa-envelope icon" > EMAIL ADDRESS</label>
                        <input type="text" name="email" placeholder="eg: youremail@example.com"
                               value="{{ \App\Classes\Request::old('post', 'email') }}">
                        <label for="username" class="fa fa-user-circle-o icon" > USERNAME</label>
                        <input type="text" name="username" placeholder="eg: username"
                               value="{{ \App\Classes\Request::old('post', 'username') }}">
                        <label for="password" class="fa fa-unlock-alt icon" > PASSWORD</label>
                        <input type="password" name="password" placeholder="eg: Password777">
                        <label for="address" class="fa fa-home icon" > ADDRESS</label>
                        <textarea name="address" placeholder="eg: Siem Reap, Cambodia">{{\App\Classes\Request::old('post', 'username')}}</textarea>
                        <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                        <button class="button float-right">Register</button>
                    </form>
                    <p>Already Registered? <a href="/login">Login Here</a> </p>
                </div>
            </div>
        </section>
    </div>
@stop