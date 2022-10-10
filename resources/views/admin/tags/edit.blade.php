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

            <form action="{{url('admin/update-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category</label>

                    <select name="category_id" required class="form-control" id="">
                        <option value="">-- Select Category --</option>
                       @foreach ($category as $cateItem)
                       <option value="{{$cateItem->id}}" {{$tags->id == $cateItem->tag_id ? 'selected':''}}>
                            {{$cateItem->name}}
                        </option>
                       @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Tag Name</label>
                    <input type="text" name="name" value="{{$tags->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$tags->slug}}" class="form-control">
                </div>

                <h4>Show Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{$tags->meta_title}}" class="form-control">
                </div>

                <h4>Status</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input name="navbar_status" type="checkbox" value="{{$tags->status == 1 ? 'checked': ''}}">
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
