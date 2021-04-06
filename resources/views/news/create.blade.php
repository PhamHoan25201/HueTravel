@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.news.create.title') }}</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form action="{{ route('news.store') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                <label for="email">{{ trans('tpl.news.edit.name') }}:</label>
                    <input type="text" class="form-control" value="" name="tieu_de" >
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('tpl.news.edit.summary') }}:</label>
                        <input type="text" class="form-control" value="" name="tom_tat" >
                    </div>

                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.create.namenewstype') }}:</label>
                    <select name="news_type_id" id="" class="form-control" >
                        @foreach($listNewsType as $newstype)
                        <option value="{{$newstype->id}}" >{{$newstype->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.index.author') }}:</label>
                    <select name="user_id" id="" class="form-control" >
                        @foreach($listUser as $user)
                        <option value="{{$user->id}}" >{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-default">{{ trans('tpl.news.index.submit') }}</button>
            </form>
            </div>
        </div>
    </div>
@endsection