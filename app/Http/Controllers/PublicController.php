<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome');
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
