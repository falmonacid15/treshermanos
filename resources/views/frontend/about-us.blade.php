@extends('frontend.layouts.master')

@section('title') Nosotros @endsection

@section('description') Nuestra historia, origen y nuestra vision como empresa agricultora en la zona @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ asset('template/frontend/img/about-us.jpg') }} @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ asset('template/frontend/img/about-us.jpg') }}');">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <h1 class="intro__title">Nosotros</h1>
            </div>
        </div>
    </header>
    <main role="main">
        <section class="section section--no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="col-MB-30">
                            <h2>Agricola Tres Hermanos</h2>
                        </div>
                        <p>
                            Sociedad Agrícola Tres Hermanos Ltda. es una empresa familiar creada a fines del año 2011, que se caracteriza por la producción de una variedad de papas sembradas en el Fundo Altamira, ubicado en la comuna de Llanquihue. El campo fue comprado en agosto de 2012, año en que se comienzan los cultivos. A fines de 2016, se empiezan a construir galpones para la protección del proceso y su almacenamiento.
                        </p>
                        <p>
                            Hemos modernizado el proceso, mecanizando cada una de las etapas del cultivo, vale decir, desde las labores de preparación de suelo, cama de semilla, siembra, fertilizaciones, fumigaciones y cosecha; avanzando también en el procesamiento del producto.
                        </p>
                        <p>
                            “Contamos con un pequeño equipo de trabajo que realiza gran variedad de tareas y sin ellos no podríamos haber crecido de la manera que lo hemos hecho” Pablo Aguilera Soto, Gerente de la Agrícola” Pablo Aguilera Soto, Gerente de la Agrícola.
                        </p>
                    </div>

                    <div class="col-lg-4 offset-lg-1">
                        <div class="col-MB-30">
                            <img class="d-block mx-auto img-fluid" src="{{ asset('template/frontend/img/logo-about.png') }}" alt="demo" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
