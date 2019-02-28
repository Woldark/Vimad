@extends('Main.layout.base')
@section('css')
@endsection
@section('content')
    <!-- Main Content Starts -->
    <div class="span8 right" id="content">
        <!-- Article 1 Starts-->
        <article class="post post__holder">
            <header class="post-header">
                <h2 class="post-title"><a href="blog-post-1.html">عنوان نوشته شماره یک</a></h2>
            </header>
            <figure class="featured-thumbnail thumbnail">
                <a href="blog-post-1.html"><img width="250" height="200" src="images/blog/post1.jpg" alt="post-1"/></a>
            </figure>

            <div class="post_content">
                <div class="excerpt">
                    لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                    طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی
                    طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن
                    باشد.
                </div>
                <a href="blog-post-1.html" class="btn btn-primary btn-large">بیشتر</a>
                <div class="clear"></div>
            </div>
            <div class="post_meta">
                                        <span class="post_category">
											<i class="icon-bookmark"></i>
											<a href="blog-post-1.html">موضوع</a>
										</span>
                <span class="post_date">
											<i class="icon-calendar"></i>
											<time datetime="2013-03-14T20:28:57">خرداد 1394</time>
										</span>
                <span class="post_author">
											<i class="icon-user"></i>
											<a href="#">نویسنده</a>
										</span>
                <span class="post_comment">
											<i class="icon-comments"></i>
											<a href="blog-post-1.html">بدون نظر</a>
										</span>
                <span class="post_permalink">
											<i class="icon-link"></i>
											<a href="blog-post-1.html">لینک</a>
										</span>
            </div>
        </article>
        <!-- Article 1 Ends-->
        <!-- Article 2 Starts-->
        <article class="post post__holder">
            <header class="post-header">
                <h2 class="post-title"><a href="blog-post-2.html">عنوان نوشته شماره دو</a></h2>
            </header>
            <figure class="featured-thumbnail thumbnail">
                <a href="blog-post-2.html"><img width="250" height="200" src="images/blog/post2.jpg" alt="post-1"/></a>
            </figure>

            <div class="post_content">
                <div class="excerpt">
                    لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                    طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی
                    طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن
                    باشد.
                </div>
                <a href="blog-post-2.html" class="btn btn-primary btn-large">بیشتر</a>
                <div class="clear"></div>
            </div>
            <div class="post_meta">
                                        <span class="post_category">
											<i class="icon-bookmark"></i>
											<a href="blog-post-1.html">موضوع</a>
										</span>
                <span class="post_date">
											<i class="icon-calendar"></i>
											<time datetime="2013-03-14T20:28:57">خرداد 1394</time>
										</span>
                <span class="post_author">
											<i class="icon-user"></i>
											<a href="#">نویسنده</a>
										</span>
                <span class="post_comment">
											<i class="icon-comments"></i>
											<a href="blog-post-1.html">بدون نظر</a>
										</span>
                <span class="post_permalink">
											<i class="icon-link"></i>
											<a href="blog-post-1.html">لینک</a>
										</span>
            </div>
        </article>
        <!-- Article 2 Ends-->
        <!-- Article 3 Starts-->
        <article class="post format-video">
            <header class="post-header">
                <h2 class="post-title"><a href="youtube-post.html" title="Permalink Youtube Video">ویدیو</a></h2>
            </header>
            <div class="embed-container">
                <iframe src="http://www.youtube.com/embed/keDneypw3HY" allowfullscreen></iframe>
            </div>
            <div class="post_content">
                <div class="clear"></div>
            </div>
            <div class="post_meta">
                                        <span class="post_category">
											<i class="icon-bookmark"></i>
											<a href="blog-post-1.html">موضوع</a>
										</span>
                <span class="post_date">
											<i class="icon-calendar"></i>
											<time datetime="2013-03-14T20:28:57">خرداد 1394</time>
										</span>
                <span class="post_author">
											<i class="icon-user"></i>
											<a href="#">نویسنده</a>
										</span>
                <span class="post_comment">
											<i class="icon-comments"></i>
											<a href="blog-post-1.html">بدون نظر</a>
										</span>
                <span class="post_permalink">
											<i class="icon-link"></i>
											<a href="blog-post-1.html">لینک</a>
										</span>
            </div>
        </article>
        <!-- Article 3 Ends-->
        <!-- Article 4 Starts-->
        <article class="post format-video">
            <header class="post-header">
                <h2 class="post-title"><a href="vimeo-post.html" title="Permalink Vimeo Video">ویدیو شماره دو</a></h2>
            </header>
            <div class="video-wrap ">
                <iframe src="http://player.vimeo.com/video/23534361?badge=0" width="600" height="350"
                        allowFullScreen></iframe>
            </div>
            <div class="post_content">
                <div class="clear"></div>
            </div>
            <div class="post_meta">
                                       <span class="post_category">
											<i class="icon-bookmark"></i>
											<a href="blog-post-1.html">موضوع</a>
										</span>
                <span class="post_date">
											<i class="icon-calendar"></i>
											<time datetime="2013-03-14T20:28:57">خرداد 1394</time>
										</span>
                <span class="post_author">
											<i class="icon-user"></i>
											<a href="#">نویسنده</a>
										</span>
                <span class="post_comment">
											<i class="icon-comments"></i>
											<a href="blog-post-1.html">بدون نظر</a>
										</span>
                <span class="post_permalink">
											<i class="icon-link"></i>
											<a href="blog-post-1.html">لینک</a>
										</span>
            </div>
        </article>
        <!-- Article 4 Ends-->
        <div class="pagination pagination__posts">
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#" class="inactive">2</a></li>
                <li><a href="#" class="inactive">3</a></li>
                <li><a href="#" class="inactive">4</a></li>
                <li class="next"><a href="#">بعدی</a></li>
                <li class="last"><a href="#">قبلی</a></li>
            </ul>
        </div>
    </div>
    <!-- Main Content Starts -->
    <!-- Sidebar Starts -->
    <div class="span4 sidebar" id="sidebar">
        <div class="widget"><!-- Categories Widget -->
            <h3>موضوعات</h3>
            <ul>
                <li><a href="#">موضوع شمار یک</a>
                </li>
                <li><a href="#">موضوع شمار دو</a>
                </li>
                <li><a href="#">موضوع شمار سه</a>
                </li>
                <li><a href="#">موضوع شمار چهار</a>
                </li>
                <li><a href="#">موضوع شمار پنج</a>
                </li>
                <li><a href="#">موضوع شمار شش</a>
                </li>
                <li><a href="#">موضوع شمار هفت</a>
                </li>
                <li><a href="#">موضوع شمار هشت</a>
                </li>
                <li><a href="#">موضوع شمار نهم</a>
                </li>
            </ul>
        </div>
        <div class="widget"><!-- Archives Widget -->
            <h3>آرشیو</h3>
            <ul>
                <li><a href="#" title="مرداد">مرداد 1394</a></li>
                <li><a href="#" title="">تیر 1394</a></li>
                <li><a href="#" title="">خرداد 1394</a></li>
                <li><a href="#" title="">اردیبهشت 1394</a></li>
                <li><a href="#" title="">فروردین 1394</a></li>
            </ul>
        </div>
        <div class="widget"><!-- Recent Posts Widget -->
            <h3>آخرین نوشته ها</h3>
            <ul class="post-list unstyled">
                <li class="post-list_li clearfix">
                    <figure class="featured-thumbnail thumbnail">
                        <a href="blog-post-1.html" title="عنوان عکس"><img src="images/sidebar/post1.jpg" alt=""/></a>
                    </figure>
                    <time datetime="2013-03-14T20:28">خرداد 1394</time>
                    <h4 class="post-list_h"><a href="blog-post-1.html" rel="bookmark" title="خلاصه نوشته">عنوان
                            نوشته</a></h4>
                    <div class="excerpt">
                        لورم ایپسوم یا طرح‌نما به متنی آزمایشی
                    </div>
                    <a href="blog-post-1.html" class="btn btn-primary">ادامه</a>
                </li>
                <li class="post-list_li clearfix">
                    <figure class="featured-thumbnail thumbnail">
                        <a href="blog-post-2.html" title="عنوان عکس"><img src="images/sidebar/post2.jpg"
                                                                          alt="Quisque iaculis purus eget metus"/></a>
                    </figure>
                    <time datetime="2013-03-14T20:28">خرداد 1394</time>
                    <h4 class="post-list_h"><a href="blog-post-1.html" rel="bookmark" title="خلاصه نوشته">عنوان
                            نوشته</a></h4>
                    <div class="excerpt">
                        لورم ایپسوم یا طرح‌نما به متنی آزمایشی
                    </div>
                    <a href="blog-post-1.html" class="btn btn-primary">ادامه</a>
                </li>
            </ul>

        </div>
    </div>
    <!-- Sidebar Ends -->
@endsection
@section('javascript')
    <script type="text/javascript" src="{{asset('/main/js/superfish.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.elastislide.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.mobilemenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jflickrfeed.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/bootstrap.min.js')}}"></script>
@endsection