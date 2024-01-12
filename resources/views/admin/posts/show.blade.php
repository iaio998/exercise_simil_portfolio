@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Show</h1>
    <button class="btn btn-success"><a href="{{route('admin.posts.edit', $post)}}">Edit</a></button>
    <div class="col-4 col-md-4 text-center g-2">
        <div class="img-cont">
            <img src="{{ $post->image }}" alt="{{$post->title}}">
        </div>
        <div class="">
            <h2 class="fs-4">
                {{ $post->title }}
            </h2>
            <p>Description: {{ $post->body }}</p>
            <a class="btn btn-primary" href="{{route('admin.posts.show', $post)}}">Show more</a>
        </div>
        <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection