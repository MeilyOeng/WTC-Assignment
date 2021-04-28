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
        return view('edit', ['posts'=>$posts]);
    }
    public function createPost(){
        return view('createPost');
    }
}
