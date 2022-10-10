 <!-- Featured articles -->
 <section class="featured-articles section section-header-offset">

    <div class="featured-articles-container container d-grid">

        <div class="featured-content d-grid">

            <div class="headline-banner">
                <h3 class="headline fancy-border">
                    <span class="place-items-center">Breaking news</span>
                </h3>
                <span class="headline-description">Apple announces a new partnership...</span>
            </div>

            <a href="./post.html" class="article featured-article featured-article-1">
                <img src="{{asset('assets/images/featured/featured-1.jpg')}}" alt="" class="article-image">
                <span class="article-category">Technology</span>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>Dec 5th 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>8 Min read</span>
                    </div>

                    <h3 class="title article-title">Is VR the future?</h3>

                </div>
            </a>

            <a href="./post.html" class="article featured-article featured-article-2">
                <img src="{{asset('assets/images/featured/featured-2.jpg')}}" alt="" class="article-image">
                <span class="article-category">Food</span>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>Dec 6th 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>4 Min read</span>
                    </div>

                    <h3 class="title article-title">Fine dining 101</h3>

                </div>
            </a>

            <a href="./post.html" class="article featured-article featured-article-3">
                <img src="{{asset('assets/images/featured/featured-3.jpg')}}" alt="" class="article-image">
                <span class="article-category">Health</span>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>Dec 5th 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>5 Min read</span>
                    </div>

                    <h3 class="title article-title">Natural fat burner</h3>

                </div>
            </a>

        </div>

        <div class="sidebar d-grid">

            <h3 class="title featured-content-title">Trending news</h3>
                @foreach ($categories as $category)
                    @foreach ($posts as $post )
                    <!--Show only values that has a trending value 1 to 5 -->
                            @if ($post->category_id === $category->id)
                            <!-- Trending News Sidebar -->
                                <a href="#" class="trending-news-box">
                                    <div class="trending-news-img-box">
                                        <span class="trending-number place-items-center">{{$post->id}}</span>
                                        <img src="{{asset('uploads/category/'.$category->image)}}" alt="" class="article-image">
                                    </div>

                                    <div class="trending-news-data">

                                        <div class="article-data">
                                            <span>{{date('d M Y', strtotime($post->created_at))}}</span>
                                            <span class="article-data-spacer"></span>
                                            <span>3 Min read</span>
                                        </div>

                                        <h3 class="title article-title">{{$post->name}}</h3>

                                    </div>
                                </a>
                            @endif
                    @endforeach
                @endforeach
        </div>

    </div>

</section>
