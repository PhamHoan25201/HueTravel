@extends('layouts.admin')

{{$n = 1}} 
@section('content')
<div class="page-title">
  <h3>{{ trans('tpl.user.index.title') }}</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>#</th>
                          <th>{{ trans('tpl.user.index.name') }}</th>
                          <th>{{ trans('tpl.user.index.email') }}</th>
                          <th>{{ trans('tpl.user.index.url_img') }}</th>
                          <th>{{ trans('tpl.user.index.ngaysinh') }}</th>
                          <th>{{ trans('tpl.user.index.sex') }}</th>
                          <th>{{ trans('tpl.user.index.is_admin') }}</th>
                          <th>Action</th>
                          
                      </tr>
                  </thead>

               @foreach($listUser as $user)
                <tr>
                  <th>{{ increment() }}</th>
                  <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
                  <td><a href="{{ route('user.show', $user->id) }}">{{ $user->email }}</a></td>
                  <td><a href="{{ route('user.show', $user->id) }}">{{ $user->url_img }}</a></td>
                  <td><a href="{{ route('user.show', $user->id) }}">{{ $user->ngay_sinh }}</a></td>
                  <td><a href="{{ route('user.show', $user->id) }}">{{ $user->gioi_tinh }}</a></td>
                  <td><a href="{{ route('user.show', $user->id) }}">{{ $user->is_admin }}</a></td>
                  
                  <td>
                    <a href="{{ route('user.edit',$user->id) }}">
                    <input type="submit" class="btn btn-info" value="{{ trans('tpl.news.index.edit') }}" style="margin-bottom: 5px"/>
                    </a>
                    <form action="{{ route('user.destroy',$user->id )}}" method="POST">
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