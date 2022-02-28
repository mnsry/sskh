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

            
        </div>
    </main>

@endsection
