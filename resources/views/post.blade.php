@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p>By <a href="/post?author={{ $post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/post?category={{$post->category->slug }}" class="text-decoration-none">{{$post->category->name}}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">
            
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            
        </div>
        <div class="d-grid gap-2 col-md-8 justify-content-md-end">
            <a href="/post" class="btn btn-primary gap-2  justify-content-md-end">back to all Post</a>
          </div>
    </div>
</div>



@endsection