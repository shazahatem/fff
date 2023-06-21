@extends('layouts.app')

@section('content')






<div class="container">
  <div class="row">
    <div class="col">
      <div class="jumbotron">
  <h1 class="display-4">create tag</h1>

<a  class="btn btn-success" href="{{route('tags')}}">all tags</a>
</div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">tag</label>
      <input type="text" name="tag" class="form-control"  >
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-danger"> save</button>
    </div>
  </form>
    </div>
  </div>




@endsection
