@extends('layouts.master')

@section('title', 'View Post')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Posts
                <a href="{{url('user/add-post')}}" class="btn btn-primary float-end">Add Post</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

           <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Tag Name</th>
                    <th>Post Name</th>
                    <th>State</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>@foreach ($item->tags as $tags)
                            {{$tags->meta_title}}
                        @endforeach</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->status == '1' ? 'Hidden':'Visible'}}</td>
                        <td>
                            <a href="{{url('user/post/'.$item->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('user/delete-post/'.$item->id)}}" class="btn btn-danger mx-2r">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
           </table>
        </div>
    </div>
    </div>
@endsection
