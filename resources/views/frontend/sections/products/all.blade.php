@extends('frontend.layouts.master')

@section('title') Productos @endsection

@section('description') Revisa todos nuestros productos @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ asset('template/frontend/img/products.jpg') }}');">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <p class="intro__subtitle">Nuestros</p>
                <h1 class="intro__title">Productos</h1>
            </div>
        </div>
    </header>

    <main role="main">
        <section class="section">
            <div class="container">
                <div class="products" style="margin-bottom: 50px;">
                    <div class="products__inner">
                        @foreach ($products as $item)
                            @if ($loop->iteration % 2 == 0)
                                <div class="row no-gutters align-items-md-center">
                                    <!-- start item -->
                                    <div class="col-md-6">
                                        <div class="product__item product__item--text">
                                            <i class="product__item__ico product__item__ico--1"></i>

                                            <h3 class="product__item__title"><a href="{{ route('frontend.products.show', $item->slug) }}">{{ $item->name }}</a></h3>

                                            <span class="product_type_span">{{ $item->productType->name }}</span>

                                            <p>
                                                {{ $item->description }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product__item product__item--image">
                                            <a href="{{ route('frontend.products.show', $item->slug) }}">
                                                <img class="img-fluid" src="{{ asset($item->image_path) }}" alt="{{ $item->name }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row no-gutters align-items-md-center">
                                    <div class="col-md-6">
                                        <div class="product__item product__item--text">
                                            <i class="product__item__ico product__item__ico--1"></i>

                                            <h3 class="product__item__title"><a href="{{ route('frontend.products.show', $item->slug) }}">{{ $item->name }}</a></h3>

                                            <span class="product_type_span">{{ $item->productType->name }}</span>

                                            <p>
                                                {{ $item->description }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="product__item product__item--image">
                                            <a href="{{ route('frontend.products.show', $item->slug) }}">
                                                <img class="img-fluid" src="{{ asset($item->image_path) }}" alt="{{ $item->name }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                {!! $products->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </section>
    </main>
@endsection

@section('styles')
    <style>
        .product_type_span {
            color: #fff;
            background-color: #7BAA97;
            border-radius: 10rem;
            display: inline-block;
            font-size: 80%;
            font-weight: 700;
            padding: 4px;
        }
    </style>
@endsection
