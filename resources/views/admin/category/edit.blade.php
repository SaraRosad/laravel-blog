@extends('layouts.master')

@section('title', 'Blog Dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4"> Add Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Category</li>
    </ol>
    <div class="row">

    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="mt-4"> Add Category</h4>
        </div>
        <div class="card-body">
            <div class="alert alert-danger">
                @if ($errors->any())
                    @foreach ($errors->all() as $error )
                        <div>{{$error}}</div>
                    @endforeach
                @endif
            </div>

            <form action="{{url('user/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">
                        Category Name
                    </label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">
                        Slug
                    </label>
                    <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">
                        Description
                    </label>
                    <textarea name="description" rows="5" class="form-control">{!!$category->description!!}</textarea>
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
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for="">
                        Meta Title
                    </label>
                    <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">
                        Meta Description
                    </label>
                    <textarea name="meta_description" rows="5" class="form-control">{!!$category->meta_description!!} </textarea>
                </div>
                <div class="mb-3">
                    <label for="">
                        Meta Keywords
                    </label>
                    <textarea name="meta_keyword" rows="5" class="form-control">{!!$category->meta_keyword!!}</textarea>
                </div>
                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">
                            Navbar Status
                        </label>
                        <input name="navbar_status" type="checkbox" value="{{$category->navbar_status == 1 ? 'checked': ''}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">
                            Status
                        </label>
                        <input name="status" type="checkbox" value="{{$category->status == 1 ? 'checked' : ''}}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
