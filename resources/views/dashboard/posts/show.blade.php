@extends('dashboard.layouts.main')


@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-8">
            <h1>{{$post->title}}</h1>
            <a href="/post" class="btn btn-warning gap-2  justify-content-md-end"><span data-feather="edit"></span> Edit</a>
            <a href="/post" class="btn btn-danger gap-2  justify-content-md-end"><span data-feather="delete"></span> Delete</a>
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            
        </div>
        <div class="d-grid gap-2 col-md-8 justify-content-md-end">
            <a href="/dashboard/posts" class="btn btn-primary gap-2  justify-content-md-end"><span data-feather="arrow-left"></span> back to my posts</a>
        </div>
    </div>
</div>
@endsection()