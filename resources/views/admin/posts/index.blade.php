@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>Index</h1>
        <button class="btn btn-success"><a href="{{route('admin.posts.create')}}">Create new</a></button>
        @foreach($posts as $post)
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
        </div>
        @endforeach
    </div>
</div>
@endsection