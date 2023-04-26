@extends('dashboard.layouts.main')


@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-8">
            <h1>{{$post->title}}</h1>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning gap-2  justify-content-md-end" style="text-decoration: none"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" title="Delete" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($post->image)            
                <div style="max-height: 350px; overflow:hidden">
                    {{-- <img src="/storage/{{$post->image}}" alt="{{$post->category->name}}" class="img-fluid mt-3"> --}}
                    <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
            @endif
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            
        </div>
        <div class="d-grid gap-2 col-md-8 justify-content-md-end">
            <a href="/dashboard/posts" class="btn btn-primary gap-2  justify-content-md-end"><span data-feather="arrow-left"></span> Back to all posts</a>
        </div>
    </div>
</div>
@endsection()