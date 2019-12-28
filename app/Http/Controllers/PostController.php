<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as PostModel;



class PostController extends Controller
{
     /**
      * post一覧を表示する
      * 
      * @param Object PostModel
      * @return array posts
      *
      *
     **/
   
    public function index(PostModel $post_model)
    {
        return view('posts/index')->with(['posts' => $post_model->get()]);
    }
   
    public function input()
    {
        return view('posts/input');
    }

     
     /**
 * 新ブログポストの保存
 *
 * @param  Request  $request
 * @return Responvese
 */
    public function store(Request $request)
    {
        $rules = [
        
        'title' => 'required|max:40',
        'content' => 'required|max:4000',
    ];
        
        $messages = array(
		'title.required' => 'タイトルを正しく入力してください。',
		'content.required' => '本文を正しく入力してください。',
		);

        $request->validate($rules, $messages);
        
        if ($request->validate($rules)) {
            $post = new PostModel;
            $post->title = $request->input('title');
            $post->body = $request->input('content');
            $post->save();
        
        return Redirect('posts/create')
			->with('success', '投稿が完了しました。');
	    } else {
		        return Redirect('posts/create')
		        ->withErrors(validate($rules))
			    ->withInput();
        
        return view('posts/create', ['status' => true]);
        }      
        
    }
       
    public function show()
    {
        return view('posts.edit');
    }
        
    public function edit($id)
    {
        $post = PostModel::find($id);
        return view ('posts.edit')->with(['post' => $post]);
    }

    public function update(Request $request)
    { 
        $post = PostModel::find($request->id);
        $post->title = $request->title;
        $post->body = $request->content;
        $post->save();
        return Redirect('/posts')
        ->with('success', '更新されました。');
	}
        
        
    public function delete($id)
    {
        $post = PostModel::find($id);
        $post->delete();
        
        return Redirect('/posts');
    }
     
}
         