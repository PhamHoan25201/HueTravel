@extends('layouts.admin')

{{$n = 1}} 
@section('content')
<div class="page-title">
  <h3>Index News Type</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>#</th>
                          <th>Name NewsType</th>
                          <th>Type Category</th>
                          <th>Status</th>
                      </tr>
                  </thead>

               @foreach($listNewsType as $newstype)
                <tr>
                  <th>{{ $n++ }}</th>
                  <td><a href="{{ route('newstype.show',['id' => $newstype->id]) }}">{{ $newstype->name }}</a></td>
                  <td><a href="{{ route('newstype.show',['id' => $newstype->category_id]) }}">{{ $newstype->category_id }}</a></td>
                  <td>{{ $newstype->status }}</td>
                  
                  <td><a href="{{ route('newstype.edit',['id' => $newstype->id]) }}">Edit</a></td>
                  <td>
                  <form action="{{ route('newstype.destroy', ['id' => $newstype->id ])}}" method="POST">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                  </form>
                  </td>
                </tr>
              @endforeach
          </table>
      </div>
  </div>
</div> 
@endsection