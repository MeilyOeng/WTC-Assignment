<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){

    $posts = Post::all();       
    return view('post', ['posts'=>$posts]);
    }
    public function edit(Post $post){
        return view('home', ['post'=>$post]);
    }
    public function createPost(){
        return view('createPost');
    }
    public function store(){
        request()->validate([
            'content' => 'required',
            'category'=> 'required'
        ]);
        Post::create([
            'content' => request('content'),
            'category' => request('category')
        ]);
        return redirect('post');
    }
}
