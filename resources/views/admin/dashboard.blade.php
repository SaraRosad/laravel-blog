@extends('layouts.master')

@section('title', 'Blog Dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row sparkboxes mt-4">
        {{--  <div class="col-md-3">
        <div class="box box1">
            <div class="details">
            <h3>1213</h3>
            <h4>CLICKS</h4>
            </div>
            <div id="spark1"></div>
        </div>
        </div> --}}
        <div class="col-md-3">
        <div class="box box2">
            <div class="details">
            <h3 id="sumPost">{{$postCount}}</h3>
            <h4>POSTS</h4>
            </div>
            <div id="spark2"></div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="box box3">
            <div class="details">
            <h3 id="sumCategory">{{$categoryCount}}</h3>
            <h4>CATEGORIES</h4>
            </div>
            <div id="spark3"></div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="box box4">
            <div class="details">
            <h3 id="sumTag">{{$tagCount}}</h3>
            <h4>TAGS</h4>
            </div>
            <div id="spark4"></div>
        </div>
        </div>
    </div>

   {{--  <div class="row mt-4">
        <div class="col-md-5">
        <div class="box shadow mt-4">
            <div id="radialBarBottom"></div>
        </div>
        </div>
        <div class="col-md-7">
        <div class="box shadow mt-4">
            <div id="line-adwords" class=""></div>
        </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-5">
        <div class="box shadow mt-4">
            <div id="barchart"></div>
        </div>
        </div>
        <div class="col-md-7">
        <div class="box shadow mt-4">
            <div id="areachart"></div>
        </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-5">
            <div class="box radialbox mt-4">
                <div id="circlechart"></div>
            </div>
        </div>
        {{-- <div class="col-md-7">
            <div class="box mt-4">
            <div class="mt-4">
                <div id="progress1"></div>
            </div>
            <div class="mt-4">
                <div id="progress2"></div>
            </div>
            <div class="mt-4">
                <div id="progress3"></div>
            </div>
            </div>
        </div> --}}
        </div>
    </div>
@endsection
