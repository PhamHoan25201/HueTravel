@extends('layouts.admin')
@section('content')        
    <div class="page-title">
        <h3>Edit Category</h3>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-12">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('put') }}
                <div class="form-group">
                <label for="email">Tên thể loại</label>
                    <input type="text" class="form-control" value="{{$category->name}}" name="name" >
                </div>
                <div class="form-group">
                <label for="pwd">Status:</label>
                    <!--<input type="text" class="form-control" name="anhien">-->
                <select name="status" id="" class="form-control" >
                    <option value="1" <?php if($category->status==1) echo "selected"?>>Hiện</option>
                    <option value="0"<?php if($category->status==0) echo "selected"?>>Ẩn</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary btn-default">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection