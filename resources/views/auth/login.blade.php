@extends('layout')

@section('title', 'Login')

<style>
body {
  background-image: url('/ecommerce-example/public/img/logback.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;  
}

</style>

@section('content')
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
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
            <h2>Login</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Login</button>
                </div>

                <div class="spacer"></div>

            </form>
        </div>

    <div class="auth-right">
            &nbsp;
            <div class="spacer"></div>
            <p><strong>Belum punya akun?</strong></p>
            <p>Untuk berbelanja dibutuhkan akun,buatlah akun dengan mengklik tombol dibawah ini.</p>
            <div class="spacer"></div>
            <a href="{{ route('register') }}" class="auth-button-hollow">Buat akun</a>

        </div>
    </div>
</div>
@endsection
