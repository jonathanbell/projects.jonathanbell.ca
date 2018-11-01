@extends('layouts.app')

@section('content')

    <h2>{{ __('Reset Password') }}</h2>

    <form method="POST" action="{{ route('password.request') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <label for="email">{{ __('Email address') }}:</label>
        <input id="email" type="email" class="input-email{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus><br>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span><br>
        @endif

        <label for="password">{{ __('Password') }}:</label>
        <input id="password" type="password" class="input-password{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required><br>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span><br>
        @endif

        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="input-password{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required><br>

        @if ($errors->has('password_confirmation'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span><br>
        @endif

        <button type="submit">
            {{ __('Reset Password') }}
        </button>
    </form>

@endsection
