@extends('app')

@section('title', $post->title)

@section('content')

    <div class="content">
        <h1>{{$post->title}}</h1>
        <img src="{{asset('storage/images/default.png')}}"/>
        <p>$post->content</p>
    </div>

@endsection