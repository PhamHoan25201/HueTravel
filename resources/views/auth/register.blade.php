@extends('layouts.app')

@section('content')

<section class="login first grey">
    <div class="container">
        <div class="box-wrapper">				
            <div class="box box-border">
                <div class="box-body">
                    <h4>{{ __('Register') }}</h4>
                    <form method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>{{ __('Name') }}</label>
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="fw">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="fw">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary btn-block">{{ __('Register') }}</button>
                        </div>
                        <div class="form-group text-center">
                            <span class="text-muted">Already have an account?</span> <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>   
@endsection