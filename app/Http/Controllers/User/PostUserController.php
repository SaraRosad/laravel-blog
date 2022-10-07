<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function show($post_id){


        $post = Post::find($post_id);
        $category = Category::where(['status' => '0', 'id' => $post->category_id])->first();
        
        return view('user.home.show', compact('post', 'category'));
    }
}
