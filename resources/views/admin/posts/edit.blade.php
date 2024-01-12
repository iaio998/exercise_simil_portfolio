@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit: {{$post->title}}</h1>
    <form action="{{route('admin.posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                required maxlength="200" minlength="3" value="{{old('title', $post->title)}}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body">Body:</label>
            <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" cols="30" rows="10"
                value="{{old('body', $post->body)}}"></textarea>
            @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image URL:</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                maxlength="200" minlength="3" value="{{old('image', $post->image)}}">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection