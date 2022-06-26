
<style>
    .title {
        font-size: 14pt;
    }

    .body {
        font-weight: normal;
        color: #000;
        font-size: 12pt;
    }
</style>

<a href="/posts/{{ $post['id'] }}">
     <h3 class="title">{{ $post['title'] }}</h3o>
</a> <br>
<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
<p class="body">{{ $post['body'] }}</p>

