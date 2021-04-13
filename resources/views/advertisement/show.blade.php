@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.advertisement.show.title') }}</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form >
              {{ csrf_field() }}
              {{ method_field('put') }}

              <div class="form-group">
                <label for="email">{{ trans('tpl.advertisement.create.url1') }}:</label>
                    <input type="text" class="form-control @if($errors->has('url_img1')) name_error @endif" value="{{$advertisement->url_img1}}" name="url_img1" >
                   <i class="@if($errors->has('url_img1')) name_error @endif"> 
                        @if($errors->has('url_img1'))
                            {{ $errors->first('url_img1') }}
                        @endif 
                    </i>
                </div>
    
                <div class="form-group">
                    <label for="email">{{ trans('tpl.advertisement.create.url2') }}:</label>
                        <input type="text" class="form-control @if($errors->has('url_img2')) name_error @endif" value="{{$advertisement->url_img2}}" name="url_img2" >
                       <i class="@if($errors->has('url_img2')) name_error @endif"> 
                            @if($errors->has('url_img2'))
                                {{ $errors->first('url_img2') }}
                            @endif 
                        </i>
                </div>
    
                <div class="form-group">
                    <label for="email">{{ trans('tpl.advertisement.create.startdate') }}:</label>
                        <input type="date" class="form-control" value="{{$advertisement->start_date}}" name="start_date" >
                </div>
    
                <div class="form-group">
                    <label for="email">{{ trans('tpl.advertisement.create.enddate') }}:</label>
                        <input type="date" class="form-control" value="{{$advertisement->end_date}}" name="end_date" >
                </div>
    
                <div class="form-group">
                    <label for="email">{{ trans('tpl.advertisement.create.description') }}:</label>
                        <input type="text" class="form-control @if($errors->has('url_img1')) name_error @endif" value="{{$advertisement->description}}" name="description" >
                       <i class="@if($errors->has('description')) name_error @endif"> 
                            @if($errors->has('description'))
                                {{ $errors->first('description') }}
                            @endif 
                        </i>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection