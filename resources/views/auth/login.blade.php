@extends('layouts.app')

@section('content')

<h2>{{ __('Login') }}</h2>


<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">{{ __('Email address') }}:</label><br>
    <input id="email" type="email" class="input-email{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus><br>

    @if ($errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </span><br>
    @endif

    <label for="password">{{ __('Password') }}:</label><br>
    <input id="password" type="password" class="input-password{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required><br>

    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span><br>
    @endif

    <label for="remember-me">{{ __('Remember me') }}</label>
    <input id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><br>

    <button type="submit">
        {{ __('Login') }}
    </button><br>

    <a style="padding-top: 2rem; display: inline-block;" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
</form>

@endsection
