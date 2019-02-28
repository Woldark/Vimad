@extends('Main.layout.base')

@section('css')
    @endsection
@section('content')
    <!-- Main Content Starts -->
    <div class="span8 right" id="content">
        <!-- Post Content Starts -->
        <article class="post post__holder">
            <header class="post-header">
                <h1 class="post-title">عنوان نوشته شماره یک</h1>
            </header>
            <figure class="featured-thumbnail thumbnail large">
                <img src="images/blog/post1-big.jpg" alt="عنوان" />
            </figure>
            <div class="post_content">
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. </p>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. </p>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. </p>
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
            <!-- Social Share Starts -->
            <span class='st_facebook_hcount' data-displaytext='Facebook'></span>
            <span class='st_twitter_hcount' data-displaytext='Tweet'></span>
            <span class='st_googleplus_hcount' data-displaytext='Google +'></span>
            <!-- Social Share Ends -->
        </article>
        <!-- Post Content Ends -->
        <div class="post-author clearfix">
            <h3 class="post-author_h">نوشته شده توسط <a href="#" title="Posts by admin" rel="author">مدیر</a></h3>
            <p class="post-author_gravatar"><img alt="avatar" src="images/admin.png" class="photo" height="80" width="80" /></p>
            <div>
                لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                <div class="post-author_link">
                    <p>نمایش همه نوشته های <a href="#" title="Posts by admin" rel="author">مدیر</a></p>
                </div>
            </div>
        </div>
        <!-- Comments Section Starts -->
        <div class="comment-holder">
            <h3 class="comments-h">3 پاسخ</h3>
            <div class="pagination">
            </div>
            <ol class="comment-list clearfix">
                <li class="comment bypostauthor clearfix">
                    <div class="comment-body clearfix">
                        <div class="wrapper">
                            <div class="comment-author vcard">
                                <img alt="user" src="images/user.png" height="59" width="59" /> <span class="author">جان</span> </div>
                            <div class="extra-wrap">
                                <p>ممنون از شما</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="reply">
                                <a class="comment-reply-link" href="#">پاسخ</a> </div>
                            <div class="comment-meta">خرداد 1394</div>
                        </div>
                    </div>
                    <ul class="children">
                        <li class="comment bypostauthor clearfix">
                            <div class="comment-body clearfix">
                                <div class="wrapper">
                                    <div class="comment-author vcard">
                                        <img alt="user" src="images/user.png" height="59" width="59" /> <span class="author">مدیر</span> </div>
                                    <div class="extra-wrap">
                                        <p>تشکر</p>
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <div class="reply">
                                        <a class="comment-reply-link" href="#">پاسخ</a> </div>
                                    <div class="comment-meta">اردیبهشت 94</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="comment bypostauthor clearfix">
                    <div class="comment-body clearfix">
                        <div class="wrapper">
                            <div class="comment-author vcard">
                                <img alt="jane" src="images/user.png" height="59" width="59" /> <span class="author">Jane</span> </div>
                            <div class="extra-wrap">
                                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ</p>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="reply">
                                <a class="comment-reply-link" href="#">پاسخ</a> </div>
                            <div class="comment-meta">اردیبهشت 94</div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
        <div id="respond">
            <h3>گذاشتن نظر</h3>
            <form action="#" method="post" id="commentform">
                <p class="field">
                    <input type="text" name="author" id="author" value="نام" onfocus="if(this.value=='نام'){this.value=''}" onblur="if(this.value==''){this.value='نام'}" size="22" tabindex="1" aria-required='true' />
                </p>
                <p class="field">
                    <input type="text" name="email" id="email" value="ایمیل" onfocus="if(this.value=='ایمیل'){this.value=''}" onblur="if(this.value==''){this.value='ایمیل'}" size="22" tabindex="2" aria-required='true' />
                </p>
                <p class="field">
                    <input type="text" name="url" id="url" value="وب سایت" onfocus="if(this.value=='وب سایت'){this.value=''}" onblur="if(this.value==''){this.value='وب سایت'}" size="22" tabindex="3" />
                </p>

                <p>
                    <textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" onfocus="if(this.value=='متن نظر'){this.value=''}" onblur="if(this.value==''){this.value='متن نظر'}">متن نظر</textarea>
                </p>
                <p>
                    <input name="submit" type="submit" class="btn btn-primary" id="submit" tabindex="5" value="ارسال" />
                </p>
            </form>
        </div>
        <!-- Comments Section Ends -->
    </div>
    <!-- Main Content Ends -->
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
                <li><a href="#" title="">اردیبهشت  1394</a></li>
                <li><a href="#" title="">فروردین 1394</a></li>
            </ul>
        </div>
        <div class="widget"><!-- Recent Posts Widget -->
            <h3>آخرین نوشته ها</h3>
            <ul class="post-list unstyled">
                <li class="post-list_li clearfix">
                    <figure class="featured-thumbnail thumbnail">
                        <a href="blog-post-1.html" title="عنوان عکس"><img src="images/sidebar/post1.jpg" alt="" /></a>
                    </figure>
                    <time datetime="2013-03-14T20:28">خرداد 1394</time>
                    <h4 class="post-list_h"><a href="blog-post-1.html" rel="bookmark" title="خلاصه نوشته">عنوان نوشته</a></h4>
                    <div class="excerpt">
                        لورم ایپسوم یا طرح‌نما به متنی آزمایشی</div>
                    <a href="blog-post-1.html" class="btn btn-primary">ادامه</a>
                </li>
                <li class="post-list_li clearfix">
                    <figure class="featured-thumbnail thumbnail">
                        <a href="blog-post-2.html" title="عنوان عکس"><img src="images/sidebar/post2.jpg" alt="Quisque iaculis purus eget metus" /></a>
                    </figure>
                    <time datetime="2013-03-14T20:28">خرداد 1394</time>
                    <h4 class="post-list_h"><a href="blog-post-1.html" rel="bookmark" title="خلاصه نوشته">عنوان نوشته</a></h4>
                    <div class="excerpt">
                        لورم ایپسوم یا طرح‌نما به متنی آزمایشی</div>
                    <a href="blog-post-1.html" class="btn btn-primary">ادامه</a>
                </li>
            </ul>

        </div>
    </div>
    <!-- Sidebar Ends -->
    <!-- Main Content Ends -->
    @endsection
@section('javascript')
    <!-- Template JS Files -->
    <script type="text/javascript" src="{{asset('/main/js/superfish.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.elastislide.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.mobilemenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jflickrfeed.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
        stLight.options({
            publisher: "8633edad-38ed-4334-ba23-8c0cb0cc3985",
            doNotHash: false,
            doNotCopy: false,
            hashAddressBar: false
        });
    </script>
    @endsection
