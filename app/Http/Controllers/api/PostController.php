<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\storePostRequest;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index(){
        return PostResource ::collection(Post::with('User')->paginate(2));
    }
    public function show($id){
        $post = Post::find($id);
      return new PostResource ($post);

   }
  
public function store(storePostRequest $request){

    Post::create([
        'title' => request()->title,
        'description' => request()->description,
        'user_id'=> request() -> user() ->id
    ]);
    return response()->json(['successful']);

}
}
