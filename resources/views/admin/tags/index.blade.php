@extends('layouts.master')

@section('title', 'Blog - View Tags')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Tags
                <a href="{{url('admin/add-tag')}}" class="btn btn-primary float-end">Add Tags</a>
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
                    <th>Name</th>
                    <th>Meta Title</th>
                    <th>State</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->meta_title}}</td>
                        <td>{{$item->status == '1' ? 'Hidden':'Visible'}}</td>
                        <td>
                            <a href="{{url('admin/tags/'.$item->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('admin/delete-tag/'.$item->id)}}" class="btn btn-danger mx-2r">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
           </table>
        </div>
    </div>
    </div>
@endsection
