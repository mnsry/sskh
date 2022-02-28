@php
    $menuParent = $post->menuItem->getParents();
@endphp

@extends('layout.master')

@section('description', setting('site.description'). ' - '. $post->meta_description)
@section('keywords', $post->meta_keywords)
@section('title', setting('site.title'). ' | '. $post->seo_title)

@section('content')
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('welcome') }}"><span>{{ setting('site.title') }}</span></a>
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
                                    <br>
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
