
@extends('layouts.master')

@section('title', 'MY BLOGGER')

@section('menu')
    <a href="/posts">Return</a><br>
@endsection

@section('content')
    
    <h2>{{ $category->name }}</h2>
    
    <div class="container-md">
        @each('components.indexed_post_by_category', $posts, 'post')
    </div>
    {{ $posts -> links() }}
@endsection

@section('footer')
    copyright 2020 tuyono. (Edited)
@endsection