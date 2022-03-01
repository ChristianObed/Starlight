@extends('layout')

@section('title', 'Sign Up for an Account')

@section('content')

<style>
body {
  background-image: url('/ecommerce-example/public/img/logback.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;  
}
</style> 

<div class="container">
    <div class="auth-pages">
        <div>
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2>Create Account</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                <input id="passwo
                rd" type="password" class="form-control" name="password" placeholder="Password" placeholder="Password" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                    required>

                


                <div class="login-container">
                    <button type="submit" class="auth-button">Buat akun</button>
                    <div class="already-have-container">
                    <p><strong>Sudah Punya akun ?</strong></p>
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
            <h2>Pelangan baru</h2>
            <div class="spacer"></div>
            <p><strong>Buatlah akun anda sekarang.</strong></p>
            <p>Dengan Membuat akun maka anda dapat melakukan checkout dan melihat Status pemesanan </p>

            &nbsp;
            
    </div> <!-- end auth-pages -->
</div>
@endsection
