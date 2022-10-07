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
            @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error )
                        <div>{{$error}}</div>
                    @endforeach
            </div>
            @endif
            <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">
                        Category Name
                    </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">
                        Slug
                    </label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">
                        Description
                    </label>
                    <textarea name="description" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">
                        Image
                    </label>
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for="">
                        Meta Title
                    </label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">
                        Meta Description
                    </label>
                    <textarea name="meta_description" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">
                        Meta Keywords
                    </label>
                    <textarea name="meta_keyword" rows="5" class="form-control"></textarea>
                </div>
                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">
                            Navbar Status
                        </label>
                        <input name="navbar_status" type="checkbox">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">
                            Status
                        </label>
                        <input name="status" type="checkbox">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
