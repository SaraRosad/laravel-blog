@extends('layouts.master')

@section('title', 'Blog - Edit Tag')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Tag</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tag</li>
    </ol>
    <div class="row">

    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="mt-4"> Edit Tag
                <a href="{{url('user/tags')}}" class="btn btn-danger float-end">BACK</a>
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

            <form action="{{url('user/tag/'.$tag->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Tag Name</label>
                    <input type="text" name="name" value="{{$tag->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$tag->slug}}" class="form-control">
                </div>

                <h4>Show Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{$tag->meta_title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">
                        Image
                    </label>
                    <input type="file" name="image"  class="form-control">
                    <div class="mt-2 d-flex"><img src="{{asset('uploads/category/'.$category->image)}}"  width="150px" height="150px"  alt="Img"> <div class="mx-2 mt-auto"><label for="">{{'/uploads/category/'.$category->image}}</label></div></div>

                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
                <h4>Status</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input name="navbar_status" type="checkbox" value="{{$tag->status == 1 ? 'checked': ''}}">
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
