<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index (){
        $posts = Post::all()->sortByDesc("created_at");
        return view('post.index',["posts"=>$posts]);
    }

    public function post(Request $request){

        $post = new Post;
        $form = $request->all();
        unset($form['_token']);
        $post->fill($form)->save();

        return redirect('index');
    }

    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
