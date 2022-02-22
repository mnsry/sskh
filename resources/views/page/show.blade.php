@extends('layout.master')

@section('content')

    <main class="single-product default">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <span>فروشگاه اینترنتی سولار صنعت</span>
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="product-gallery default">
                                    <img class="zoom-img" id="img-product-zoom" src="{{ Voyager::Image($page->image) }}"
                                         data-zoom-image="assets/img/product/13351544.jpg" width="411"/>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <div class="product-title default">
                                    <h1><span>{{ $page->title }}</span></h1>
                                </div>

                                <div class="product-variants default">
                                    {{ $page->excerpt }}
                                </div>

                                <div class="product-variants default">
                                    {!! $page->body !!}
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>

@endsection
