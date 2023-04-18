@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/post/">
            @if(request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{request('author')}}">
        @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
                <button class="input-group-text btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3 text-center">
        <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h3 class="card-title"><a href="/post/{{$posts[0]["slug"]}}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-body-secondary">
            By <a href="/post?author={{ $posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in <a href="/post?category={{$posts[0]->category->slug }}" class="text-decoration-none">{{$posts[0]->category->name}}</a>
            {{ $posts[0]->created_at->diffForHumans()}}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/post/{{$posts[0]["slug"]}}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
                    <a href="/post?category={{$post->category->slug }}" class="text-decoration-none text-white">
                    {{$post->category->name}}
                    </a>
                </div>
                <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                <div class="card-body">
                  <h5 class="card-title"><a href="/post/{{$post["slug"]}}" class="text-decoration-none">{{ $post["title"] }}</a></h5>
                  <p>
                    <small class="text-body-secondary">
                    By <a href="/post?author={{ $post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/post?category={{$post->category->slug }}" class="text-decoration-none">{{$post->category->name}}</a>
                    {{ $post->created_at->diffForHumans()}}
                    </small>
                </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/post/{{$post["slug"]}}" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No Post found.</p>    
@endif

<div class="d-flex justify-content-center">
    {{ $posts->links()}}
</div>

@endsection
{{-- Category::create([
    'name' => 'programming',
    'slug' => 'programming'
])

Post::create([
    'title' => 'Judul Kedua',
    'category_id' => 2,
    'slug' => 'judul-kedua',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia labore culpa',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi. Sint incidunt consequuntur ducimus facilis reiciendis quos blanditiis vel omnis, alias, doloremque nihil.</p><p> Enim, a officiis sunt dignissimos perspiciatis nobis repudiandae, nam unde cupiditate facere ratione. Illo, nihil reprehenderit mollitia laborum corrupti aperiam necessitatibus nemo vitae fugiat nulla repudiandae eum blanditiis provident, molestias, dignissimos praesentium? Voluptatem est magni rem nihil laudantium magnam unde excepturi, pariatur adipisci! Laboriosam?</p>'
]) --}}

