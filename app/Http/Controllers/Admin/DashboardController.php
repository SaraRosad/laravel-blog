<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $post = Post::all();
        $category = Category::all();
        return view('admin.dashboard', compact('post', 'category'));
    }
}
