<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagFormRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

class TagsController extends Controller
{
    public function index(){
        $tags = Post::all();
        return view('admin.tags.index', compact('tags'));
    }

    public function create(){
        $tags = Tags::all();
        return view('admin.tags.create', compact('tags'));
    }
    public function store(TagFormRequest $request){
        $data = $request->validated();
        $tag = new Tags();
        $tag->name = $data['name'];
        $tag->meta_title = $data['meta_title'];
        $tag->slug = $data['slug'];
        $tag->status = $request->status ? true == '0': '1';
        $tag->created_by = Auth::user()->id;

        $tag->save();
        return redirect('admin/tags')->with('message', 'Tag Added Successfully');
    }
    public function edit($tag_id){
        $tag = Tags::find($tag_id);
        return view('admin.tag.edit', compact('tag', 'category'));
    }

    public function update(TagFormRequest $request, $tag_id)
    {
        $data = $request->validated();

        $tag = Post::find($tag_id);
        $tag->category_id = $data['category_id'];
        $tag->name = $data['name'];
        $tag->meta_title = $data['meta_title'];
        $tag->slug = $data['slug'];
        $tag->status = $request->status == true ? '1':'0';
        $tag->created_by = Auth::user()->id;

        $tag->update();
        return redirect('admin/tags')->with('message', 'Tag Updated Successfully');
    }
    public function destroy($tag_id)
    {
        $tag = Tags::find($tag_id);
        $tag->delete();
        return redirect('admin/tags')->with('message', 'Tag Deleted Successfully');
    }
}
