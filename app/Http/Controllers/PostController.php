<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Http\Requests\PostRequest;
//use Post;
use Illuminate\Http\Request;

use Illuminate\Validation\Validator;


class PostController extends Controller
{
    /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
    public function index() 
    {
        // return $post->get();
        $post = new Post;
        //$test = $post->getByLimit();
        //dd($test);
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
    
    public function create(Post $post, Category $category)
    {
        return view('posts/create')->with(['post'=>$post, 'categories'=>$category->get()]);
    }
    
    public function store(PostRequest $request, Post $post) 
    {
        // \DB::enableQueryLog();
        $input = $request['post'];
        $post->fill($input)->save(); //->toSql();
        //dd(\DB::getQueryLog());
        // $post->fill($input)->toSql(); //->save()->toSql;
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post, Category $category)
    {
        return view('posts/edit')->with(['post'=>$post, 'categories'=>$category->get()]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
    
    public function testIndex(Post $post) 
    {
        $data = [
            ['name'=>'Xi', 'mail'=>'xi@gmail.com'],
            ['name'=>'Biden', 'mail'=>'biden@gmail.com'],
            ['name'=>'Kishida', 'mail'=>'kishida@gmail.com']
        ];
        return view('test/test', ['data'=>$data]);
    }
    
    

    
}

?>