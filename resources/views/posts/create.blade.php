@extends('layouts.app')

@section('content')






<div class="container">
  <div class="row">
    <div class="col">
      <div class="jumbotron">
  <h1 class="display-4">create post</h1>

<a  class="btn btn-success" href="{{route('posts')}}">all posts</a>
</div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">title</label>
      <input type="text" name="title" class="form-control"  >
    </div>

    <div class="form-group">
      @foreach($tags as $item)
<input type="checkbox" name="tags[]"  value="{{$item->id}}" >
<label for="">{{$item->tag}}</label>
      @endforeach

    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">content</label>
      <textarea class="form-control" name="content" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">photo</label>
      <input type="file" class="form-control" name="photo" >
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-danger"> save</button>
    </div>
  </form>
    </div>
  </div>




@endsection
