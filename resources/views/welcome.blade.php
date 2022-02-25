@php
    $categories = \TCG\Voyager\Models\Category::all();
    $pages = \TCG\Voyager\Models\Page::all();
    $posts = \TCG\Voyager\Models\Post::all();
@endphp

@extends('layout.master')

@section('content')
    <main class="main default">
        <div class="container">

            <!-- banner -->
            <div class="row banner-ads">
                <div class="col-12">
                    <section class="banner">
                        <a href="#">
                            <img src="{{ Voyager::Image(setting('site.home_banner')) }}" alt="سولار صنعت">
                        </a>
                    </section>
                </div>
            </div>
            <!-- banner -->

            <div class="row">

                <div class="col-12 col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span>صفحات سایت</span>
                                    </h3>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">

                                    @foreach($pages as $page)
                                        <div class="item">
                                            <a href="{{ route('page.show', $page) }}">
                                                <img src="{{ Voyager::Image($page->image) }}"
                                                     class="img-fluid" alt="{{ $page->title }}">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="{{ route('page.show', $page) }}">{{ $page->title }}</a>
                                                <br>
                                                <a href="{{ route('page.show', $page) }}">{{ $page->excerpt }}</a>
                                            </h2>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card">
                                        <a href="#" target="_blank">
                                            <img class="img-fluid" src="{{ Voyager::Image(setting('site.home_banner_mini1')) }}" alt="سولار صنعت">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card">
                                        <a href="#" target="_top">
                                            <img class="img-fluid" src="{{ Voyager::Image(setting('site.home_banner_mini2')) }}" alt="سولار صنعت">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span>محصولات سایت</span>
                                    </h3>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">

                                    @foreach($posts as $post)
                                        <div class="item">
                                            <a href="{{ route('post.show', $post) }}">
                                                <img src="{{ Voyager::Image($post->image) }}"
                                                     class="img-fluid" alt="{{ $post->title }}">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
                                                <br>
                                                <a href="{{ route('post.show', $post) }}">{{ $post->excerpt }}</a>
                                            </h2>
                                            <div class="price">
                                                <del><span>{{ $post->old_price }} <span>تومان </span></span></del>
                                                <ins><span>{{ $post->price }} <span>تومان </span></span></ins>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="sidebar col-12 col-lg-3 order-2 order-lg-1">
                    <div class="sidebar-inner default">
                        <div class="widget-suggestion widget card">
                            <header class="card-header">
                                <h3 class="card-title">پیشنهاد لحظه ای</h3>
                            </header>
                            <div id="progressBar">
                                <div class="slide-progress"></div>
                            </div>

                            <div id="suggestion-slider" class="owl-carousel owl-theme">

                                @foreach($posts as $post)
                                    <div class="item">
                                        <a href="{{ route('post.show', $post) }}">
                                            <img src="{{ Voyager::Image($post->image) }}"
                                                 class="w-100" alt="{{ $post->title }}">
                                        </a>
                                        <h3 class="product-title">
                                            <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
                                        </h3>
                                        <div class="price">
                                            <span class="amount">{{ $post->price }}<span>تومان</span></span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="widget-services widget card hidden-md">
                            <div class="row">
                                <div class="feature-item col-12">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('assets/img/svg/return-policy.svg') }}">
                                    </a>
                                    <p>ضمانت برگشت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('assets/img/svg/payment-terms.svg') }}">
                                    </a>
                                    <p>پرداخت درمحل</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('assets/img/svg/delivery.svg') }}">
                                    </a>
                                    <p>تحویل اکسپرس</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('assets/img/svg/origin-guarantee.svg') }}">
                                    </a>
                                    <p>تضمین بهترین قیمت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('assets/img/svg/contact-us.svg') }}">
                                    </a>
                                    <p>پشتیبانی 24 ساعته</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="brand-slider card">
                        <header class="card-header">
                            <h3 class="card-title"><span>برندهای ویژه</span></h3>
                        </header>
                        <div class="owl-carousel">
                            @foreach($categories as $category)
                                <div class="item">
                                    <form action="{{ route('category') }}" method="post">
                                        @csrf
                                        <button class="btn btn-link" name="categories[]" value="{{ $category->id }}">
                                            <img src="{{ Voyager::Image($category->image) }}"
                                                 width="205px" alt="{{ $category->name }} "
                                            >
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
