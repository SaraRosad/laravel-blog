<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $postCount = Post::count();
        $categoryCount = Category::count();
        $tagCount = Tags::count();
     
        $post = Post::all();
        $category = Category::where('status', '0')->get()->all();
        $tags = Tags::where('status', '0')->get()->all();
        return view('admin.dashboard',
         compact('post',
          'category',
           'tags',
            'postCount',
             'categoryCount',
             'tagCount'));
    }
}
