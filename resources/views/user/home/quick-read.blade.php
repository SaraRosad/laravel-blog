
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
                            <!-- Slides -->
                                <a href="{{url('/user/home/show/'.$post->id)}}" class="article swiper-slide">
                                    <img src="{{asset('uploads/category/'.$category->image)}}" alt="" class="article-image">
                                    <div class="article-data-container">
                                        <div class="article-data">
                                            <span> {{date('d M Y', strtotime($post->created_at))}}</span>
                                            <span class="article-data-spacer"></span>
                                            <span>{{$category->status == '0' ? 'Visible': 'Disable'}}</span>
                                        </div>
                                        <h3 class="title article-title">{{$post->name}}</h3>
                                    </div>
                                </a>
                                <!--- /Slides --->
                            @endif
                        @endif
                    @endforeach
                @endforeach

            <!-- Navigation buttons -->
            <div class="swiper-button-prev swiper-controls"></div>
            <div class="swiper-button-next swiper-controls"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
