@extends('Main.layout.base')
@section('css')

@endsection
@section('content')
    <!-- Main Content Starts -->
    <div id="content">
        <div>
            <div class="filter-wrapper clearfix">
                <div class="pull-right">
                    <strong>موضوعات</strong>
                    <!-- Portfolio Categories -->
                    <ul id="filters" class="filter nav nav-pills">
                        <li class="active"><a href="#" data-count="13" data-filter>نمایش همه</a></li>
                        <li><a href="#" data-count="4" data-filter=".projects-category-1">داروسازی</a></li>
                        <li><a href="#" data-count="9" data-filter=".projects-category-2">پزشکی</a></li>
                        <li><a href="#" data-count="5" data-filter=".projects-category-3">دندان پزشکی</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- Portfolio Section Starts -->
            <ul id="portfolio-grid" class="filterable-portfolio thumbnails" data-cols="3cols">
                <!-- Portfolio Item 1 : Image Format -->
                <li class="portfolio_item projects-category-2 projects-category-3">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a class="image-wrap" href="images/projects/project-1.jpg" data-gal="prettyPhoto[image]" title="پروژه 1"><img src="images/projects/project-1.jpg" alt="پروژه 1" /><span class="zoom-icon"></span></a>
                        </figure>

                        <div class="caption">
                            <h3><a href="image-format.html">پروژه 1</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="image-format.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 2 : Slideshow Format -->
                <li class="portfolio_item projects-category-2">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a class="image-wrap" href="images/projects/project-2.jpg" data-gal="prettyPhoto[slideshow]" title="Slideshow Format"><img src="images/projects/project-2.jpg" alt="Slideshow Format" /><span class="zoom-icon"></span></a>
                        </figure>
                        <a href="images/projects/project-4.jpg" title="Slideshow Format" data-gal="prettyPhoto[slideshow]" style="display:none;"></a>
                        <a href="images/projects/project-5.jpg" title="Slideshow Format" data-gal="prettyPhoto[slideshow]" style="display:none;"></a>
                        <div class="caption">
                            <h3><a href="slideshow-format.html">اسلایدشو</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="slideshow-format.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 3 : Gallery Format -->
                <li class="portfolio_item projects-category-1 projects-category-2 projects-category-3">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a class="image-wrap" href="images/projects/project-3.jpg" data-gal="prettyPhoto[gallery]" title="Gallery Format"><img src="images/projects/project-3.jpg" alt="Gallery Format" /><span class="zoom-icon"></span></a>
                        </figure>
                        <a href="images/projects/project-1.jpg" title="عنوان گالری" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-2.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-3.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-4.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-5.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-6.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-7.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-8.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <a href="images/projects/project-9.jpg" title="Gallery Format" data-gal="prettyPhoto[gallery]" style="display:none;"></a>
                        <div class="caption">
                            <h3><a href="gallery-format.html">گالری</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="gallery-format.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 4 : Video Format -->
                <li class="portfolio_item projects-category-1">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a href="video-format.html" title="عنوان ویدیو"><img src="images/projects/project-4.jpg" alt="ویدیو" /></a>
                        </figure>
                        <div class="caption">
                            <h3><a href="video-format.html">ویدیو</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="video-format.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 5 : Audio Format -->
                <li class="portfolio_item projects-category-1 projects-category-2">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a href="audio-format.html" title="پروژه صوت"><img src="images/projects/project-5.jpg" alt="پروژه صوت" /></a>
                        </figure>
                        <div class="caption">
                            <h3><a href="audio-format.html">پروژه صوت</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="audio-format.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 6 : Image Format -->
                <li class="portfolio_item projects-category-1">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a class="image-wrap" href="images/projects/project-6.jpg" data-gal="prettyPhoto[image6]" title="پروژه 2"><img src="images/projects/project-6.jpg" alt="پروژه 2" /><span class="zoom-icon"></span></a>
                        </figure>
                        <div class="caption">
                            <h3><a href="image-format-2.html">پروژه 2</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="image-format-2.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 7 : Image Format -->
                <li class="portfolio_item projects-category-2">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a class="image-wrap" href="images/projects/project-7.jpg" data-gal="prettyPhoto[image7]" title="عنوان فایل لایه باز"><img src="images/projects/project-7.jpg" alt="فایل لایه باز" /><span class="zoom-icon"></span></a>
                        </figure>
                        <div class="caption">
                            <h3><a href="image-format-3.html">فایل لایه باز</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="image-format-3.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 8 : Image Format -->
                <li class="portfolio_item projects-category-2 projects-category-3">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a class="image-wrap" href="images/projects/project-8.jpg" data-gal="prettyPhoto[image8]" title="فایل لایه باز 2"><img src="images/projects/project-8.jpg" alt="فایل لایه باز 2" /><span class="zoom-icon"></span></a>
                        </figure>
                        <div class="caption">
                            <h3><a href="image-format-4.html">فایل لایه باز 2</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="image-format-4.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
                <!-- Portfolio Item 9 : Image Format -->
                <li class="portfolio_item projects-category-2">
                    <div class="portfolio_item_holder">
                        <figure class="thumbnail thumbnail__portfolio">
                            <a class="image-wrap" href="images/projects/project-9.jpg" data-gal="prettyPhoto[image9]" title="آیکون"><img src="images/projects/project-9.jpg" alt="آیکون" /><span class="zoom-icon"></span></a>
                        </figure>
                        <div class="caption">
                            <h3><a href="image-format-5.html">آیکون</a></h3>
                            <p class="excerpt">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود</p>
                            <p><a href="image-format-5.html" class="btn btn-primary">ادامه</a></p>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Portfolio Section Ends -->
        </div>
    </div>
    <!-- Main Content Ends -->
