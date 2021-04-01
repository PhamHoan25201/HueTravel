@extends('layouts.admin')

@section('content')
<div class="page-title">
  <h3>{{ trans('tpl.category.show.title') }}</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
      <form >
          <div class="form-group">
          <label for="email">{{ trans('tpl.category.index.name') }}:</label>
              <input type="text" class="form-control" value="{{$category->name}}" name="name" >
          </div>
          <div class="form-group">
          <label for="pwd">{{ trans('tpl.category.index.status') }}:</label>
          <select name="status" id="" class="form-control" >
            <option value="1" @if($category->status==1){{"selected"}}@endif>{{ trans('tpl.newstype.index.status.show') }}</option>
            <option value="0" @if($category->status==0){{"selected"}}@endif>{{ trans('tpl.newstype.index.status.hidden') }}</option>
          </select>
          </div>
      </form>
      </div>
  </div>
</div>

@endsection