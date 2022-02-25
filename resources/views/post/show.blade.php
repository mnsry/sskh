@php
    $menuParent = $post->menuItem->getParents();
    //dd($menuParent);
    //$menuItem = \TCG\Voyager\Models\MenuItem::where('url', $post->id)->first();
@endphp

@extends('layout.master')

@section('content')
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('welcome') }}"><span>فروشگاه اینترنتی سولار صنعت</span></a>
                            </li>
                            @foreach($menuParent->reverse() as $child)
                                <li>
                                    <a href="{{ route($child->url) }}"><span>{{ $child->title }}</span></a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{ route($post->menuItem->url) }}"><span>{{ $post->menuItem->title }}</span></a>
                            </li>
                            <li>
                                <span>{{ $post->title }}</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <article class="product">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 text-center content-center">
                                <div class="product-gallery default mb-4">
                                    <img src="{{ Voyager::Image($post->image) }}" width="411" alt="{{ $post->title }}"/>
                                </div>

                                <div class="text-danger h5">
                                    <span> {{ $post->price }} </span>
                                    <span> تومان </span>
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

                            <div class="col-lg-8 col-sm-12">
                                <div class="product-title default">
                                    <h1><span>{{ $post->title }}</span></h1>
                                </div>

                                <div class="product-variants default">
                                    {{ $post->excerpt }}
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
                                                <h2 class="param-title mb-0">
                                                    نقد و بررسی تخصصی
                                                    <span> {{ $post->title }} </span>
                                                </h2>
                                                <div class="card card-body ">
                                                    {!! $post->body !!}
                                                </div>
                                            </article>
                                        </div>
                                        <div class="tab-pane params" id="params" role="tabpanel" aria-expanded="false">
                                            <article>
                                                <h2 class="param-title">
                                                    مشخصات فنی
                                                    <span>{{ $post->title }}</span>
                                                </h2>
                                                <section>
                                                    <h3 class="params-title">مشخصات کلی</h3>
                                                    <ul class="params-list">
{{--                                                        <li>--}}
{{--                                                            <div class="params-list-key">--}}
{{--                                                                <span class="block">ابعاد</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="params-list-value">--}}
{{--                                                                    <span class="block">--}}
{{--                                                                        7.7 × 70.9 × 143.6 میلی‌متر--}}
{{--                                                                    </span>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
                                                    </ul>
                                                </section>

                                            </article>
                                        </div>
                                        <div class="tab-pane" id="comments" role="tabpanel" aria-expanded="false">
                                            <article>
                                                <h2 class="param-title">
                                                    نظرات کاربران
                                                    <span>0 نظر</span>
                                                </h2>
                                                <div class="comments-area default">
                                                    <ol class="comment-list">
                                                        <!-- #comment-## -->
{{--                                                        <li>--}}
{{--                                                            <div class="comment-body">--}}
{{--                                                                <div class="comment-author">--}}
{{--                                                                    <img alt="" src="assets/img/default-avatar.png" class="avatar"><cite class="fn">حسن</cite>--}}
{{--                                                                    <span class="says">گفت:</span> </div>--}}

{{--                                                                <div class="commentmetadata"><a href="#">--}}
{{--                                                                        اسفند ۲۰, ۱۳۹۶ در ۹:۴۱ ب.ظ</a> </div>--}}

{{--                                                                <p>لورم ایپسوم متن ساختگی</p>--}}

{{--                                                                <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
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
