@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>{{ trans('tpl.news.edit.title') }}</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form action="{{ route('news.update',  $news->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('put') }}
                <div class="form-group">
                <label for="email">{{ trans('tpl.news.edit.name') }}:</label>
                    <input type="text" class="form-control" value="{{$news->tieu_de}}" name="tieu_de" >
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('tpl.news.edit.summary') }}:</label>
                        <input type="text" class="form-control" value="{{$news->tom_tat}}" name="tom_tat" >
                    </div>

                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.create.namenewstype') }}:</label>
                    <select name="news_type_id" id="" class="form-control" >
                        @foreach($listNewsType as $newstype)
                        <option value="{{$newstype->id}}" @if($newstype->id==$news->news_type_id){{"selected"}}@endif >{{$newstype->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="pwd">{{ trans('tpl.news.index.author') }}:</label>
                    <select name="user_id" id="" class="form-control" >
                        @foreach($listUser as $user)
                        <option value="{{$user->id}}" @if($user->id==$news->user_id){{"selected"}}@endif >{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-default">{{ trans('tpl.news.index.submit') }}</button>
            </form>
            </div>
        </div>
    </div>
@endsection