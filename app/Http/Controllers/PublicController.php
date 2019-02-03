<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;


class PublicController extends Controller
{
    public function index()
    {
        if(Auth::check() == false){
            return redirect('/login');
        } else {
            $posts = Post::all();
            return view('welcome', compact('posts'));
        }        
    } 

    public function singlePost(Post $post)
    {
        return view('singlePost', compact('post'));
    }

    public function about()
    {
        return view('about');
    }
}
