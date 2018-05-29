@extends('layouts.app')
@section('contents')
    <div class="registration">
        <div class="signin-form profile">
            <h2>{{ __('Reset Password') }}</h2>
            <div class="login-form">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input id="email" placeholder="Email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                        <input id="password" placeholder="New Password"  type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation"
                               required>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
