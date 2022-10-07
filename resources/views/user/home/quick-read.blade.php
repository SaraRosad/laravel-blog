
<!-- Quick read -->
<section class="quick-read section">

    <div class="container">

        <h2 class="title section-title" data-name="Quick read">Quick read</h2>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @foreach ($posts as $post)
                    @foreach ($categories as $category )
                        @if (!($category->id == $post->category_id))
                            @if ($category->status == '0')
                                <a href="#" class="article swiper-slide">
                                    <img src="{{asset('uploads/category/'.$category->image)}}" alt="" class="article-image">

                                    <div class="article-data-container">
                                        <div class="article-data">
                                            <span> {{date('d, M Y', strtotime($post->created_at))}}</span>
                                            <span class="article-data-spacer"></span>
                                            <span>{{$category->status == '0' ? 'Visible': 'Disable'}}</span>
                                        </div>
                                        <h3 class="title article-title">{{$post->name}}</h3>
                                    </div>
                                </a>
                            @endif
                        @endif<!-- Slides -->

                    @endforeach
                @endforeach

                <!-- Slides -->
                <a href="#" class="article swiper-slide">
                    <img src="{{asset('assets/images/quick_read/quick_read_2.jpg')}}" alt="" class="article-image">

                    <div class="article-data-container">
                        <div class="article-data">
                            <span>23 Dec 2021</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>
                        <h3 class="title article-title">Sample article title</h3>
                    </div>
                </a>
                <!-- Slides -->
                <a href="#" class="article swiper-slide">
                    <img src="{{asset('assets/images/quick_read/quick_read_3.jpg')}}" alt="" class="article-image">

                    <div class="article-data-container">
                        <div class="article-data">
                            <span>23 Dec 2021</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>
                        <h3 class="title article-title">Sample article title</h3>
                    </div>
                </a>
                <!-- Slides -->
                <a href="#" class="article swiper-slide">
                    <img src="{{asset('assets/images/quick_read/quick_read_4.jpg')}}" alt="" class="article-image">

                    <div class="article-data-container">
                        <div class="article-data">
                            <span>23 Dec 2021</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>
                        <h3 class="title article-title">Sample article title</h3>
                    </div>
                </a>
                <!-- Slides -->
                <a href="#" class="article swiper-slide">
                    <img src="{{asset('assets/images/quick_read/quick_read_5.jpg')}}" alt="" class="article-image">

                    <div class="article-data-container">
                        <div class="article-data">
                            <span>23 Dec 2021</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>
                        <h3 class="title article-title">Sample article title</h3>
                    </div>
                </a>
                <!-- Slides -->
                <a href="#" class="article swiper-slide">
                    <img src="{{asset('assets/images/quick_read/quick_read_6.jpg')}}" alt="" class="article-image">

                    <div class="article-data-container">
                        <div class="article-data">
                            <span>23 Dec 2021</span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>
                        <h3 class="title article-title">Sample article title</h3>
                    </div>
                </a>
            </div>
            <!-- Navigation buttons -->
            <div class="swiper-button-prev swiper-controls"></div>
            <div class="swiper-button-next swiper-controls"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
