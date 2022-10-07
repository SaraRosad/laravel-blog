@extends('layouts.master')

@section('title', 'Blog Dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Post</li>
    </ol>
    <div class="row">

    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="mt-4"> Edit Post
                <a href="{{url('admin/posts')}}" class="btn btn-danger float-end">BACK</a>
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

            <form action="{{url('admin/add-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category</label>

                    <select name="category_id" required class="form-control" id="">
                        <option value="">-- Select Category --</option>
                       @foreach ($category as $cateItem)
                       <option value="{{$cateItem->id}}" {{$post->category_id == $cateItem->id ? 'selected':''}}>
                            {{$cateItem->name}}
                        </option>
                       @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" value="{{$post->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$post->slug}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea type="text" name="description" class="form-control" rows="4">{!! $post->description !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input type="text" name="yt_iframe" value="{{$post->yt_iframe}}" class="form-control">
                </div>

                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{$post->meta_title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea type="text" name="meta_description" class="form-control" rows="3">{!! $post->meta_description !!}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keyword" rows="5" class="form-control">{!! $post->meta_keyword !!}</textarea>
                </div>
                <h4>Status</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input name="navbar_status" type="checkbox" value="{{$post->navbar_status == 1 ? 'checked': ''}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update post</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
