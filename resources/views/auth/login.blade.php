@extends('layouts.app')

@section('contents')
    <div class="registration">
        <div class="signin-form profile">
            <h2>{{ __('Login') }}</h2>
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           value="{{ old('email') }}" required autofocus placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <input id="password" placeholder="Password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                           required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <div class="tp">
                        <input type="submit">

                        </input>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>

                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection
