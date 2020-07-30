@extends('frontend.layouts.master')

@section('title') Contacto @endsection

@section('description') Para mas informacion y consultas puedes ponerte en contacto con nosotros @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ asset('template/frontend/img/contact.jpg') }} @endsection

@section('content')
    <!-- start header -->
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 32%" style="background-image: url({{ asset('template/frontend/img/contact.jpg') }});">

        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <p class="intro__subtitle">Agricola Tres Hermanos</p>
                <h1 class="intro__title">Contacto</h1>
            </div>
        </div>
    </header>
    <!-- end header -->

    <main role="main">
        <!-- start section -->
        <section class="section">
            <div class="container">
                <div class="contact-address">
                    <address class="contact-address__inner">
                        <div class="row justify-content-lg-around">
                            <!-- start item -->
                            <div class="col-md-4 col-lg-3">
                                <div class="contact__item">
                                    <i class="contact__item__ico fontello-location"></i>
                                    <h4 class="contact__item__title">Direccion</h4>
                                    <p>
                                        Quillota 175, Oficina #1311, Puerto Montt.
                                        <br>
                                        Fundo Altamira, Llanquihue.
                                    </p>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- start item -->
                            <div class="col-md-4 col-lg-3">
                                <div class="contact__item">
                                    <i class="contact__item__ico fontello-phone-call"></i>

                                    <h4 class="contact__item__title">Telefono</h4>

                                    <p>
                                        +65 2272237
                                    </p>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- start item -->
                            <div class="col-md-4 col-lg-3">
                                <div class="contact__item">
                                    <i class="contact__item__ico fontello-mail"></i>
                                    <h4 class="contact__item__title">Email</h4>
                                    <p>
                                        sagricolatreshermanos@gmail.com
                                    </p>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </address>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="section section--no-pt">
            <div class="container">
                <div class="map-container">
                    <div id="here-map" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </section>
        <!-- start section -->
        <section class="section section--no-pt">
            <div class="container">
                <h4 class="h2">Enviar mensaje</h4>
                <form id="form-contact" action="{{ route('frontend.contact.send') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md">
                            <label class="input-wrp">
                                <input class="textfield" type="text" placeholder="Nombre" name="name" />
                            </label>
                        </div>
                        <div class="col-md">
                            <label class="input-wrp">
                                <input class="textfield" type="text" placeholder="Correo Electrónico" name="email" />
                            </label>
                        </div>
                    </div>
                    <label class="input-wrp">
                        <textarea class="textfield" placeholder="Mensaje" name="message"></textarea>
                    </label>
                    <button class="custom-btn primary" type="submit" role="button">Enviar</button>
                    <div id="form-contact-errors" style="margin-top: 20px; color: red;">
                        <p class="form-error" id="error_name"></p>
                        <p class="form-error" id="error_email"></p>
                        <p class="form-error" id="error_message"></p>
                    </div>
                    <div class="success-contact">
                        <strong>Mensaje enviado exitosamente!</strong>
                    </div>
                </form>
            </div>
        </section>
        <!-- end section -->
    </main>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css"/>
    <style>
        .success-contact {
            color: #155724;
            background-color: #d4edda;
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            display: none;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js" crossorigin="anonymous"></script>

    <script>
        const lat = '-41.471057';
        const lng = '-72.938661';

        function addDraggableMarker(map, behavior) {
            var marker = new H.map.Marker({lat: lat, lng: lng}, {
                volatility: true
            });

            map.addObject(marker);
        }

        var platform = new H.service.Platform({
            apikey: '{{ env('HERE_MAPS_API_KEY') }}'
        });

        var defaultLayers = platform.createDefaultLayers({
            lg: 'es'
        });

        var map = new H.Map(document.getElementById('here-map'),
            defaultLayers.raster.satellite.map, {
                center: {lat: lat, lng: lng},
                zoom: 16,
                pixelRatio: window.devicePixelRatio || 1
            });

        window.addEventListener('resize', () => map.getViewPort().resize());

        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

        var ui = H.ui.UI.createDefault(map, defaultLayers, 'es-ES');

        addDraggableMarker(map, behavior);
    </script>

    <script>
        function cleanAndHideErrors() {
            $('#form-contact-errors').find('.form-error').html('');
            $('#form-contact-errors').find('.form-error').hide();
        }

        function showFormErrors(res) {
            $.each(res.responseJSON.errors, function (key, value) {
                var p = document.getElementById('error_' + key);
                p.innerHTML = value;
                p.style.display = 'block';
            });
        }

        $(function () {
            $('#form-contact').submit(function (e) {
                e.preventDefault();

                cleanAndHideErrors();
                $('.success-contact').css('display', 'none');
                var formData = new FormData($(this)[0]);
                var url = $(this).attr('action');

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (res) {
                        cleanAndHideErrors();
                        $('#form-contact').trigger('reset');
                        $('.success-contact').show();
                    },
                    error: function (res) {
                        showFormErrors(res);
                    }
                });
            });
        });
    </script>
@endsection
