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
}

?>