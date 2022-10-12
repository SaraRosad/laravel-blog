@extends('layouts.master')

@section('title', 'Blog Dashboard')
@section('content')
<div class="container-fluid p-4">
   <div class="card">
    <div class="card-header">
        <h4 class="mt-4">View Category <a href="{{url('user/add-category')}}" class="btn btn-primary btn-sm float-end">Add Category</a></h4>
    </div>
    <div class="card-body">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <img src="{{ asset('uploads/category/'.$item->image) }}"  width="50px" height="50px" alt="Img">
                    </td>
                    <td>{{$item->status == '1' ? 'Hidden':'Show'}}</td>
                    <td>
                        <a href="{{url('user/edit-category/'.$item->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('user/delete-category/'.$item->id)}}" class="btn btn-danger mx-2r">Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
    <div class="row">

    </div>
</div>
@endsection
