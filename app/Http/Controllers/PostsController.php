<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class PostsController extends Controller
{
    public function index() {
        //$posts = Post::all();
        $posts = Post::orderBy("created_at")->get();
        return view('posts')->with('posts', $posts);
    }

    public function show($id) {
        $post = Post::find($id);
        return view('show')->with('post', $posts);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('image')->storeAs('public/images/', $fileNameToStore);

            //dd($filenameWithExt);
        }

        $post->image = $fileNameToStore;
        $post->save();

        return redirect('posts');
    }
}
