@extends('layouts.app')

@section('title','page title')

@section('content')

<body>
    <h1>編集画面</h1>
    <form action="{{url('/posts/update',$post->id)}}" method="POST">
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
    
    <div class=title>タイトル-
        <input type='text' name='title' value='{{$post->title}}'>
        @method('PUT')
   </div>
   
   <div class=content>コンテンツ-
       <input type='text' name='content' value='{{$post->body}}'>
       @method('PUT')
    </div>
    
    <input type="submit" value="更新">
        
        
        
        
        
        
        
    </form>
    
        
        
    </div>
    
    
    
    
    
</body>
