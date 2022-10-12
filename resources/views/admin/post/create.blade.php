@extends('layouts.master')

@section('title', 'Add Post')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">

        <div class="card-header">
            <h4>Add Posts
                <a href="{{url('user/add-post')}}" class="btn btn-primary float-end">Add Post</a>
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">

                    @foreach ($errors->all() as $error )
                        <div>{{$error}}</div>
                    @endforeach

            </div>
            @endif
           <form action="{{url('user/add-post')}}" method="POST" id="add-form">
            @csrf
            <div class="mb-3">
                <label class="mb-1" for="">Category</label>
                <select name="category_id" class="form-control" id="">
                    <option value="">-- Select Category --</option>
                   @foreach ($category as $cateItem)
                   <option id="category" value="{{$cateItem->id}}">
                    {{$cateItem->name}}
                </option>
                   @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="mb-1" for="">Tags</label>
                <div class="d-flex">
                <select name="tag_id" class="form-control" style="width:50% !important; margin-right:2rem;" id="">
                    <option value="">-- Select Tag --</option>
                   @foreach ($tag as $tagItem)
                   <option id="tagval" value="{{$tagItem->id}}">
                    {{$tagItem->name}}
                </option>
                   @endforeach
                </select>
                <button id="btntag" class="float-left btn btn-primary">Add Tag</button>
            </div>
            </div>
            <div class="mb-3" id="output"></div>
            <div class="mb-3">
                <label class="mb-1" for="">Post Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="mb-1" for="">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>
            <div class="mb-3">
                <label class="mb-1" for="">Description</label>
                <textarea type="text" name="description" class="form-control" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label class="mb-1" for="">Youtube Iframe Link</label>
                <input type="text" name="yt_iframe" class="form-control">
            </div>

            <h4>SEO Tags</h4>
            <div class="mb-3">
                <label class="mb-1" for="">Meta Title</label>
                <input type="text" name="meta_title" class="form-control">
            </div>
            <div class="mb-3">
                <label class="mb-1" for="">Meta Description</label>
                <textarea type="text" name="meta_description" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="mb-1" for="">Meta Keyword</label>
                <textarea type="text" name="meta_keyword" class="form-control" rows="3"></textarea>
            </div>
            <h4>Status</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="mb-1" for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Save Post</button>
                    </div>
                </div>
            </div>
           </form>
        </div>
    </div>
    </div>
@endsection
