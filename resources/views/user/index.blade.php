@extends('layouts.user-app')

@section('title', 'HOME blog')

@section('content')
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
                <img src="./assets/images/featured/featured-1.jpg" alt="" class="article-image">
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
                <img src="./assets/images/featured/featured-2.jpg" alt="" class="article-image">
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
                <img src="./assets/images/featured/featured-3.jpg" alt="" class="article-image">
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

            <a href="#" class="trending-news-box">
                <div class="trending-news-img-box">
                    <span class="trending-number place-items-center">01</span>
                    <img src="./assets/images/trending/trending_1.jpg" alt="" class="article-image">
                </div>

                <div class="trending-news-data">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>

                </div>
            </a>

            <a href="#" class="trending-news-box">
                <div class="trending-news-img-box">
                    <span class="trending-number place-items-center">02</span>
                    <img src="./assets/images/trending/trending_2.jpg" alt="" class="article-image">
                </div>

                <div class="trending-news-data">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>

                </div>
            </a>

            <a href="#" class="trending-news-box">
                <div class="trending-news-img-box">
                    <span class="trending-number place-items-center">03</span>
                    <img src="./assets/images/trending/trending_3.jpg" alt="" class="article-image">
                </div>

                <div class="trending-news-data">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>

                </div>
            </a>

            <a href="#" class="trending-news-box">
                <div class="trending-news-img-box">
                    <span class="trending-number place-items-center">04</span>
                    <img src="./assets/images/trending/trending_4.jpg" alt="" class="article-image">
                </div>

                <div class="trending-news-data">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>

                </div>
            </a>

            <a href="#" class="trending-news-box">
                <div class="trending-news-img-box">
                    <span class="trending-number place-items-center">05</span>
                    <img src="./assets/images/trending/trending_5.jpg" alt="" class="article-image">
                </div>

                <div class="trending-news-data">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>

                </div>
            </a>

        </div>

    </div>

</section>

<!-- Quick read -->
<section class="quick-read section">

    <div class="container">

        <h2 class="title section-title" data-name="Quick read">Quick read</h2>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <a href="#" class="article swiper-slide">
                    <img src="./assets/images/quick_read/quick_read_1.jpg" alt="" class="article-image">

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
                    <img src="./assets/images/quick_read/quick_read_2.jpg" alt="" class="article-image">

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
                    <img src="./assets/images/quick_read/quick_read_3.jpg" alt="" class="article-image">

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
                    <img src="./assets/images/quick_read/quick_read_4.jpg" alt="" class="article-image">

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
                    <img src="./assets/images/quick_read/quick_read_5.jpg" alt="" class="article-image">

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
                    <img src="./assets/images/quick_read/quick_read_6.jpg" alt="" class="article-image">

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

<!-- Older posts -->
<section class="older-posts section">

    <div class="container">

        <h2 class="title section-title" data-name="Older posts">Older posts</h2>

        <div class="older-posts-grid-wrapper d-grid">

            <a href="#" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                    <img src="./assets/images/older_posts/older_posts_1.jpg" alt="" class="article-image">
                </div>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>
                    <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                </div>
            </a>

            <a href="#" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                    <img src="./assets/images/older_posts/older_posts_2.jpg" alt="" class="article-image">
                </div>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>
                    <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                </div>
            </a>

            <a href="#" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                    <img src="./assets/images/older_posts/older_posts_3.jpg" alt="" class="article-image">
                </div>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>
                    <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                </div>
            </a>

            <a href="#" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                    <img src="./assets/images/older_posts/older_posts_4.jpg" alt="" class="article-image">
                </div>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>
                    <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                </div>
            </a>

            <a href="#" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                    <img src="./assets/images/older_posts/older_posts_5.jpg" alt="" class="article-image">
                </div>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>
                    <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                </div>
            </a>

            <a href="#" class="article d-grid">
                <div class="older-posts-article-image-wrapper">
                    <img src="./assets/images/older_posts/older_posts_6.jpg" alt="" class="article-image">
                </div>

                <div class="article-data-container">

                    <div class="article-data">
                        <span>23 Dec 2021</span>
                        <span class="article-data-spacer"></span>
                        <span>3 Min read</span>
                    </div>

                    <h3 class="title article-title">Sample article title</h3>
                    <p class="article-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique a tempore sapiente corporis, eaque fuga placeat odit voluptatibus.</p>

                </div>
            </a>

        </div>

        <div class="see-more-container">
            <a href="#" class="btn see-more-btn place-items-center">See more <i class="ri-arrow-right-s-line"></i></i></a>
        </div>

    </div>

</section>

<!-- Popular tags -->
<section class="popular-tags section">

    <div class="container">

        <h2 class="title section-title" data-name="Popular tags">Popular tags</h2>

        <div class="popular-tags-container d-grid">

            <a href="#" class="article">
                <span class="tag-name">#Travel</span>
                <img src="./assets/images/tags/travel-tag.jpg" alt="" class="article-image">
            </a>

            <a href="#" class="article">
                <span class="tag-name">#Food</span>
                <img src="./assets/images/tags/food-tag.jpg" alt="" class="article-image">
            </a>

            <a href="#" class="article">
                <span class="tag-name">#Technology</span>
                <img src="./assets/images/tags/technology-tag.jpg" alt="" class="article-image">
            </a>

            <a href="#" class="article">
                <span class="tag-name">#Health</span>
                <img src="./assets/images/tags/health-tag.jpg" alt="" class="article-image">
            </a>

            <a href="#" class="article">
                <span class="tag-name">#Nature</span>
                <img src="./assets/images/tags/nature-tag.jpg" alt="" class="article-image">
            </a>

            <a href="#" class="article">
                <span class="tag-name">#Fitness</span>
                <img src="./assets/images/tags/fitness-tag.jpg" alt="" class="article-image">
            </a>

        </div>

    </div>
</section>

<!-- Newsletter -->
<section class="newsletter section">

    <div class="container">

        <h2 class="title section-title" data-name="Newsletter">Newsletter</h2>

        <div class="form-container-inner">
            <h6 class="title newsletter-title">Subscribe to NewsFlash</h6>
            <p class="newsletter-description">Lorem ipsum dolor sit amet consectetur adipisicing quaerat dignissimos.</p>

            <form action="" class="form">
                <input class="form-input" type="text" placeholder="Enter your email address">
                <button class="btn form-btn" type="submit">
                    <i class="ri-mail-send-line"></i>
                </button>
            </form>

        </div>

    </div>

</section>
@endsection
