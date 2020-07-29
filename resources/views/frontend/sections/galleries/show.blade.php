@extends('frontend.layouts.master')

@section('title') {{ $gallery->name }} @endsection

@section('description') {{ $gallery->description }} @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ ($gallery->type=='Fotos') ? asset($gallery->files->first()->path) : asset($gallery->files->first()->getYoutubeThumbnail()) }} @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ ($gallery->type=='Fotos') ? asset($gallery->files->first()->path) : asset($gallery->files->first()->getYoutubeThumbnail()) }}')">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <p class="intro__subtitle">Galeria</p>
                <h1 class="intro__title">{{ $gallery->name }}</h1>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <div class="gallery gallery--style-2">
                <div class="gallery__inner">
                    <div class="row  js-isotope" data-isotope-options='{ "itemSelector": ".js-isotope__item", "transitionDuration": "0.8s", "percentPosition": "true"}'>
                        @foreach($gallery->files as $item)
                            <div class="col-12 col-md-6 col-lg-4  js-isotope__item  category-1">
                                <div class="gallery__item">
                                    <div class="gallery__item__inner">
                                        <figure>
                                            <img src="{{ ($gallery->type == 'Fotos') ? asset($item->path) : asset($item->getYoutubeThumbnail()) }}" style="background-image: url('{{ ($gallery->type == 'Fotos') ? asset($item->path) : asset($item->getYoutubeThumbnail()) }}');" alt="demo" />
                                            <a href="{{ ($gallery->type == 'Fotos') ? asset($item->path) : asset($item->getYoutubeEmbedUrl()) }}" data-gallery="gall"></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
