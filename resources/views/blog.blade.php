@extends('includes.include')
@section('content')



   <!-- breadcrumb area start -->
   <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg"
   data-overlay="dark" data-opacity="5">
   <div class="container">
       <div class="row">
           <div class="col-xl-12">
               <div class="breadcrumb__wrap">
                   <h2 class="title">News Feeds</h2>
                   <div class="breadcrumb__nav">
                       <ul>
                           <li><span>//</span></li>
                           <li><a href="index.html">Home</a></li>
                           <li>|</li>
                           <li>blog</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- breadcrumb area end -->

<!-- news area start -->
<div class="blog__area blog__area--2 grey-bg pt-100 pb-100">
   <div class="container">
       <div class="row">
           <div class="col-xl-8 col-lg-12">
               <article class="blog__box blog__box--3 blog__box--image mb-40">
                   <div class="thumb">
                       <a href="news-details.html">
                           <img src="assets/images/news/news-list-1.jpeg" alt="blog image">
                       </a>
                   </div>
                   <div class="content pt-50">
                       <div class="cat">
                           <span>Businese</span>
                       </div>
                       <h3 class="title">
                           <a href="news-details.html">Lorem ipsum dolor sit amet, consecte
                               cing elit, sed do eiusmod tempor.</a>
                       </h3>
                       <div class="meta mt-20 mb-20">
                           <span><i class="far fa-eye"></i> 232 Views </span>
                           <span><a href="#0"><i class="far fa-comments"></i> 35 Comments</a></span>
                           <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                       </div>
                       <div class="post-text mb-35">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                           aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                           aute irure dolor in
                           reprehenderit in voluptate velit esse cillum dolore.</p>
                       </div>
                       <div class="post-bottom mt-30">
                           <div class="authore">
                               <img src="assets/images/news/news-list-authore.png" alt="">
                               <span>by Hetmayar</span>
                           </div>
                           <a href="news-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i> Read More</a>
                       </div>
                   </div>
               </article>
               <article class="blog__box blog__box--3 blog__box--video mb-40">
                   <div class="thumb">
                       <a href="news-details.html">
                           <img src="assets/images/news/news-list-2.jpeg" alt="blog image">
                       </a>
                       <a href="//www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection"
                           data-animation="fadeInLeft" data-delay=".1s" class="video-link">
                           <div class="video-play-wrap">
                               <div class="video-mark">
                                   <div class="wave-pulse wave-pulse-1"></div>
                                   <div class="wave-pulse wave-pulse-2"></div>
                               </div>
                               <div class="video-play">
                                   <i class="fa fa-play"></i>
                               </div>
                           </div>
                       </a>
                   </div>
                   <div class="content pt-50">
                       <div class="cat">
                           <span>Businese</span>
                       </div>
                       <h3 class="title">
                           <a href="news-details.html">Adipisicing elit, sed do eiusmod tempor
                           incididunt ut labore et dolore.</a>
                       </h3>
                       <div class="meta mt-20 mb-20">
                           <span><i class="far fa-eye"></i> 232 Views </span>
                           <span><a href="#0"><i class="far fa-comments"></i> 35 Comments</a></span>
                           <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                       </div>
                       <div class="post-text mb-35">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                           aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                           aute irure dolor in
                           reprehenderit in voluptate velit esse cillum dolore.</p>
                       </div>
                       <div class="post-bottom mt-30">
                           <div class="authore">
                               <img src="assets/images/news/news-list-authore.png" alt="">
                               <span>by Hetmayar</span>
                           </div>
                           <a href="news-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i> Read More</a>
                       </div>
                   </div>
               </article>
               <article class="blog__box blog__box--3 blog__box--gallery mb-40">
                   <div class="post_gallery owl-carousel">
                       <div class="single-postbox-gallery">
                           <img src="assets/images/news/news-list-3.jpeg" alt="blog image">
                       </div>
                       <div class="single-postbox-gallery">
                           <img src="assets/images/news/news-list-2.jpeg" alt="blog image">
                       </div>
                   </div>
                   <div class="content pt-50">
                       <div class="cat">
                           <span>Businese</span>
                       </div>
                       <h3 class="title">
                           <a href="news-details.html">Magna aliqua. Ut enim ad minim venia
                           m, quis nostrud exercitation ullamco</a>
                       </h3>
                       <div class="meta mt-20 mb-20">
                           <span><i class="far fa-eye"></i> 232 Views </span>
                           <span><a href="#0"><i class="far fa-comments"></i> 35 Comments</a></span>
                           <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                       </div>
                       <div class="post-text mb-35">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                               dolore magna
                               aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis
                               aute irure dolor in
                               reprehenderit in voluptate velit esse cillum dolore.</p>
                       </div>
                       <div class="post-bottom mt-30">
                           <div class="authore">
                               <img src="assets/images/news/news-list-authore.png" alt="">
                               <span>by Hetmayar</span>
                           </div>
                           <a href="news-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i> Read More</a>
                       </div>
                   </div>
               </article>
               <article class="blog__box blog__box--3 blog__box--audio mb-40">
                   <div class="postbox_audio embed-responsive embed-responsive-16by9">
                       <iframe
                           src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/469608615&color=%23ff0000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                   </div>
                   <div class="content pt-50">
                       <div class="cat">
                           <span>Businese</span>
                       </div>
                       <h3 class="title">
                           <a href="news-details.html">Laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor.</a>
                       </h3>
                       <div class="meta mt-20 mb-20">
                           <span><i class="far fa-eye"></i> 232 Views </span>
                           <span><a href="#0"><i class="far fa-comments"></i> 35 Comments</a></span>
                           <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                       </div>
                       <div class="post-text mb-35">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                               dolore magna
                               aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis
                               aute irure dolor in
                               reprehenderit in voluptate velit esse cillum dolore.</p>
                       </div>
                       <div class="post-bottom mt-30">
                           <div class="authore">
                               <img src="assets/images/news/news-list-authore.png" alt="">
                               <span>by Hetmayar</span>
                           </div>
                           <a href="news-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i> Read More</a>
                       </div>
                   </div>
               </article>
               <article class="blog__box blog__box--3 blog__box--text mb-40">
                   <div class="content pt-50">
                       <div class="cat">
                           <span>Businese</span>
                       </div>
                       <h3 class="title">
                           <a href="news-details.html">In reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur.</a>
                       </h3>
                       <div class="meta mt-20 mb-20">
                           <span><i class="far fa-eye"></i> 232 Views </span>
                           <span><a href="#0"><i class="far fa-comments"></i> 35 Comments</a></span>
                           <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                       </div>
                       <div class="post-text mb-35">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                               dolore magna
                               aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                               consequat. Duis
                               aute irure dolor in
                               reprehenderit in voluptate velit esse cillum dolore.</p>
                       </div>
                       <div class="post-bottom">
                           <div class="authore">
                               <img src="assets/images/news/news-list-authore.png" alt="">
                               <span>by Hetmayar</span>
                           </div>
                           <a href="news-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i> Read More</a>
                       </div>
                   </div>
               </article>
               <article class="blog__box blog__box--3 blog__box--quote mb-40">
                   <blockquote>
                       <h3 class="title">
                           <a href="news-details.html">Excepteur sint occaecat cupida
                           tat non proident, sunt in.</a>
                       </h3>
                       <div class="meta mt-20">
                           <span><i class="far fa-eye"></i> 232 Views </span>
                           <span><a href="#0"><i class="far fa-comments"></i> 23 Comments</a></span>
                           <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                       </div>
                       <div class="quote-icon">
                           <img src="assets/images/icons/quote-icon.png" alt="">
                       </div>
                   </blockquote>
               </article>
               <article class="blog__box blog__box--3 blog__box--transparent bg_img" data-background="assets/images/news/news-list-4.jpeg" data-overlay="light" data-opacity="7">
                   <div class="content pt-50">
                       <div class="cat">
                           <span>Businese</span>
                       </div>
                       <h3 class="title">
                           <a href="news-details.html">Culpa qui officia deserunt mollit anim
                           id est laborum. Sed ut perspiciatis</a>
                       </h3>
                       <div class="meta mt-20 mb-20">
                           <span><i class="far fa-eye"></i> 232 Views </span>
                           <span><a href="#0"><i class="far fa-comments"></i> 35 Comments</a></span>
                           <span><a href="#0"><i class="far fa-calendar-alt"></i> 24th March 2019</a></span>
                       </div>
                   </div>
               </article>
               <div class="blog__pagination mt-40">
                   <ul>
                       <li><a href="#0"><i class="fas fa-angle-double-left"></i></a></li>
                       <li><a href="#0">01</a></li>
                       <li class="active"><a href="#0">02</a></li>
                       <li><a href="#0">03</a></li>
                       <li><a href="#0"><i class="fas fa-ellipsis-h"></i></a></li>
                       <li><a href="#0"><i class="fas fa-angle-double-right"></i></a></li>
                   </ul>
               </div>
           </div>
           <div class="col-xl-4 col-lg-12">
               <div class="sidebar-wrap">
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">About Me</h3>
                       <div class="aboutme text-center">
                           <img src="assets/images/news/news-author-2.jpeg" alt="">
                           <h4>Rosalina D. Willaimson</h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                           <div class="aboutme__icon mt-30">
                               <a href="#0"><i class="fab fa-facebook-f"></i></a>
                               <a href="#0"><i class="fab fa-twitter"></i></a>
                               <a href="#0"><i class="fab fa-behance"></i></a>
                               <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                               <a href="#0"><i class="fab fa-youtube"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">Search Objects</h3>
                       <form class="sidebar-search-form">
                           <input type="text" placeholder="Search your keyword...">
                           <button type="submit"><i class="fas fa-search"></i></button>
                       </form>
                   </div>
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">Popular Feeds</h3>
                       <ul class="recent-posts">
                           <li>
                               <div class="thumb">
                                   <a href="news-details.html"><img src="assets/images/news/news-releted-post-1.jpeg"
                                           alt=""></a>
                               </div>
                               <div class="content">
                                   <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                           cing elit, sed do.</a></h6>
                                   <div class="meta"> 24th March 2019</div>
                               </div>
                           </li>
                           <li>
                               <div class="thumb">
                                   <a href="news-details.html"><img src="assets/images/news/news-releted-post-2.jpeg"
                                           alt=""></a>
                               </div>
                               <div class="content">
                                   <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                           cing elit, sed do.</a></h6>
                                   <div class="meta"> 24th March 2019</div>
                               </div>
                           </li>
                           <li>
                               <div class="thumb">
                                   <a href="news-details.html"><img src="assets/images/news/news-releted-post-3.jpeg"
                                           alt=""></a>
                               </div>
                               <div class="content">
                                   <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                           cing elit, sed do.</a></h6>
                                   <div class="meta"> 24th March 2019</div>
                               </div>
                           </li>
                           <li>
                               <div class="thumb">
                                   <a href="news-details.html"><img src="assets/images/news/news-releted-post-4.jpeg"
                                           alt=""></a>
                               </div>
                               <div class="content">
                                   <h6 class="title"><a href="#0">Lorem ipsum dolor sit
                                           cing elit, sed do.</a></h6>
                                   <div class="meta"> 24th March 2019</div>
                               </div>
                           </li>
                       </ul>
                   </div>
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">Categories</h3>
                       <ul class="cat">
                           <li>
                               <a href="#0">Business <span>26</span></a>
                           </li>
                           <li>
                               <a href="#0">Consultant <span>30</span></a>
                           </li>
                           <li>
                               <a href="#0">Creative <span>71</span></a>
                           </li>
                           <li>
                               <a href="#0">UI/UX <span>56</span></a>
                           </li>
                           <li>
                               <a href="#0">Technology <span>60</span></a>
                           </li>
                       </ul>
                   </div>
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">Never Miss News</h3>
                       <div class="social__links">
                           <a href="#0"><i class="fab fa-facebook-f"></i></a>
                           <a href="#0"><i class="fab fa-twitter"></i></a>
                           <a href="#0"><i class="fab fa-behance"></i></a>
                           <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                           <a href="#0"><i class="fab fa-youtube"></i></a>
                       </div>
                   </div>
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">Twitter Feeds</h3>
                       <ul class="twitter__feeds">
                           <li>
                               <div class="t-feed-icon">
                                   <i class="fab fa-twitter"></i>
                               </div>
                               <div class="t-feed-body">
                                   <p>Rescue - #Gutenberg ready @ wordpress
                                       Theme for Creative Bloggers available on
                                       @ ThemeForest https://t.co/2r1POjOjgV
                                       C… https://t.co/rDAnPyClu1</p>
                                   <div class="t-feed-meta"> November 25, 2018</div>
                               </div>
                           </li>
                           <li>
                               <div class="t-feed-icon">
                                   <i class="fab fa-twitter"></i>
                               </div>
                               <div class="t-feed-body">
                                   <p>Rescue - #Gutenberg ready @ wordpress
                                       Theme for Creative Bloggers available on
                                       @ ThemeForest https://t.co/2r1POjOjgV
                                       C… https://t.co/rDAnPyClu1</p>
                                   <div class="t-feed-meta"> November 25, 2018</div>
                               </div>
                           </li>
                           <li>
                               <div class="t-feed-icon">
                                   <i class="fab fa-twitter"></i>
                               </div>
                               <div class="t-feed-body">
                                   <p>Rescue - #Gutenberg ready @ wordpress
                                       Theme for Creative Bloggers available on
                                       @ ThemeForest https://t.co/2r1POjOjgV
                                       C… https://t.co/rDAnPyClu1</p>
                                   <div class="t-feed-meta"> November 25, 2018</div>
                               </div>
                           </li>
                       </ul>
                   </div>
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">Instagram Feeds</h3>
                       <ul id="Instafeed">
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-1.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-2.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-3.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-4.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-5.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-6.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-7.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-8.jpeg" alt=""></a></li>
                           <li><a href="#0"><img src="assets/images/news/instafeed/insta-feed-9.jpeg" alt=""></a></li>
                       </ul>
                   </div>
                   <div class="widget mb-40">
                       <h3 class="widget__title mb-30">Popular Tags</h3>
                       <div class="tag">
                           <a href="#0" class="site-btn">Popular</a>
                           <a href="#0" class="site-btn">desgin</a>
                           <a href="#0" class="site-btn">ux</a>
                           <a href="#0" class="site-btn">usability</a>
                           <a href="#0" class="site-btn">develop</a>
                           <a href="#0" class="site-btn">icon</a>
                           <a href="#0" class="site-btn">business</a>
                           <a href="#0" class="site-btn">consult</a>
                           <a href="#0" class="site-btn">kit</a>
                           <a href="#0" class="site-btn">keyboard</a>
                           <a href="#0" class="site-btn">mouse</a>
                           <a href="#0" class="site-btn">tech</a>
                       </div>
                   </div>
                   <div class="widget ad__widget">
                       <img src="assets/images/bg/news-ad-banner.jpeg" alt="">
                       <div class="ad-text">
                           <h3><span>350x600</span>Add Banner</h3>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- news area end -->



@endsection