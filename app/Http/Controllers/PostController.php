<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post){
        return view('layouts.blog-post',['post' => $post]);
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store(){
        $inputs = request()->validate([
            'title' => 'required|max:255',
            'post_image' => 'file',
            'body' => 'required',
        ]);
        if(request('post_image')){
            $inputs['post_image'] = request('post_image')->store('images');
        }
        // dd($inputs);
        auth()->user()->posts()->create($inputs);
        return back();
        // return view('admin.posts.create');
    }

    public function index(){
        // $posts = Post::all();
        // $posts = auth()->user()->posts(); //Esto muestra es la relacion que existe y permite hacer cosas como queries y demas
        $posts = auth()->user()->posts; //Aqui esta trayendo los posts asociados al usuario, que es lo que queremos.
        return view('admin.posts.index',['posts' => $posts]);
    }
}
