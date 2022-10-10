<!-- Older posts -->
<section class="older-posts section">

    <div class="container">

        <h2 class="title section-title" data-name="Older posts">Older posts</h2>

        <div class="older-posts-grid-wrapper d-grid">
            @foreach ($categories as $category)
                @foreach ($posts as $post)
                        @if($post->category_id == $category->id )
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="{{asset('uploads/category/'.$category->image)}}" alt="" class="article-image">
                        </div>

                        <div class="article-data-container">

                            <div class="article-data">
                                <span>{{date('d M Y', strtotime($category->created_at))}}</span>
                                <span class="article-data-spacer"></span>
                                <span>3 Min read</span>
                            </div>

                            <h3 class="title article-title">{{$post->name}}</h3>
                            <p class="article-description" style="">{{$post->description}}</p>

                        </div>
                    </a>
                    @endif
                @endforeach
            @endforeach

        <div class="see-more-container">
            <a href="#" class="btn see-more-btn place-items-center">See more <i class="ri-arrow-right-s-line"></i></i></a>
        </div>

    </div>

</section>
