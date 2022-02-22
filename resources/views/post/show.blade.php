@extends('layout.master')

@section('content')
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><span>فروشگاه اینترنتی سولار صنعت</span></a>
                            </li>
                            <li>
                                <a href="#"><span>اتوماسیون صنعتی</span></a>
                            </li>
                            <li>
                                <a href="#"><span>plc</span></a>
                            </li>
                            <li>
                                <span>پی ال سی دلتا مدل 10sx</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <article class="product">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="product-gallery default">
                                    <img class="zoom-img" id="img-product-zoom" src="{{ Voyager::Image($post->image) }}"
                                         data-zoom-image="assets/img/product/13351544.jpg" width="411"/>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="product-title default">
                                    <h1><span>{{ $post->title }}</span></h1>
                                </div>
                                <div class="product-directory default">
                                    <ul>
                                        <li>
                                            <span>برند</span> :
                                            <span class="product-brand-title">Delta</span>
                                        </li>
                                        <li>
                                            <span>دسته‌بندی</span> :
                                            <a href="#" class="btn-link-border">
                                                پی ال سی دلتا
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-variants default">
                                    <span>انتخاب خروجی: </span>
                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio1" value="option1">
                                        <label for="radio1">
                                            ترانزیستوری
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio2" value="option2" checked="">
                                        <label for="radio2">
                                            رله ای
                                        </label>
                                    </div>

                                </div>
                                <div class="product-guarantee default">
                                    <i class="fa fa-check-circle"></i>
                                    <p class="product-guarantee-text">گارانتی اصالت و سلامت فیزیکی کالا</p>
                                </div>
                                <div class="product-delivery-seller default">
                                    <p>
                                        <i class="now-ui-icons shopping_shop"></i>
                                        <span>فروشنده:‌</span>
                                        <a href="#" class="btn-link-border">سولار صنعت</a>
                                    </p>
                                </div>
                                <div class="price-product defualt">
                                    <div class="price-value">
                                        <span> ۱۵,۳۹۰,۰۰۰ </span>
                                        <span class="price-currency">تومان</span>
                                    </div>
                                    <div class="price-discount" data-title="تخفیف">
                                            <span>
                                                ۰
                                            </span>
                                        <span>%</span>
                                    </div>
                                </div>
                                <div class="product-add default">
                                    <div class="parent-btn">
                                        <a href="#" class="dk-btn dk-btn-info">
                                            افزودن به سبد خرید
                                            <i class="now-ui-icons shopping_cart-simple"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 center-breakpoint">
                                <div class="product-guaranteed default">
                                    بیش از ۱۸۰ نفر از خریداران این محصول را پیشنهاد داده‌اند
                                </div>
                                <div class="product-params default">
                                    <ul data-title="ویژگی‌های محصول">
                                        <li>
                                            <span>حافظه داخلی: </span>
                                            <span> 256 گیگابایت </span>
                                        </li>
                                        <li>
                                            <span>شبکه های ارتباطی: </span>
                                            <span> 2G,3G,4G </span>
                                        </li>
                                        <li>
                                            <span>رزولوشن عکس: </span>
                                            <span> 12.0 مگاپیکسل</span>
                                        </li>
                                        <li>
                                            <span>تعداد سیم کارت: </span>
                                            <span> تک </span>
                                        </li>
                                        <li>
                                            <span>ویژگی‌های خاص: </span>
                                            <span> مقاوم در برابر آب
                                                    مناسب عکاسی
                                                    مناسب عکاسی سلفی
                                                    مناسب بازی
                                                    مجهز به حس‌گر تشخیص چهره
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="col-12 default no-padding">
                        <div class="product-tabs default">
                            <div class="box-tabs default">
                                <ul class="nav" role="tablist">
                                    <li class="box-tabs-tab">
                                        <a class="active" data-toggle="tab" href="#desc" role="tab" aria-expanded="true">
                                            <i class="now-ui-icons objects_umbrella-13"></i> نقد و بررسی
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                            <i class="now-ui-icons shopping_cart-simple"></i> مشخصات
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                            <i class="now-ui-icons shopping_shop"></i> نظرات کاربران
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-body default">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="desc" role="tabpanel" aria-expanded="true">
                                            <article>
                                                <h2 class="param-title">
                                                    نقد و بررسی تخصصی
                                                    <span>{{ $post->title }}</span>
                                                </h2>
                                                <div class="card card-body">
                                                    {!! $post->body !!}
                                                </div>
                                            </article>
                                        </div>
                                        <div class="tab-pane params" id="params" role="tabpanel" aria-expanded="false">
                                            <article>
                                                <h2 class="param-title">
                                                    مشخصات فنی
                                                    <span>Apple iPhone X 256GB Mobile Phone</span>
                                                </h2>
                                                <section>
                                                    <h3 class="params-title">مشخصات کلی</h3>
                                                    <ul class="params-list">
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">ابعاد</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        7.7 × 70.9 × 143.6 میلی‌متر
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">توضیحات سیم کارت</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        سایز نانو (8.8 × 12.3 میلی‌متر)
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">وزن</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        174 گرم
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">ویژگی‌های خاص</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        مقاوم در برابر آب , مناسب عکاسی , مناسب عکاسی
                                                                        سلفی , مناسب بازی , مجهز به حس‌گر تشخیص چهره
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">تعداد سیم کارت</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        تک سیم کارت
                                                                    </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </section>
                                                <section>
                                                    <h3 class="params-title">پردازنده</h3>
                                                    <ul class="params-list">
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">تراشه</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        Apple A11 Bionic Chipset
                                                                    </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span class="block">نوع پردازنده</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        64 بیت
                                                                    </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </article>
                                        </div>
                                        <div class="tab-pane" id="comments" role="tabpanel" aria-expanded="false">
                                            <article>
                                                <h2 class="param-title">
                                                    نظرات کاربران
                                                    <span>۱۲۳ نظر</span>
                                                </h2>
                                                <div class="comments-area default">
                                                    <ol class="comment-list">
                                                        <!-- #comment-## -->
                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="comment-author">
                                                                    <img alt="" src="assets/img/default-avatar.png" class="avatar"><cite class="fn">حسن</cite>
                                                                    <span class="says">گفت:</span> </div>

                                                                <div class="commentmetadata"><a href="#">
                                                                        اسفند ۲۰, ۱۳۹۶ در ۹:۴۱ ب.ظ</a> </div>

                                                                <p>لورم ایپسوم متن ساختگی</p>

                                                                <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>
                                                            </div>
                                                        </li>
                                                        <!-- #comment-## -->
                                                    </ol>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
