<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\storePostRequest; 

class PostController extends Controller
{
    function index () {
        $posts=Post::all();
        return view('posts.index',[ 'posts' => $posts]);
    }
        
    public function create()
    {
        return view('posts.create');
    }

    public function store(storePostRequest $request){
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id'=> $request->user()->id
        ]);
        return redirect()->route('posts.index');

    }
    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit',['post'=>$post]);
    }
    public function update($post,storePostRequest $request){
         //return $post;
    
            //$post->update(request()->all());
            $post = Post::find($post);
            $post->title =request()->title;
            $post->slug = request()->title;
            $post->description =request()->description;
            $post->save();
            return redirect()->route('posts.index');
    }

    public function show($post){
         $post = Post::find($post);
       return view('posts.show',['post'=>$post]);

    }
    public function destroy($post){
        Post::find($post)->delete();
        return redirect()->route('posts.index');
    }


}
