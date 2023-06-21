
@extends('layouts.app')

@section('content')






<div class="container">
  <div class="row">
    <div class="col">
      <div class="jumbotron">
  <h1 class="display-4">update post</h1>

<a  class="btn btn-success" href="{{route('posts')}}">all posts</a>
</div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">title</label>
      <input type="text" name="title" value="{{$post->title}}" class="form-control"  >
    </div>


        <div class="form-group">
          @foreach($tags as $item)
    <input type="checkbox" name="tags[]"  value="{{$item->id}}"
   @foreach ($post->tag as $item2)
   @if($item->id==$item2->id)
   checked
   @endif
   @endforeach
     >
    <label for="">{{$item->tag}}</label>
          @endforeach

        </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">content</label>
      <textarea class="form-control" name="content"   rows="3">
     {!! $post->content !!}
      </textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">photo</label>
      <input type="file" class="form-control" name="photo" >
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-danger"> update</button>
    </div>
  </form>
    </div>
  </div>




@endsection
