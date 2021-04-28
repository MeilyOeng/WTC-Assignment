@extends('layouts.app')

@section('content')
<div>
  <h1 class="bold"> Post</h1>
    <ul class="list-group ">
    @foreach ($posts as $post)
    <li class="list-group-item d-flex justify-content-between align-items-center">
      {{$post->content}}
      <p class="text-primary">{{$post->category}}</p>
      <a href="/post/{post}/edit"><button class="btn btn-primary m-2"> Edit</button></a>
      <button class="btn btn-danger m-2"> Delete </button>
    </li>
  
  @endforeach
</ul>
</div>

@endsection