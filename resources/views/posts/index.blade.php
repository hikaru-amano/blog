@extends('layouts.app')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            記事一覧
        </h1>
        <h2><a href="/posts/create">投稿ページへ</a></h2>
        <div class="content">
            <div>
            @foreach ($posts as $post)
              <h3>{{ $post->title }}</h3>
              <p>{{$post->id}}</br>{{ $post->body }} </p>
              <p><a href="/posts/{{$post->id}}/edit">編集</a></p>
              <form action="/posts/{{$post->id}}/delete" method="POST">
                {{csrf_field()}}
                <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick="return deletePost(this);"></form>
                <script>
                function deletePost(e) {
                  
                var result = window.confirm('削除しますか？');
                console.log(result);
                    if (result) {
                        console.log('ai');
                        return true;
                        
                    } else {
                        console.log('ueo');
                        return false;}
                    }
                    
                </script>
            @endforeach
            {{ $posts->links() }}
        </div>
    </body>
</html>