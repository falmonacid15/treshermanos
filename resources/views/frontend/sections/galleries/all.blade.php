@extends('frontend.layouts.master')

@section('title') Gallerias @endsection

@section('description') Puedes ver videos e imagenes de nuestro trabajo @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ asset('template/frontend/img/galleries.jpg') }} @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ asset('template/frontend/img/galleries.jpg') }}');">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <p class="intro__subtitle">Nuestras</p>
                <h1 class="intro__title">Galerias</h1>
            </div>
        </div>
    </header>
    <br>
    <br>

    @if($galleries->count())
        @foreach($galleries as $item)
            <a id="spy-offer" class="ancor"></a>
            <section class="section section--screen section--background section-banner" style=" @if($item->type == 'Fotos') background-image: url('{{ asset($item->files->first()->path)  }}'); @else background-image: url('{{ asset($item->files->first()->getYoutubeThumbnail())  }}'); @endif">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-6">
                            <div class="col-MB-30">
                                <h2 class="section-banner__title" style="color:white">{{ $item->name }}</h2>
                                <h4 style="color:white">{{ $item->description }}</h4>
                            </div>
                            <p>
                                <a class="custom-btn primary big" href="{{  route('frontend.galleries.show', $item->slug) }}" style="color:white; background-color: #F1CF69;">Ver Galeria</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <div style="margin-left: 70px; margin-top: 40px">
            {!! $galleries->links('vendor.pagination.bootstrap-4') !!}
        </div>
    @else
        <h3 class="text-center" style="margin-top: 50px; margin-bottom: 50px;">Lo sentimos, aun no tenemos registros :(</h3>
    @endif

@endsection


