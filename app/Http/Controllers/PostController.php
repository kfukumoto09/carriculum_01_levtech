<?php

namespace App\Http\Controllers;

use App\Post;
//use Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
    public function index(Post $post) {
        // return $post->get();
        //return view('posts/index');
        //$test = $post->getByLimit();
        //dd($test);
        //return view('posts/index')->with(['posts' => $post->getByLimit()]);
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    /**
     * 1個のPostページを表示する
     * 
     * @param Post Postモデル
     * @return array Post
     */
    public function show(Post $post) {
        return view('posts/show')->with(['post' => $post]);
    }
    /*
    public function show($id, Post $post) {
        return view('posts/show')->with(['post' => $post->showPost()[$id]]);
    }
    */
}

?>