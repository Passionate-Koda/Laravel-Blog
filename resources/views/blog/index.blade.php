@extends('blog.layout.main')
@extends('blog.layout.postview')





@section('posts')
  @foreach($posts as $post)
  <div class="blog-post">
    <h2 class="blog-post-title">
      <a href="/posts/{{ $post->id}}">{{ $post->title }}</a>
    </h2>
    <p class="blog-post-meta">{{ $post->created_at -> diffForHumans() }}<a href="#">{{$post->author}}</a></p>

    @endforeach


@stop
