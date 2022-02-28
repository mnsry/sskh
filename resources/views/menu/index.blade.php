@php

    $menu  = \TCG\Voyager\Models\MenuItem::where('url', request()->path())->first();
    $menus = collect([]);
    foreach ($menu->children as $child) {
        $menus->push($child->id);
        foreach ($child->children as $ch) {
            $menus->push($ch->id);
        }
    }
    $menus->push($menu->id);


    $posts = \TCG\Voyager\Models\Post::whereIn('menu_item_id', $menus)->get();
    $categoryPosts = collect([]);
    foreach ($posts->load('category') as $child) {
        $categoryPosts->push($child->category->slug);
    }
    $categoryPosts = $categoryPosts->unique()->toArray();


    $categoriesParent = \TCG\Voyager\Models\Category::whereNull('parent_id')->get();
    $categories = collect([]);
    foreach ($categoriesParent->load('children') as $category) {
        $categories->push($category);
        foreach ($category->children as $cat) {
            $categories->push($cat);
        }
    }

@endphp

@extends('layout.master')

@section('description', setting('site.description'). ' - '. $menu->title)
@section('keywords', implode(", ", $categoryPosts))
@section('title', setting('site.title'). ' | '. $menu->title)

@section('content')

    <main class="search-page default">

        <div class="container">
            <div class="row">
                <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-3">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-toggle" data-toggle="collapse" href="#collapseExample" role="button"
                                 aria-expanded="true" aria-controls="collapseExample">
                                دسته بندی
                                <i class="now-ui-icons arrows-1_minimal-down"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="collapse show" id="collapseExample">
                                <div class="filter-option">
                                    <ul>
                                        @if($menu->parent_id == null)
                                            <li>
                                                <a href="{{ $menu->url }}">
                                                    <span>{{ $menu->title }}</span>
                                                </a>
                                            </li>
                                            @foreach ($menu->children as $child)
                                                <li style="padding-right: 20px; padding-top: 10px">
                                                    <a href="{{ $child->url }}">
                                                        <span>{{ $child->title }}</span>
                                                    </a>
                                                </li>
                                                @foreach ($child->children as $ch)
                                                    <li style="padding-right: 40px; padding-top: 10px">
                                                        <a href="{{ $ch->url }}">
                                                            <span class="sun_menu">{{ $ch->title }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endforeach

                                        @else
                                            @foreach($menu->getParents() as $item)
                                                    @if($item->parent_id == null)
                                                    <li>
                                                        <a href="{{ $item->url }}">
                                                            <span>{{ $item->title }}</span>
                                                        </a>
                                                    </li>
                                                    @foreach ($item->children as $child)
                                                        <li style="padding-right: 20px; padding-top: 10px">
                                                            <a href="{{ $child->url }}">
                                                                <span>{{ $child->title }}</span>
                                                            </a>
                                                        </li>
                                                        @foreach ($child->children as $ch)
                                                            <li style="padding-right: 40px; padding-top: 10px">
                                                                <a href="{{ $ch->url }}">
                                                                    <span class="sun_menu">{{ $ch->title }}</span>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @endforeach
                                                    @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                                       @if(in_array($category->slug, $categoryPosts )) checked @endif
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

                <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-2 order-md-12">
                    <div class="breadcrumb-section default d-none d-sm-block">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <span> {{ setting('site.title') }} </span>
                                </a>
                            </li>
                            @if(!is_null($menu->getParents()))
                                @foreach($menu->getParents()->reverse() as $item)
                                    <li>
                                        <a href="{{ $item->url }}">
                                            <span> {{ $item->title }} </span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                            <li><span> {{ $menu->title }} </span></li>
                        </ul>
                    </div>

                    <nav class="d-sm-none">
                        <ul class="breadcrumb bg-white">
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <span> {{ setting('site.title') }} </span>
                                    <span class="text-black-50"> / </span>
                                </a>
                            </li>
                            @if(!is_null($menu->getParents()))
                                @foreach($menu->getParents()->reverse() as $item)
                                    <li>
                                        <a href="{{ $item->url }}">
                                            <span>  {{ $item->title }} </span>
                                            <span class="text-black-50"> / </span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                            <li>
                                <span class="h6">  {{ $menu->title }} </span>
                            </li>
                        </ul>
                    </nav>

                    <div class="listing default">
                        <div class="listing-counter d-none d-sm-block">{{ $posts->count() }} کالا </div>

                        <div class="listing-header default">
                            <ul class="listing-sort nav nav-tabs justify-content-center" role="tablist"
                                data-label="مرتب‌سازی بر اساس:">
                                <li>
                                    <a class="active" data-toggle="tab" href="#most-seller" role="tab"
                                       aria-expanded="false">جدیدترین</a>
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
                                                    <a class="product-box-img" href="{{ route('post.show', $post) }}">
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
