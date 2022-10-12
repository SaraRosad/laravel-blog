
<!-- Popular tags -->
<section class="popular-tags section">

    <div class="container">
        <h2 class="title section-title" data-name="Popular tags">Popular tags</h2>
        <div class="popular-tags-container d-grid">
            @foreach ($tags as $tag)
                <a href="{{asset('/uploads/tags/'.$tag->image)}}" class="article">
                    <span class="tag-name">{{$tag->meta_title}}</span>
                    <img src="{{asset('/uploads/tags/'.$tag->image)}}" alt="" class="article-image">
                </a>
            @endforeach
        </div>
    </div>
</section>
