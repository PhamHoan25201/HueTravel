@extends('layouts.admin')

{{$n = 1}} 
@section('content')
<div class="page-title">
  <h3>{{ trans('tpl.news.index.title') }}</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="9" style="border:1px solid #DFE3E7">
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
                          <th>Action </th>
                      </tr>
                  </thead>               
               @foreach($listNews as $news)
                <tr>
                  <th>{{ increment() }}</th>
                  <td style="max-width: 200px"><a href="{{ route('news.show', $news->id) }}">{{ substr($news->tieu_de,0,20) }}</a></td>
                  <td><a href="{{ route('news.show',$news->newstype->id) }}">{{  substr($news->newstype->name,0,20)}}</a></td>
                  <td><a href="{{ route('news.show',$news->User->id) }}">{{ $news->User->name }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ substr($news->tom_tat,0,20) }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{  substr($news->noi_dung,0,20) }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}"><img src="/image/{{$news->url_img}}" alt="{{$news->url_img}}" width="300px"></a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ $news->so_lan_xem }}</a></td>
                  <td><a href="{{ route('news.show',$news->id) }}">{{ $news->tin_noi_bat }}</a></td> 
                  <td><a href="{{ route('news.show',$news->id) }}">{{ $news->so_luot_like }}</a></td>
                  <td>
                    <a href="{{ route('news.edit',$news->id) }}">
                    <input type="submit" class="btn btn-info" value="{{ trans('tpl.news.index.edit') }}" style="margin-bottom: 5px"/>
                    </a>
                    <form action="{{ route('news.destroy',$news->id )}}" method="POST">
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      <input type="submit" class="btn btn-danger" value="{{ trans('tpl.news.index.delete') }}"/>
                    </form><br>
                  </td>
                  
                </tr>
              @endforeach
          </table>
      </div>
  </div>
</div> 
@endsection