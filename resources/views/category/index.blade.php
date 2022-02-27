@php

    $categories = \TCG\Voyager\Models\Category::all();

    $posts = \TCG\Voyager\Models\Post::whereIn('category_id', request()->input('categories'))->get();

    $categoryPosts = collect([]);
    foreach ($posts->load('category') as $child) {
        $categoryPosts->push($child->category->name);
    }
    $categoryPosts = $categoryPosts->unique()->toArray();

@endphp

@extends('layout.master')

@section('description', setting('site.description'). ' - '. implode(", ", $categoryPosts))
@section('keywords', implode(", ", $categoryPosts))
@section('title', setting('site.title'). ' | '. implode(", ", $categoryPosts))

@section('content')

    <main class="search-page default">

        <div class="container">
            <div class="row">
                <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-2">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-toggle" data-toggle="collapse" href="#collapseExample2" role="button"
                                 aria-expanded="true" aria-controls="collapseExample2">
                                برند ها
                                <i class="now-ui-icons arrows-1_minimal-down"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="collapse show" id="collapseExample2">
                                <div class="ui-input ui-input--quick-search">
                                    <input type="text" class="ui-input-field ui-input-field--cleanable"
                                           placeholder="نام برند مورد نظر را بنویسید…">
                                    <span class="ui-input-cleaner"></span>
                                </div>
                                <div class="filter-option">
                                    <form action="{{ route('category') }}" method="post">
                                        @csrf
                                        @foreach($categories as $category)
                                            <div class="checkbox">
                                                <input id="{{$category->id}}" type="checkbox"
                                                       name="categories[]" value="{{ $category->id }}"
                                                       @if(in_array($category->name, $categoryPosts )) checked @endif
                                                >
                                                <label for="{{$category->id}}">
                                                    {{$category->name}}
                                                </label>
                                            </div>
                                        @endforeach
                                        <button type="submit" class="btn btn-primary">جستجو ...</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <input type="checkbox" name="checkbox" class="bootstrap-switch" checked />
                            <label for="">فقط کالاهای موجود</label>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <input type="checkbox" name="checkbox" class="bootstrap-switch" checked />
                            <label for="">فقط کالاهای آماده ارسال</label>
                        </div>
                    </div>
                </aside>

                <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-1">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <span>{{ setting('site.title') }}</span>
                                </a>
                            </li>
                            <li><span>برند</span></li>
                            @foreach($categoryPosts as $child)
                                <li>
                                    <span>{{ ($child) }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="listing default">
                        <div class="listing-counter">{{ $posts->count() }} کالا </div>

                        <div class="listing-header default">
                            <ul class="listing-sort nav nav-tabs justify-content-center" role="tablist"
                                data-label="مرتب‌سازی بر اساس :">
                                <li>
                                    <a class="active" data-toggle="tab" href="#related" role="tab"
                                       aria-expanded="false">مرتبط‌ترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#most-view" role="tab"
                                       aria-expanded="false">پربازدیدترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#new" role="tab" aria-expanded="true">جدیدترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#most-seller" role="tab"
                                       aria-expanded="false">پرفروش‌ترین‌</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#down-price" role="tab"
                                       aria-expanded="false">ارزان‌ترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#top-price" role="tab"
                                       aria-expanded="false">گران‌ترین</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content default text-center">
                            <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">

                                        @foreach($posts as $post)
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>{{ setting('site.title') }}</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="{{ route('post.show', $post->id) }}">
                                                        <img src="{{ Voyager::Image($post->image) }}" alt="{{ $post->title }}">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="{{ route('post.show', $post->id) }}">
                                                                    {{ $post->title }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        {{ $post->price }}
                                                                        <span class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="pager default text-center">
                            <ul class="pager-items">
                                <li>
                                    <a class="pager-item is-active" href="#">۱</a>
                                </li>

                                <line class="pager-items--partition"></line>
                                <li>
                                    <a class="pager-next"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
