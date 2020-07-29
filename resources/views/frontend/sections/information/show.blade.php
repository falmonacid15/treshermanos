@extends('frontend.layouts.master')

@section('title') {{ $information->title }} @endsection

@section('description') {{ $information->description }} @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ asset($information->image_path) }} @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ asset($information->image_path) }}');">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <h1 class="intro__title">{{ $information->title }}</h1>
            </div>
        </div>
    </header>
    <main role="main">
        <section class="section">
            <div class="container">
                <div class="single-content">
                    <h2 class="title">{{ $information->title }}</h2>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="column">
                                    <img class="img-fluid" src="{{ asset($information->image_path) }}" alt="{{ $information->title }}" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="column">
                                    <p>
                                        {{ $information->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="column">
                                    <ul class="details">
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
    </main>
@endsection

