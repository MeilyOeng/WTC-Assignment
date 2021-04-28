@extends('layouts.app')

@section('content')
<div>
  <h1 class="bold"> Post</h1>
  @foreach ($posts as $post)
  <ul class="list-group ">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      {{$post->content}}
      <p class="text-primary">{{$post->category}}</p>
      <button class="btn btn-primary m-2"> Edit</button>
      <button class="btn btn-danger m-2"> Delete </button>
    </li>
  </ul>
  @endforeach
</div>

@endsection