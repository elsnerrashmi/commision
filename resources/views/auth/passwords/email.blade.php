@extends('layouts.app')

@section('contents')
    <div class="registration">
        <div class="signin-form profile">
            <h2>{{ __('Reset Password') }}</h2>
            <div class="login-form">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <input id="email" type="email" placeholder="Email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                        <a class="btn btn-link" href="{{ route('login') }}">
                            {{ __('Back to Login') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
