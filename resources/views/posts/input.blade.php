@extends('layouts.app')
@section('content')
        
    <h1>投稿ページ</h1>
    @if(Session::has('success'))
	    <div class="bg-info">
		    <p>{{ Session::get('success') }}</p>
	    </div>
    @endif
     
    <form action="/posts/create" method="POST">
        {{csrf_field()}}
        
    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @isset ($status)
      
    <div class="complete">
        <p>バリデーションを通過しました</p>
    </div>
    @endisset
           
        <p>タイトル</p> 
            <div class=title> 
                <input type='text' name ='title' >
            </div>
        
        <p>コンテンツ</p> 
            <div class=content> 
                <textarea type='text' name='content' rows="8" cols="40"></textarea>
            </div>
            <input type="submit" value="保存">
    </form>
       
    <h2>
        <a href="https://ed0c6c8bfbeb453c9ca7d6c05d56a31e.vfs.cloud9.ap-northeast-1.amazonaws.com/posts/">
           記事一覧
        </a>
    </h2>
      
       
    




