@extends('layout.master')

@section('description', setting('site.description'). ' - '. $page->meta_description)
@section('keywords', $page->meta_keywords)
@section('title', setting('site.title'). ' | '. $page->title)

@section('content')

    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <span>{{ setting('site.title') }}</span>
                                </a>
                            </li>
                            <li><span>{{ $page->title }}</span></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <article class="product">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <div class="product-gallery default">
                                    <img src="{{ Voyager::Image($page->image) }}" alt="{{ $page->title }}" width="411"/>
                                </div>
                            </div>

                            
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>

@endsection
