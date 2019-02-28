@extends('Main.layout.base')

@section('css')
@endsection
@section('content')
    <!-- Main Content Starts -->
    <div class="span12" id="content">
        <dl class="faq-list">
            <dt class="faq-list_h">
                <span class="marker">پرسش ؟</span>
                پرسش اول
            </dt>
            <dd class="faq-list_body">
                <span class="marker">جواب</span>
                <p>پاسخ پرسش اول</p>
            </dd>
            <dt class="faq-list_h">
                <span class="marker">پرسش ؟</span>
                پرسش دوم
            </dt>
            <dd class="faq-list_body">
                <span class="marker">جواب</span>
                <p>پاسخ پرسش دوم</p>
            </dd>
            <dt class="faq-list_h">
                <span class="marker">پرسش ؟</span>
                پرسش سوم
            </dt>
            <dd class="faq-list_body">
                <span class="marker">جواب</span>
                <p>پاسخ پرسش سوم</p>
            </dd>
            <dt class="faq-list_h">
                <span class="marker">پرسش ؟</span>
                لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ؟
            </dt>
            <dd class="faq-list_body">
                <span class="marker">جواب</span>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>
            </dd>
            <dt class="faq-list_h">
                <span class="marker">پرسش ؟</span>
                لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ؟
            </dt>
            <dd class="faq-list_body">
                <span class="marker">جواب</span>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>
            </dd>
            <dt class="faq-list_h">
                <span class="marker">پرسش ؟</span>
                لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ؟
            </dt>
            <dd class="faq-list_body">
                <span class="marker">جواب</span>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>
            </dd>
            <dt class="faq-list_h">
                <span class="marker">پرسش ؟</span>
                لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ؟
            </dt>
            <dd class="faq-list_body">
                <span class="marker">جواب</span>
                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>
            </dd>
        </dl>
    </div>
    <!-- Main Content Ends -->
@endsection
@section('javascript')
    <!-- Template JS Files -->
    <script type="text/javascript" src="{{asset('/main/js/superfish.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.elastislide.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jquery.mobilemenu.js')}}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/jflickrfeed.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('/main/js/bootstrap.min.js')}}"></script>
@endsection