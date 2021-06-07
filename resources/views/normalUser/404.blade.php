@extends('layouts.app')

@section('content')

    <section class="not-found">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="code">
                        404
                    </div>
                    <h1>Page could not be found</h1>
                    <p class="lead">The page you are looking for is not available please check the url you are going to.</p>
                    <div class="search-form">														
                        <div class="link">
                            <a href="{{ route('home') }}"> {{ __('Back to Home') }}</a> or
                            <a href="{{ route('admin.home') }}">{{ __('Back to Admin') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection