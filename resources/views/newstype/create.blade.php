@extends('layouts.admin')

@section('content')

<div class="page-title">
    <h3>{{ trans('tpl.newstype.create.title') }}</h3>
</div>
<div class="section">
    <div class="row">
        <div class="col-12">
        <form action="{{ route('newstype.store') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
            <label for="email">{{ trans('tpl.newstype.create.name') }}:</label>
                <input type="text" class="form-control @if($errors->has('name')) name_error @endif" value="" name="name" >
                <i class="@if($errors->has('name')) name_error @endif"> 
                    @if($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif 
                </i>
            </div>

            <div class="form-group">
                <label for="pwd">{{ trans('tpl.newstype.create.nameCategory') }}:</label>
                <select name="category_id" id="" class="form-control" >
                    @foreach($listCategory as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
            <label for="pwd">{{ trans('tpl.newstype.create.status') }}:</label>
            <select name="status" id="" class="form-control" >
                <option value="1">{{ trans('tpl.newstype.index.status.show') }}</option>
                <option value="0">{{ trans('tpl.newstype.index.status.hidden') }}</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary btn-default">{{ trans('tpl.newstype.index.submit') }}</button>
        </form>
        </div>
    </div>
</div>
@endsection