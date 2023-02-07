<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $str = 'my string for test';
        dump($str);

        $post=Post::find(1);
        /*dd($post->likes);*/
        dd($post);

        
    }
}
