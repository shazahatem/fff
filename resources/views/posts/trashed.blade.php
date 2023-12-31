@extends('layouts.app')

@section('content')




<div class="container">
  <div class="row">
    <div class="col">
      <div class="jumbotron">
  <h1 class="display-4"> Trashed posts</h1>
  <a  class="btn btn-success" href="{{route('posts')}}">all posts</a>
    <a  class="btn btn-success" href="{{route('posts.trashed')}}">trashed</a>
</div>
    </div>
  </div>
  <div class="row">

    @if($posts->count()>0)
    <div class="col">
      <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">User</th>
        <th scope="col">Photo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
     $i=0;
      @endphp
      @foreach($posts as $item)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->user->name}}</td>
        <td>
        <img src="{{URL::asset($item->photo)}}" alt="{{$item->photo}}" class="img-tumbnail" width="100" height="100">


        </td>

        <td>

          <a href="{{route('post.restore',$item->id)}}">Restore</a>
         <a href="{{route('post.hdelete',$item->id)}}">Hard Delete</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>


    </div>
    @else
    <div class="alert alert-danger" role="alert">
  No Posts!
</div>
@endif
  </div>
</div>



@endsection
