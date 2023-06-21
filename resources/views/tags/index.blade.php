@extends('layouts.app')

@section('content')




<div class="container">
  <div class="row">
    <div class="col">
      <div class="jumbotron">
  <h1 class="display-4"> all tags</h1>
  <a  class="btn btn-success" href="{{route('tag.create')}}">create</a>

</div>
    </div>
  </div>
  <div class="row">

    @if($tags->count()>0)
    <div class="col">
      <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tags</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
     $i=0;
      @endphp
      @foreach($tags as $item)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$item->tag}}</td>


        <td>


          <a href="{{route('tag.edit',$item->id)}}">Edit</a>
         <a href="{{route('tag.destroy',['id'=>$item->id])}}">Delete</a>
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
