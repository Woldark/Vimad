<!DOCTYPE html>
<html>

<head>
    <title>ویماد</title>
    @yield('css')
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="{{asset('/main/images/favicon.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/main/css/bootstrap.css')}}"/>

    <!-- Template CSS Files  -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/main/css/responsive.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/main/css/prettyPhoto.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/main/css/camera.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/main/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/main/css/fontper.css')}}"/>

    <!-- Template JS Files -->
    <script type="text/javascript" src="{{asset('/main/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery-migrate-git.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/modernizr.js')}}"></script>

</head>

<body>

<div class="main-holder">
    <!-- Header Section Starts -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="tail-top">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="contacts">
                                    <address>ملایر خیابان پارک</address>
                                    <span class="tel">0813</span>
                                    <span class="mail">
											<a href="#">vimad@info.com</a>
										</span>
                                </div>
                            </div>
                            <div class="pull-right">
                                    <span class="slogan">
									سلام ! به رسانه بزرگ ویماد خوش آمدید
									</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <!-- Logo -->
                        <div class="pull-left">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="images/logo.png" alt="Novatis"></a>
                            </div>
                        </div>
                        <div class="pull-right">
                            <!-- Navbar Starts -->
                            <nav class="nav nav__primary clearfix">
                                <ul class="sf-menu">
                                    <li class="color-5 icon-envelope"><a href="contacts.php">تماس با ما</a></li>

                                    <li class="color-2 icon-file-alt"><a href="about.html">درباره ما</a>
                                        <ul class="sub-menu">
                                            <li><a href="testimonials.html">از زبان مشتریان</a></li>
                                            <li><a href="faqs.html">پرسش های متداول</a></li>
                                        </ul>
                                    </li>
                                    <li class="color-3 icon-edit"><a href="blog.html">خبرنامه</a></li>
                                    <li class="color-4 icon-th-large"><a href="portfolio-3.html">رسانه</a>
                                        <ul class="sub-menu">
                                            <li><a href="video.html">ویدئو</a></li>
                                            <li><a href="image.html">عکس</a></li>
                                            <li><a href="article.html">مقالات</a></li>
                                        </ul>
                                    </li>
                                    <li class="color-1 icon-home current-menu-item"><a href="index.html">صفحه اصلی</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Navbar Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section Ends -->
@yield('content')
    <!-- Footer Starts -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <!-- Footer Widgets Starts -->
                    <div class="footer-widgets">
                        <div class="row">
                            <!-- Footer Widget 1 Starts -->
                            <div class="span3">
                                <div id="text-2">
                                    <h4 class="footer-widgets_h">درباره ما</h4>
                                    <div class="textwidget">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت
                                        چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان
                                        عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش
                                        گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و
                                        ظاهر متن باشد.
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget 1 Ends -->
                            <!-- Footer Widget 2 Starts -->
                            <div class="span3">
                                <div>
                                    <h4 class="footer-widgets_h">برچسب های پرطرفدار</h4>
                                    <div class="tagcloud">
                                        <a href="#">auctor</a>
                                        <a href="#">lorem</a>
                                        <a href="#">ipsum</a>
                                        <a href="#">Bibendum</a>
                                        <a href="#">nibh</a>
                                        <a href="#">gravida</a>
                                        <a href="#">aliquet</a>
                                        <a href="#">quis</a>
                                        <a href="#">vel</a>
                                        <a href="#">Proin</a>
                                        <a href="#">Aenean</a>
                                        <a href="#">sollicitudin</a>
                                        <a href="#">elit</a>
                                        <a href="#">consequat</a>
                                        <a href="#">sagittis</a>
                                        <a href="#">odio</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget 2 Ends -->
                            <!-- Footer Widget 3 Starts -->
                            <div class="span3">
                                <div>
                                    <h4 class="footer-widgets_h">آخرین خبر</h4>
                                    <ul class="post-list unstyled">
                                        <li class="clearfix">
                                            <h4 class="post-list_h"><a class="post-title" href="blog-post-1.html">لورم
                                                    ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است</a></h4>
                                            <time datetime="2013-03-14T20:28">مرداد 94</time>
                                            <div class="excerpt">
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <h4 class="post-list_h"><a class="post-title" href="blog-post-2.html">لورم
                                                    ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است</a></h4>
                                            <time datetime="2013-03-05T20:31">مرداد 94</time>
                                            <div class="excerpt">
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <h4 class="post-list_h"><a class="post-title" href="blog-post-1.html">لورم
                                                    ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است</a></h4>
                                            <time datetime="2013-02-14T20:26">مرداد 94</time>
                                            <div class="excerpt">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget 3 Ends -->
                            <!-- Footer Widget 4 Starts -->
                            <div class="span3">
                                <div>
                                    <h4 class="footer-widgets_h">فیید</h4>
                                    <ul id="flickr" class="flickr_list unstyled clearfix row-fluid"></ul>
                                    <a href="http://flickr.com/photos/132108856@N03" class="link"></a>
                                </div>
                            </div>
                            <!-- Footer Widget 4 Ends -->
                        </div>
                    </div>
                    <!-- Footer Widgets Ends -->
                    <div class="copyright">
                        <div class="row">
                            <div class="span6">
                                <div id="footer-text" class="footer-text">
                                    <strong></strong>کلیه حقوق برای این سایت محفوظ می باشد

                                    </a>
                                </div>
                            </div>
                            <div class="span6 social-links">
                                <span class="text-follow">شبکه های اجتماعی</span>
                                <a href="#"><i class="icon-facebook"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->
