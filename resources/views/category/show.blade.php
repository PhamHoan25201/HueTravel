@extends('layouts.admin')

@section('content')
<div class="page-title">
  <h3>Show Category</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
      <form >
          <div class="form-group">
          <label for="email">Tên thể loại</label>
              <input type="text" class="form-control" value="{{$category->name}}" name="name" >
          </div>
          <div class="form-group">
          <label for="pwd">Status:</label>
          <select name="status" id="" class="form-control" >
              <option value="1" <?php if($category->status==1) echo "selected"?>>Hiện</option>
              <option value="0"<?php if($category->status==0) echo "selected"?>>Ẩn</option>
          </select>
          </div>
      </form>
      </div>
  </div>
</div>

@endsection