@endsection
@section('javascript')

    <!-- Template JS Files -->
    <script type="text/javascript" src="{{asset('/main/js/superfish.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.elastislide.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.mobilemenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jflickrfeed.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.debouncedresize.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/bootstrap.min.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            "use strict";
            var $container = jQuery('#portfolio-grid'),
                filters = {},
                items_count = jQuery(".portfolio_item").size();

            $container.imagesLoaded(function() {
                setColumnWidth();
                $container.isotope({
                    itemSelector: '.portfolio_item',
                    hiddenClass: 'portfolio_hidden',
                    resizable: false,
                    transformsEnabled: true,
                    layoutMode: 'fitRows'
                });
            });

            function getNumColumns() {

                var $folioWrapper = jQuery('#portfolio-grid').data('cols');

                if ($folioWrapper == '1col') {
                    var winWidth = jQuery("#portfolio-grid").width();
                    var column = 1;
                    return column;
                }

                if ($folioWrapper == '2cols') {
                    var winWidth = jQuery("#portfolio-grid").width();
                    var column = 2;
                    if (winWidth < 380) column = 1;
                    return column;
                } else if ($folioWrapper == '3cols') {
                    var winWidth = jQuery("#portfolio-grid").width();
                    var column = 3;
                    if (winWidth < 380) column = 1;
                    else if (winWidth >= 380 && winWidth < 788) column = 2;
                    else if (winWidth >= 788 && winWidth < 1160) column = 3;
                    else if (winWidth >= 1160) column = 3;
                    return column;
                } else if ($folioWrapper == '4cols') {
                    var winWidth = jQuery("#portfolio-grid").width();
                    var column = 4;
                    if (winWidth < 380) column = 1;
                    else if (winWidth >= 380 && winWidth < 788) column = 2;
                    else if (winWidth >= 788 && winWidth < 1130) column = 3;
                    else if (winWidth >= 1130) column = 4;
                    return column;
                }
            }

            function setColumnWidth() {
                var columns = getNumColumns();

                var containerWidth = jQuery("#portfolio-grid").width();
                var postWidth = containerWidth / columns;
                postWidth = Math.floor(postWidth);

                jQuery(".portfolio_item").each(function(index) {
                    jQuery(this).css({
                        "width": postWidth + "px"
                    });
                });
            }

            function arrange() {
                setColumnWidth();
                $container.isotope('reLayout');
            }

            jQuery(window).on("debouncedresize", function(event) {
                arrange();
            });


            // Filter projects
            $('.filter a').on("click",(function() {
                var $this = $(this).parent('li');
                // don't proceed if already active
                if ($this.hasClass('active')) {
                    return;
                }

                var $optionSet = $this.parents('.filter');
                // change active class
                $optionSet.find('.active').removeClass('active');
                $this.addClass('active');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector
                });

                var hiddenItems = 0,
                    showenItems = 0;
                jQuery(".portfolio_item").each(function() {
                    if (jQuery(this).hasClass('portfolio_hidden')) {
                        hiddenItems++;
                    };
                });
                return false;
            }));
        });
    </script>
 @endsection
