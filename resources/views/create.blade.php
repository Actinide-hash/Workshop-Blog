@extends('app')

@section('title', 'Posts')

@section('content')

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="control-group">
            <label for="title">Post Title</label>
            <input type="text" id="title" name="title" placeholer="Please enter something" value="{{old('title')}}">
        </div>
        <div class="control-group">
            <label for="image">Post Image</label>
            <input type="file" id="image" name="image" placeholer="Please enter something">
        </div>
        <div class="control-group">
            <label for="content">Post Content</label>
            <textarea id="content" name="content" placeholer="Please enter something" rows="20"></textarea>
        </div>
        <div class="control-group">
            <button type="submit">Create Post</button>
        </div>
    </form>

@endsection