</div>
<div id="back-top-wrapper" class="visible-desktop">
    <p id="back-top">
        <a href="index.html#top"><span></span></a>
    </p>
</div>
<!-- Template JS Files -->
@yield('javascript')
<script type="text/javascript" src="{{asset('/main/js/superfish.js')}}"></script>
<script type="text/javascript" src="{{asset('/main/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('/main/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('/main/js/jquery.elastislide.js')}}"></script>
<script type="text/javascript" src="{{asset('/mian/js/jquery.mobilemenu.js')}}"></script>
<script type="text/javascript" src="{{asset('/main/js/jflickrfeed.js')}}"></script>
<script type="text/javascript" src="{{asset('/main/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('/main/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/main/js/camera.min.js')}}"></script>
<script type="text/javascript">
    //    jQuery(window).load(function() {
    jQuery(function () {
        var myCamera = jQuery('#camera5448d07be94d1');
        if (!myCamera.hasClass('motopress-camera')) {
            myCamera.addClass('motopress-camera');
            myCamera.camera({
                alignment: 'topCenter', //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
                autoAdvance: true, //true, false
                mobileAutoAdvance: true, //true, false. Auto-advancing for mobile devices
                barDirection: 'leftToRight', //'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
                barPosition: 'top', //'bottom', 'left', 'top', 'right'
                cols: 12,
                easing: 'easeOutQuad', //for the complete list http://jqueryui.com/demos/effect/easing.html
                mobileEasing: '', //leave empty if you want to display the same easing on mobile devices and on desktop etc.
                fx: 'random', //'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft',          'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'
                //you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'
                mobileFx: '', //leave empty if you want to display the same effect on mobile devices and on desktop etc.
                gridDifference: 250, //to make the grid blocks slower than the slices, this value must be smaller than transPeriod
                height: '52.5%', //here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
                imagePath: 'images/camera-slider/', //he path to the image folder (it serves for the blank.gif, when you want to display videos)
                loader: 'no', //pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
                loaderColor: '#ffffff',
                loaderBgColor: '#eb8a7c',
                loaderOpacity: 1, //0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
                loaderPadding: 0, //how many empty pixels you want to display between the loader and its background
                loaderStroke: 3, //the thickness both of the pie loader and of the bar loader. Remember: for the pie, the loader thickness must be less than a half of the pie diameter
                minHeight: '147px', //you can also leave it blank
                navigation: true, //true or false, to display or not the navigation buttons
                navigationHover: false, //if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always
                pagination: true,
                playPause: false, //true or false, to display or not the play/pause buttons
                pieDiameter: 33,
                piePosition: 'rightTop', //'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
                portrait: true, //true, false. Select true if you don't want that your images are cropped
                rows: 8,
                slicedCols: 12,
                slicedRows: 8,
                thumbnails: false,
                time: 5000, //milliseconds between the end of the sliding effect and the start of the next one
                transPeriod: 1200, //lenght of the sliding effect in milliseconds

                ////////callbacks

                onEndTransition: function () {
                }, //this callback is invoked when the transition effect ends
                onLoaded: function () {
                }, //this callback is invoked when the image on a slide has completely loaded
                onStartLoading: function () {
                }, //this callback is invoked when the image on a slide start loading
                onStartTransition: function () {
                } //this callback is invoked when the transition effect starts
            });
        }
    });
    //    });

</script>
</body>

</html>