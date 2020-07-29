@extends('frontend.layouts.master')

@section('title') Información Relevante @endsection

@section('description') Información útil sobre datos de agricultura @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ asset('template/frontend/img/information.jpg') }} @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ asset('template/frontend/img/information.jpg') }}');">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <p class="intro__subtitle">Información</p>
                <h1 class="intro__title">Relevante</h1>
            </div>
        </div>
    </header>

    @if ($information->count())
        <main role="main">
            <section class="section">
                <div class="container">
                    <div class="products" style="margin-bottom: 50px;">
                        <div class="products__inner">
                            @foreach ($information as $item)
                                @if ($loop->iteration % 2 == 0)
                                    <div class="row no-gutters align-items-md-center">
                                        <!-- start item -->
                                        <div class="col-md-6">
                                            <div class="product__item product__item--text">
                                                <i class="product__item__ico product__item__ico--1"></i>

                                                <h3 class="product__item__title"><a href="{{ route('frontend.information.show', $item->slug) }}">{{ $item->title }}</a></h3>

                                                <p>
                                                    {{ $item->description }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="product__item product__item--image">
                                                <a href="{{ route('frontend.information.show', $item->slug) }}">
                                                    <img class="img-fluid" src="{{ asset($item->image_path) }}" alt="{{ $item->title }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row no-gutters align-items-md-center">
                                        <div class="col-md-6">
                                            <div class="product__item product__item--text">
                                                <i class="product__item__ico product__item__ico--1"></i>

                                                <h3 class="product__item__title"><a href="{{ route('frontend.information.show', $item->slug) }}">{{ $item->title }}</a></h3>

                                                <p>
                                                    {{ $item->description }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="product__item product__item--image">
                                                <a href="{{ route('frontend.information.show', $item->slug) }}">
                                                    <img class="img-fluid" src="{{ asset($item->image_path) }}" alt="{{ $item->title }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    {!! $information->links('vendor.pagination.bootstrap-4') !!}
                </div>
            </section>
        </main>
    @else
        <h3 class="text-center" style="margin-top: 50px; margin-bottom: 50px;">Lo sentimos, aun no tenemos registros :(</h3>
    @endif
@endsection
