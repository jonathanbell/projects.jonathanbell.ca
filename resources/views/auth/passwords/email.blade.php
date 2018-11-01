@extends('layouts.app')

@section('content')

    <h2>{{ __('Reset Password') }}</h2>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">{{ __('Email address') }}:</label>
        <input id="email" type="email" class="input-email{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="hacker@pleasedont.com" name="email" value="{{ old('email') }}" required><br>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span><br>
        @endif

        <button type="submit">
            {{ __('Send that reset!') }}
        </button>
    </form>

@endsection
