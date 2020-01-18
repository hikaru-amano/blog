<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment as CommentModel;

class CommentController extends Controller
{
    public function store(CommentModel $comment_model, Request $request)
    {
        $input_post = $request['comment'];
        $comment_model->create($input_post);
 
         return redirect()->action('PostController@show', $input_post['post_id']);
    }
    
}
