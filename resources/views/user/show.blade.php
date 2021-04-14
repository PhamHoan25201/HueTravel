@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.user.show.title') }}</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form>
              {{ csrf_field() }}
              {{ method_field('put') }}

              <div class="form-group">
                <label for="email">{{ trans('tpl.user.edit.name') }}:</label>
                    <input type="text" class="form-control @if($errors->has('name')) name_error @endif" value="{{$user->name}}" name="name" >
                   <i class="@if($errors->has('name')) name_error @endif"> 
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif 
                    </i>
                </div>
    
                <div class="form-group">
                    <label for="email">{{ trans('tpl.user.edit.email') }}:</label>
                        <input type="text" class="form-control @if($errors->has('email')) name_error @endif" value="{{$user->email}}" name="email" >
                       <i class="@if($errors->has('email')) name_error @endif"> 
                            @if($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif 
                        </i>
                </div>
    
                <div class="form-group">
                    <label for="email">{{ trans('tpl.user.edit.password') }}:</label>
                        <input type="text" class="form-control" value="{{$user->password}}" name="password" >
                </div>
    
                <div class="form-group">
                    <label for="email">{{ trans('tpl.user.edit.url_img') }}:</label>
                        <input type="text" class="form-control @if($errors->has('url_img')) name_error @endif" value="{{$user->url_img}}" name="url_img" >
                       <i class="@if($errors->has('url_img')) name_error @endif"> 
                            @if($errors->has('url_img'))
                                {{ $errors->first('url_img') }}
                            @endif 
                        </i>
                </div>
    
                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.user.edit.sex') }}:</label>
                        <!--<input type="text" class="form-control" name="anhien">-->
                    <select name="status" id="" class="form-control" >
                        <option value="1" @if($user->gioi_tinh==1){{"selected"}}@endif>{{ trans('tpl.user.index.sex.male') }}</option>
                        <option value="0" @if($user->gioi_tinh==0){{"selected"}}@endif>{{ trans('tpl.user.index.sex.female') }}</option>
                    </select>
                </div>
    
                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.user.edit.is_admin') }}:</label>
                        <!--<input type="text" class="form-control" name="anhien">-->
                    <select name="status" id="" class="form-control" >
                        <option value="1" @if($user->is_admin==1){{"selected"}}@endif>{{ trans('tpl.user.index.is_admin.admin') }}</option>
                        <option value="0" @if($user->is_admin==0){{"selected"}}@endif>{{ trans('tpl.user.index.is_admin.normaluser') }}</option>
                    </select>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection