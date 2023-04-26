@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Posts</h1>
</div>

<form method="POST" action="/dashboard/posts/{{$post->slug}}" class="mb-5">
  @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title',$post->title)}}" required autofocus>
      @error('title') 
        <div class="invalid-feedback">
          {{$message}}  
        </div> 
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug',$post->slug)}}">
      @error('slug') 
        <div class="invalid-feedback">
          {{$message}}  
        </div> 
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
          @if(old('category_id',$post->category->id) == $category->id)
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
          @else
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body" value="{{old('body',$post->body)}}">
      <trix-editor input="body"></trix-editor>
      @error('body') 
      <p class="text-danger">
        {{$message}}  
      </p> 
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
</form>

<script>
  const title = document.querySelector('#title');
  const slugs = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dasboard/posts/checkSlug?title='+title.value+'')
    .then(response => response.json())
    .then(data => slugs.value = data.slug)
    // console.log(data.slug);
  })

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })
</script>

@endsection()