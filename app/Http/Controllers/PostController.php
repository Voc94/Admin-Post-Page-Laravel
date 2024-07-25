<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post){
        return view('blog-post',['post'=>$post]);
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store(Request $request){
    $inputs = $request->validate([
        'type' => 'required|min:8|max:255',
        'post_image' => 'file',
        'body' => 'required'
    ]);

    if ($request->file('post_image')) {
        $inputs['post_image'] = $request->file('post_image')->store('images');
    }

    auth()->user()->posts()->create($inputs);

    return back()->with('message', 'Post created successfully!');
}
}
