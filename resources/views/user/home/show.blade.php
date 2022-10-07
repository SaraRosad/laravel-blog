@extends('layouts.user-app')

@section('title', 'HOME blog')

@section('content')

<section class="featured-articles section section-header-offset">

    <div class="featured-articles-container container d-flex">

        <div class="featured-content d-grid">

            <div class="headline-banner">
                <h3 class="headline fancy-border">
                    <span class="place-items-center">Breaking news</span>
                </h3>
                <span class="headline-description">Apple announces a new partnership...</span>
            </div>

            <a href="#" class="article featured-article featured-article-1 mb-2">
                <img src="{{asset('uploads/category/'.$category->image)}}" alt="" class="article-image">

                <span class="article-category">{{$category->name}}</span>

                <div class="article-data-container">
                    <div class="article-data">
                        <span>{{$category->name}}</span>
                        <span class="article-data-spacer"></span>
                        <span>{{date('d M Y', strtotime($post->created_at))}}</span>
                    </div>
                    <h3 class="title article-title">{{$category->name}}</h3>
                </div>
            </a>

    </div>
    </div>
</section>
@endsection
