<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index (){
        $posts = Post::all();
        return view('post.index',["posts"=>$posts]);
    }

    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
