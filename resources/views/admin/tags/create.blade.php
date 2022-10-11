@extends('layouts.master')

@section('title', 'Blog - Add Tag')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">

        <div class="card-header">
            <h4>Add Tags
                <a href="{{url('admin/add-tag')}}" class="btn btn-primary float-end">Add Tag</a>
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
           <form action="{{url('admin/add-tag')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Tag Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>

            <h4>Show Tags</h4>
            <div class="mb-3">
                <label for="">Meta Title</label>
                <input type="text" name="meta_title" class="form-control">
            </div>

            <h4>Status</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Save Tag</button>
                    </div>
                </div>
            </div>
           </form>
        </div>
    </div>
    </div>
@endsection
