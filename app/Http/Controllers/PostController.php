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

    public function create(){
        $postsArr = [
            [
                'title' => 'My title to insert from creat()',
                'content' => 'Test target: insert some content from code',
                'image' => 'image12.jpeg',
                'likes' => 123,
                'is_published' => 1
            ],
            [
                'title' => 'Ver2.0: My title to insert from creat()',
                'content' => 'Ver2.0: Test target: insert some content from code',
                'image' => 'Ver2.0: image12.jpeg',
                'likes' => 223,
                'is_published' => 1
            ]
        ];

        foreach ($postsArr as $item){
            Post::create($item);
        }

        /*
        Post::create([
            'title' => 'Ver2.0: My title to insert from creat()',
            'content' => 'Ver2.0: Test target: insert some content from code',
            'image' => 'Ver2.0: image12.jpeg',
            'likes' => 223,
            'is_published' => 1
        ]);
        */

        dd('created');
    }

    public function update(){
        $post = Post::find(6);
        #dd($post->title);

        $post->update([
            'title' => 'UPDATED_Ver2.0: My title to insert from creat()',
            'content' => 'UPDATED_Ver2.0: Test target: insert some content from code',
            'image' => 'UPDATED_Ver2.0: image12.jpeg',
            'likes' => 21,
            'is_published' => 1
        ]);
        DD('UPDATED');
    }

    public function delete(){
        /*#Usuwanie rekordu:
        $post = Post::find(4);
        $post->delete();        #Taki typ usuwania jest - nie załecany. Załecane usuwanie rekordów z możliwością ich przewrucenia -> SoftDelete
        */

        #Restore rekordu:
        $post = Post::withTrashed()->find(4);
        $post->restore();
        dd('restored');
    }

}
