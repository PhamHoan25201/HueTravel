@extends('layouts.admin')

@section('content')

<div class="page-title">
    <h3>{{ trans('tpl.category.create.title') }}</h3>
</div>
<div class="section">
    <div class="row">
        <div class="col-12">
            {{--Một cách validation:
                 @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{$error}}</li> 
                        @endforeach
                    </ul>
                </div>
            @endif            --}}
        <form action="{{ route('category.store') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
            <label for="email">{{ trans('tpl.category.create.name') }}:</label>
                <input type="text" class="form-control @if($errors->has('name')) name_error @endif" value="" name="name" >
               <i class="@if($errors->has('name')) name_error @endif"> 
                    @if($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif 
                </i>
            </div>
            <div class="form-group">
            <label for="pwd">{{ trans('tpl.category.create.status') }}:</label>
            <select name="status" id="" class="form-control" >
                <option value="1">{{ trans('tpl.category.index.status.show') }}</option>
                <option value="0">{{ trans('tpl.category.index.status.hidden') }}</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary btn-default">{{ trans('tpl.newstype.index.submit') }}</button>
        </form>
        </div>
    </div>
</div>

@endsection