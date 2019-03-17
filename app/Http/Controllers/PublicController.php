<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;


class PublicController extends Controller
{
    public function index()
    {
        if(Auth::check() == false){
            return redirect('/login');
        } else {
           // $posts = Post::all();
            $posts = Post::orderBy('created_at','desc')->paginate(4);
            return view('welcome', compact('posts'));
        }        
    } 

    public function singlePost(Post $post)
    {
        // $comment = Comment::where('user_id', Auth::id())->pluck('id')->toArray();

        // $comments = Comment::whereIn('comment_id', $comment)->orderBy('created_at','desc')->paginate(4);

        

        $comments = Comment::where('post_id', $post->id)->orderBy('created_at','desc')->paginate(4);


        return view('singlePost', compact('post', 'comments'));
    }

    public function about()
    {
        return view('about');
    }
}
