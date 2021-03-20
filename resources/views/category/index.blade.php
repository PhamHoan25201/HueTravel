@extends('layouts.admin')

{{$n = 1}} 
@section('content')
<div class="page-title">
  <h3>Index Category</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>#</th>
                          <th>Name Category</th>
                          <th>Status</th>
                      </tr>
                  </thead>

               @foreach($listCategory as $category)
                <tr>
                  <th>{{ $n++ }}</th>
                  <td><a href="{{ route('category.show',['id' => $category->id]) }}">{{ $category->name }}</a></td>
                  <td>{{ $category->status }}</td>
                  
                  <td><a href="{{ route('category.edit',['id' => $category->id]) }}">Edit</a></td>
                  <td>
                  <form action="{{ route('category.destroy', ['id' => $category->id ])}}" method="POST">
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