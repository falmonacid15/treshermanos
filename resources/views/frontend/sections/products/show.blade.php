@extends('frontend.layouts.master')

@section('title') {{ $product->name }} @endsection

@section('description') {{ $product->description }} @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ asset($product->image_path) }} @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ asset($product->image_path) }}');">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <p class="intro__subtitle">{{ $product->productType->name }}</p>
                <h1 class="intro__title">{{ $product->name }}</h1>
            </div>
        </div>
    </header>
    <main role="main">
        <!-- start section -->
        <section class="section">
            <div class="container">
                <div class="single-content">
                    <h2 class="title">{{ $product->name }}</h2>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="column">
                                    <img class="img-fluid" src="{{ asset($product->image_path) }}" alt="demo" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="column">
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="column">
                                    <ul class="details">
                                        <li>
                                            <p class="title">Tipo</p>
                                            <strong>{{ $product->productType->name }}</strong>
                                        </li>

                                        <li>
                                            <p class="title">Compartir</p>
                                            <div class="social-btns">
                                                <div class="social-btns__inner">
                                                    <a class="fontello-twitter" href="https://www.twitter.com/intent/tweet?url={{ request()->url() }}" target="_blank"></a>
                                                    <a class="fontello-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}" target="_blank"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
@endsection

