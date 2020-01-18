<!doctype html>
 <html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
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
             {{ $post->title }}
         </h1>
         <div class="content">
             <div class="content__post">
                 <h3>本文</h3>
                 <p>{{ $post->body }}</p>    
             </div>
         </div>
         <div class= "content_comment_title">
             <h4>コメント一覧</h4>
         </div>
         <div class="content_comment_view">
             @foreach ($post->comments as $comment)
                 <div class="content_comment_view_name">
                     <p>名前</p>    
                         <p>{{ $comment->name }}</p>
                     <p>コメント</p>
                         <p>{{ $comment->comment }}</p>
                 </div>
             @endforeach
         </div>
         <div class="comment_suru">
             <h4>コメントする</h4>
         </div>
         <div class="input_comment">
             <form action="/posts/{{ $post->id }}/comment" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="comment[post_id]" value="{{ $post->id }}">
                 <div class=name>
                         <p>名前</p>
                             <input type='text' name='comment[name]'>
                 </div>
                 <div class=comment>
                         <p>コメント</p>
                             <textarea type='text' name='comment[comment]'></textarea>
                 </div>
                 <input type="submit" value="コメントする">
             </form>
         </div>    
         <div class="footer">
             <a href="/posts">戻る</a>
         </div>
     </body>