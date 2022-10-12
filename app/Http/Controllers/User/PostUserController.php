<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function show($post_id){
        $post = Post::find($post_id);
        $category = Category::where(['status' => '0', 'id' => $post->category_id])->first();
        $tags = Tags::where(['status' => '0'])->first();
        $tagsRamdon = Tags::inRandomOrder()->limit(5)->get();
        $tagsCount =  Tags::count();
        return view('user.home.show', compact('post', 'category', 'tags', 'tagsCount'));
    }
}
