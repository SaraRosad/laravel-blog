@extends('layouts.master')

@section('title', 'Blog Dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">

            <div class="my-2 p-2 bg-dark rounded">
                <h3>Posts</h3>
            </div>
            @foreach ($post as $posts )
            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-header"><h4>{{$posts->name}}</h4></div>
                    <div class="card-body">{{$posts->description}}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{url('admin/post/'.$posts->id)}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            @endforeach

        <div class="row">
            <div class="my-2 p-2 bg-dark rounded">
                <h3>Categories</h3>
            </div>
            @foreach ($category as $categories )
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>{{$categories->name}}</h4>
                        <i class="fas fa-chart-area me-1"></i>
                    </div>
                    <div class="card-body">
                        <img src="{{asset('uploads/category/'.$categories->image)}}" width="150">
                        <div class="my-2">
                            {{$categories->description}}
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{url('admin/edit-category/'.$categories->id)}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="row">
                <div class="my-2 p-2 bg-dark rounded">
                    <h3>Categories</h3>
                </div>
                @foreach ($category as $categories )
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>{{$categories->name}}</h4>
                            <i class="fas fa-chart-area me-1"></i>
                        </div>
                        <div class="card-body">
                            <img src="{{asset('uploads/category/'.$categories->image)}}" width="150">
                            <div class="my-2">
                                {{$categories->description}}
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('admin/edit-category/'.$categories->id)}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="my-2 p-2 bg-dark rounded">
                    <h3>Categories</h3>
                </div>
                @foreach ($tags as $tag )
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>{{_('#')}}{{$tag->name}}</h4>
                            <i class="fas fa-chart-area me-1"></i>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('admin/edit-tag/'.$tag->id)}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


</div>
@endsection
