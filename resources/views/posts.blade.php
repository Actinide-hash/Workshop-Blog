@extends('app')

@section('title', 'Posts')

@section('content')

    <h1>Latest Posts</h1>
    <p>{{$post->count}} posts were found. Create post <a href="{{url('/posts/create')}}">here</a></p>
    
    @foreach($posts as $post)
    <div class="post">

        @if($post->image)
            <img src="{{asset('storage/images/' . $post->image)}}"
        <h2>$post->title</h2>
        <img src="{{asset('storage/images/default.png')}}"/>
        <p>$post->content</p>
        <a href="{{url('/posts/' . $post->id)}}">Read more</a>
    </div>
    @endforeach

@endsection