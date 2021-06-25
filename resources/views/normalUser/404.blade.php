@extends('layouts.app')

@section('content')

    <section class="not-found">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="code">
                        404
                    </div>
                    <h1>Trang bạn tìm kiếm không tồn tại</h1>
                    <p class="lead">Vui lòng kiểm tra URL và nhập lại!!!</p>
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