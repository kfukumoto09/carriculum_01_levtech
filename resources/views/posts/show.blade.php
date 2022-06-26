
@extends('layouts.master')

<script type="text/javascript">
    function delete_confirm(){
    	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
    	if(window.confirm("CAUTION!\nAre you sure you want to completely delete this post? This action cannot be undo.")){
    		return true;
    		{{-- location.href = "/posts/{{ $post->id }}"; // example_confirm.html へジャンプ --}}
    	} else {
    	    return false;
    	}
    	// ************* 要改善！ Cancelのcancel状態になっていて誤解を招く **************************
    }
</script>

@section('title', 'MY BLOGGER')

@section('menu')
    <a href="/posts">Return</a><br>
    <a href="/posts/{{ $post->id }}/edit">Edit</a><br>
    
    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" 
     method="post" onsubmit="return delete_confirm()">
        @csrf
        @method('DELETE')
        <button type="submit">delete</a> 
    </form>
@endsection

@section('content')
    <h2 class="title_post">{{ $post->title }}</h2>
    <p class="body">{{ $post->body }}</p>
    <a href="">{{ $post->category->name }}</a>
@endsection

@section('footer')
    copyright 2020 tuyono. (Edited)
@endsection



{{--
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>{{ $post->title }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    
    <script type="text/javascript">
        <!--
        function delete_confirm(){
        	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
        	if(window.confirm("CAUTION!\nAre you sure you want to completely delete this post? This action cannot be undo.")){
        		return true;
        		{{-- location.href = "/posts/{{ $post->id }}"; // example_confirm.html へジャンプ
        	} else {
        	    return false;
        	}
        	// ************* 要改善！ Cancelのcancel状態になっていて誤解を招く **************************
        }
        // -->
    </script>
    
</head>

<body>
    <div class="container">
        <header>
            <div class="row">
                
                <div class="col-sm-6">
                    <h1>{{ $post->title }}</h1>
                </div>
                
                <div class="col-sm-6 align-right">
                    <a href="/posts">HOME</a><br>
                    <a href="/posts/{{ $post->id }}/edit">Edit</a><br>
                    
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" onsubmit="return delete_confirm()">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</a> 
                    </form>
                    
               </div>
                
            </div>
        </header>
    </div><!-- container1 -->

    <hr>

    
    <div class="conainer">
        
        <!-- $sorted = $posts->sortBy("updated_at"); -->
        
            <div class="container-md">
                
                <div class="text">
                    <p class="body">{{ $post->body }}</p>
                </div>
            </div>
    </div>
</body>
</html>
--}}