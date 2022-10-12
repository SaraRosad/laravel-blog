<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Http\Requests\Admin\TagFormRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
    public function create(){
        $category = Category::where('status', '0')->get();
        $tag = Tags::where('status', '0')->get();
        return view('admin.post.create', compact('category', 'tag'));
    }
    public function store(PostFormRequest $request, TagFormRequest $requestTag){

        $data = $request->validated();
        $tags = new Tags();
        $post = new Post();
        $tags->posts()->attach($requestTag->id);
        $post->tags()->attach($request->id);
        dd($tags, $post);
        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->slug = $data['slug'];
        $post->description = $data['description'];
        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request->status == true ? '1':'0';
        $post->created_by = Auth::user()->id;


        $post->save();
        return redirect('user/posts')->with('message', 'Post Added Successfully');


    }
    public function edit($post_id){
        $category = Category::where('status', '0')->get();
        $post = Post::find($post_id);
        $tag = Tags::all();
        return view('admin.post.edit', compact('post', 'category', 'tag'));
    }

    public function update(PostFormRequest $request, $post_id)
    {
        $data = $request->validated();
        $post = Post::find($post_id);
        $tags = new Tags();
        $tags->posts()->sync($request->input('id'));
        $post->tags()->sync($request->id);
        dd($tags, $post);
        $post->category_id = $data['category_id'];
        $post->tags()->sync($request->input('id'));
        $post->name = $data['name'];
        $post->slug = $data['slug'];
        $post->description = $data['description'];
        $post->yt_iframe = $data['yt_iframe'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request->status == true ? '1':'0';
        $post->created_by =Auth::user()->id;

        $post->update();
        return redirect('user/posts')->with('message', 'Post Updated Successfully');
    }
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->tags()->detach();
        $post->delete();
        return redirect('user/posts')->with('message', 'Post Deleted Successfully');
    }
}
