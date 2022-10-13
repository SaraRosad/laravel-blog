<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagFormRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Taggable;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TagsController extends Controller
{
    public function index(){
        $tags = Tags::all();
        return view('admin.tags.index', compact('tags'));
    }

    public function create(){
        $tags = Tags::all();
        $category = Category::where('status', '0')->get();
        return view('admin.tags.create', compact('tags', 'category'));
    }
    public function store(TagFormRequest $request){
        $data = $request->validated();
        $tag = new Tags();
        $tag->name = $data['name'];
        $tag->meta_title = $data['meta_title'];
        if(!File::exists(public_path()."/uploads/tags/$tag->image")){
            Storage::makeDirectory(public_path()."/uploads/tags");
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/tags/', $filename);
            $tag->image = $filename;
        }
        $tag->slug = $data['slug'];
        $tag->status = $request->status ? true == '0': '1';
        $tag->created_by = Auth::user()->id;

        $tag->save();
        return redirect('user/tag')->with('message', 'Tag Added Successfully');
    }
    public function edit($tag_id){
        $tag = Tags::find($tag_id);
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(TagFormRequest $request, $tag_id)
    {
        $data = $request->validated();

        $tag = Tags::find($tag_id);
        $tag->name = $data['name'];
        $tag->meta_title = $data['meta_title'];
        if($request->hasFile('image')){

            $destination = 'uploads/tags/'.$tag->image;

            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/tags/', $filename);
            $tag->image = $filename;
        }

        $tag->slug = $data['slug'];
        $tag->status = $request->status == true ? '1':'0';
        $tag->created_by = Auth::user()->id;

        $tag->update();
        return redirect('user/tag')->with('message', 'Tag Updated Successfully');
    }
    public function destroy($tag_id)
    {
        $tag = Tags::find($tag_id);
        $tag->delete();
        return redirect('user/tag')->with('message', 'Tag Deleted Successfully');
    }
}
