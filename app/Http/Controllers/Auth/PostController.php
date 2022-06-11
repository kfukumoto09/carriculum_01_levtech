<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class PostController extends Controller{
    /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
    public function index(Post $post){
        //$test = $post->getByLimit();
        //dd($test);
        //return view('posts/index')->with(['posts' => $post->getByLimit()]);
        return view('posts/index')->with(['posts'=>$post->getPaginateByLimit()]);
    }
    public function show(Post $post){
        return view('posts/show')->with(['post'=>$post]);
    }
    public function create(){
        return view('posts/create');
    }
}
?>