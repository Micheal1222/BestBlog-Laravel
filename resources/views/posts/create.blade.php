@extends('layouts.master');
@section("content");
<div class="col-md-9 offset"></div>
<h3>Create Post form</h3>

<form action="/posts" method="POST">
  @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
     
    </div>
</div>
<div class="form-group">
  <label for="body">Enter Post</label>
  <textarea class="form-control" cols="30" row="5" id="body"></textarea>
</div>
    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection