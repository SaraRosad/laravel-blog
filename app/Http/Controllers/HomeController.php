<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tags::where(['status' => '0'])->get();
        $tagsRamdon = Tags::inRandomOrder()->limit(5)->get();
        $tagsCount =  Tags::count();

        return view('user.home.index', compact('posts', 'categories', 'tags','tagsCount'));
    }
}
