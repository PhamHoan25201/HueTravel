@extends('layouts.admin')

{{$n = 1}} 
@section('content')
<div class="page-title">
  <h3>{{ trans('tpl.news.index.title') }}</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>#</th>
                          <th>{{ trans('tpl.news.index.name') }}</th>
                          <th>{{ trans('tpl.news.index.typenewstype') }}</th>
                          <th>{{ trans('tpl.news.index.author') }}</th>
                          <th>{{ trans('tpl.news.index.summary') }}</th>
                          <th>{{ trans('tpl.news.index.content') }}</th>
                          <th>{{ trans('tpl.news.index.url') }}</th>
                          <th>{{ trans('tpl.news.index.views') }}</th>
                          <th>{{ trans('tpl.news.index.hot_news') }} </th>
                          <th>{{ trans('tpl.news.index.likes') }} </th>
                      </tr>
                  </thead>               
               @foreach($listNews as $news)
                <tr>
                  <th>{{ increment() }}</th>
                  <td><a href="{{ route('news.show', $news->id) }}">{{ $news->tieu_de }}</a></td>
                  <td><a href="{{ route('news.show',$news->newstype->id) }}">{{  substr($news->newstype->name,0,20)}}</a></td>
                  <td><a href="{{ route('news.show',$news->User->id) }}">{{ $news->User->name }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ substr($news->tom_tat,0,20) }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{  substr($news->noi_dung,0,20) }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ $news->url_img }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ $news->so_lan_xem }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ $news->tin_noi_bat }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ $news->so_luot_like }}</a></td>
                  <td><a href="{{ route('news.edit',$news->id) }}">{{ trans('tpl.news.index.edit') }}</a></td>
                  <td>
                    <form action="{{ route('news.destroy',$news->id )}}" method="POST">
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      <input type="submit" class="btn btn-danger" value="{{ trans('tpl.news.index.delete') }}"/>
                    </form>
                  </td>
                </tr>
              @endforeach
          </table>
      </div>
  </div>
</div> 
@endsection