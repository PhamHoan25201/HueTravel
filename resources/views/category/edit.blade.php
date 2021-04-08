@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.category.edit.title') }}</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form action="{{ route('category.update',  $category->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('put') }}
                <div class="form-group">
                <label for="email">{{ trans('tpl.category.edit.name') }}:</label>
                    <input type="text" class="form-control @if($errors->has('name')) name_error @endif" value="{{$category->name}}" name="name" >
                    <i class="@if($errors->has('name')) name_error @endif"> 
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif 
                    </i>
                </div>
                <div class="form-group">
                <label for="pwd">{{ trans('tpl.category.edit.status') }}:</label>
                    <!--<input type="text" class="form-control" name="anhien">-->
                <select name="status" id="" class="form-control" >
                    <option value="1" @if($category->status==1){{"selected"}}@endif>{{ trans('tpl.category.index.status.show') }}</option>
                    <option value="0" @if($category->status==0){{"selected"}}@endif>{{ trans('tpl.category.index.status.hidden') }}</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary btn-default">{{ trans('tpl.newstype.index.submit') }}</button>
            </form>
            </div>
        </div>
    </div>
@endsection