@extends('layouts.admin')

@section('content')

<div class="page-title">
    <h3>{{ trans('tpl.category.create.title') }}</h3>
</div>
<div class="section">
    <div class="row">
        <div class="col-12">
        <form action="{{ route('category.store') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
            <label for="email">{{ trans('tpl.category.create.name') }}:</label>
                <input type="text" class="form-control" value="" name="name" >
            </div>
            <div class="form-group">
            <label for="pwd">{{ trans('tpl.category.create.status') }}:</label>
            <select name="status" id="" class="form-control" >
                <option value="1">{{ trans('tpl.category.create.status.show') }}</option>
                <option value="0">Ẩn</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary btn-default">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection