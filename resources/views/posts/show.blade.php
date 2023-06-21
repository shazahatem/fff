

@extends('layouts.app')

@section('content')






<div class="container">
  <div class="row">
    <div class="col">




      <div class="card" style="width: 44rem;">
    <img src="{{URL::asset($post->photo)}}" class="card-img-top" alt="{{URL::asset($post->photo)}}">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->content}}</p>


            @foreach($tags as $item)
    
      <label for="">{{$item->tag}}</label>
            @endforeach

      <p class="card-text"> Updated at: {{$post->updated_at}}</p>
      <p class="card-text"> Created at: {{$post->create_at}}</p>
    <a  class="btn btn-success" href="{{route('posts')}}">all posts</a>
    </div>
  </div>
    </div>
    </div>
  </div>




@endsection
