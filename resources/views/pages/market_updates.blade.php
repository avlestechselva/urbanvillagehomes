@include('includes.header')
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content text-center">
                    <div class="home_title">Market Updates</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row">

            <!-- Blog Posts -->
            <div class="col-lg-9">
                <div class="blog_posts">
                    <!-- Blog Post -->
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img src="{{ asset('images/realtor_1.jpg') }}" alt="">
                            <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                <div>07</div>
                                <div>nov'18</div>
                            </div>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_title"><a href="{{ url('market-updates/How-to-get-a-good-deal-on-your-house') }}">How to get a good deal on your house</a></div>
                            <div class="blog_post_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li>by <a href="#">Admin</a></li>
                                    <li>in <a href="#">Real Estate</a></li>
                                    <li>
                                        <ul class="d-flex flex-row align-items-start justify-content-start">
                                            <li><a href="#">tips and tricks</a></li>
                                            <li><a href="#">houses</a></li>
                                            <li><a href="#">marketing</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog_post_text" >
                                <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nullam fermentum egestas quam nec malesuada. Donec non ligula non risus luctus mattis non non diam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li class="active"><a href="#">01.</a></li>
                        <li><a href="#">02.</a></li>
                        <li><a href="#">03.</a></li>
                    </ul>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <!-- Search -->
                    <div class="sidebar_search">
                        <form action="#" class="sidebar_search_form">
                            <input type="text" class="sidebar_search_input" required="required">
                            <button class="sidebar_search_button"><img src="images/search.png" alt=""></button>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="categories">
                        <div class="sidebar_title"><h3>Categories</h3></div>
                        <div class="sidebar_list">
                            <ul>
                                <li><a href="#">Real Estate</a></li>
                                <li><a href="#">Legal Aid</a></li>
                                <li><a href="#">Lifestyle & Living</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Archive -->
                    <div class="archive">
                        <div class="sidebar_title"><h3>Archive</h3></div>
                        <div class="sidebar_list">
                            <ul>
                                <li><a href="#">October 2018</a></li>
                                <li><a href="#">September 2018</a></li>
                                <li><a href="#">August 2018</a></li>
                                <li><a href="#">July 2018</a></li>
                                <li><a href="#">June 2018</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="sidebar_tags">
                        <div class="sidebar_title"><h3>Tags</h3></div>
                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <li><a href="#">tips & tricks</a></li>
                            <li><a href="#">real estate</a></li>
                            <li><a href="#">house</a></li>
                            <li><a href="#">home</a></li>
                            <li><a href="#">guest</a></li>
                            <li><a href="#">property</a></li>
                            <li><a href="#">car</a></li>
                            <li><a href="#">buy & sell</a></li>
                        </ul>
                    </div>

                    <!-- Extra -->
                    <div class="extra d-flex flex-column align-items-start justify-content-start">
                        <div class="background_image" style="background-image:url(images/extra.jpg)"></div>
                        <div class="extra_button"><a href="listings.html">Need a Property?</a></div>
                        <div class="extra_phone_container mt-auto">
                            <div>Call Maria Smith</div>
                            <div>00349 566 77892</div>
                        </div>
                    </div>

                    <!-- Listing -->
                    <div class="sidebar_listing">
                        <div class="listing_small">
                            <div class="listing_small_image">
                                <div>
                                    <img src="images/listing_6.jpg" alt="">
                                </div>
                                <div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <div class="listing_small_tag tag_house"><a href="listings.html">house</a></div>
                                    <div class="listing_small_tag tag_sale"><a href="listings.html">for sale</a></div>
                                </div>
                                <div class="listing_small_price">$ 562 346</div>
                            </div>
                            <div class="listing_small_content">
                                <div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
                                    <img src="images/icon_1.png" alt="">
                                    <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
                                </div>
                                <div class="listing_small_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_3.png" alt="">
                                            <span>2</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_4.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_5.png" alt="">
                                            <span>2</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('includes.footer')
