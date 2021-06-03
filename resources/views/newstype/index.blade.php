@extends('layouts.admin')

{{$n = 1}} 
@section('content')
<div class="page-title">
  <h3>{{ trans('tpl.newstype.index.title') }}</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>#</th>
                          <th>{{ trans('tpl.newstype.index.name') }}</th>
                          <th>{{ trans('tpl.newstype.index.typecategory') }}</th>
                          <th>{{ trans('tpl.newstype.index.status') }}</th>
                      </tr>
                  </thead>               
               @foreach($listNewsType as $newstype)
                <tr>
                  <th>{{ increment() }}</th>
                  <td><a href="{{ route('newstype.show', $newstype->id) }}">{{ $newstype->name }}</a></td>
                  <td><a href="{{ route('newstype.show',$newstype->category->id) }}">{{ $newstype->category->name }}</a></td>
                  <td>{{ $newstype->status }}</td>
                  
                  <td><a href="{{ route('newstype.edit',$newstype->id) }}">{{ trans('tpl.newstype.index.edit') }}</a></td>
                  <td>
                  <form action="{{ route('newstype.destroy',$newstype->id )}}" method="POST">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-danger" value="{{ trans('tpl.newstype.index.delete') }}"/>
                  </form>
                  </td>
                </tr>
              @endforeach
          </table>
      </div>
  </div>
</div> 
@endsection