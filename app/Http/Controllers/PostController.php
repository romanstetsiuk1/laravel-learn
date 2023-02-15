<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        /*
        $str = 'my string for test';
        dump($str);

        $post=Post::find(1);    #Pobranie wszystkich kolumn wpisu z Id=1
        #dd($post->likes);      #Wyświtlanie kolumny [likes]
        dd($post);
        
        #Pobranie wszystkich rekordów z tabeli 
        $posts=Post::all();
        dd($posts);
        
        #Wyświtlenie columny [title] dla wszystkich postów
        $posts=Post::all();
        foreach ($posts as $post){
            dump($post->title);
        }
        dd('Koniec programu :)');
        */
        #Wyświtlenie columny [title] dla wszystkich postów gdzie [is_published]=1
        $posts=Post::where('is_published',1)->get();    #->first();  --zwraca tylko pierwszy
        foreach ($posts as $post){
            dump($post->title);
        }
        dd('Koniec programu :)');
        
    }
}
