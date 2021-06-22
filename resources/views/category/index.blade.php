
@extends('layouts.admin')

@section('content')
<div class="page-title">
  <h3>{{ trans('tpl.category.index.title') }}</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>#</th>
                          <th>{{ trans('tpl.category.index.name') }}</th>
                          <th>{{ trans('tpl.category.index.status') }}</th>
                          <th>Action </th>
                      </tr>
                  </thead>
                  {{$i = 0}} 
               @foreach($listCategory as $category)
                <tr>

                  <th>{{ increment() }}</th>
                  <td><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></td>
                  <td>{{ $category->status }}</td>
                  
                  <td>
                    <a href="{{ route('category.edit',$category->id) }}">
                    <input type="submit" class="btn btn-info" value="{{ trans('tpl.news.index.edit') }}" style="margin-bottom: 5px"/>
                    </a>
                    <form action="{{ route('category.destroy',$category->id )}}" method="POST">
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