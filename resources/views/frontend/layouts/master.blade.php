<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <title>Agrícola Tres Hermanos | @yield('title', 'Inicio')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="@yield('description', 'Empresa Familiar dedicada a la producción Agrícola y Pecuaria')">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#4A8B71" />
    <meta name="msapplication-navbutton-color" content="#4A8B71" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#4A8B71" />

    <link rel="canonical" href="@yield('url', request()->url())">
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Agrícola Tres Hermanos | @yield('title', 'Inicio')">
    <meta property="og:description" content="@yield('description', 'Empresa Familiar dedicada a la producción Agrícola y Pecuaria')">
    <meta property="og:url" content="@yield('url', request()->url())">
    <meta property="og:site_name" content="Agricola Tres Hermanos | Producción Agrícola y Pecuaria">
    <meta property="og:image" content="@yield('image', asset('template/frontend/img/logo.png'))">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="@yield('description', 'Empresa Familiar dedicada a la producción Agrícola y Pecuaria')">
    <meta name="twitter:title" content="Agrícola Tres Hermanos | @yield('title', 'Inicio')">


    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('template/frontend/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('template/frontend/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('template/frontend/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('template/frontend/img/apple-touch-icon-114x114.png') }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('template/frontend/css/style.min.css') }}" type="text/css">

    @yield('styles')

    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700', 'Raleway:400,400i,500,500i,700,700i'] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement;
        _html.className = _html.className.replace("no-js","js");
    </script>
    <script type="text/javascript" src="{{ asset('template/frontend/js/device.min.js') }}"></script>
</head>
<body class="page page-landing">

<!-- start top bar -->
<div id="top-bar" class="top-bar--style-3">
    <div class="container">
        <a id="top-bar__logo" class="site-logo" href="{{ route('frontend.home') }}" style="background-image: url('{{ asset('template/frontend/img/logo-header.png') }}'); width: 60px; height: 60px">Tres Hermanos</a>

        <a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

        <nav id="top-bar__navigation" role="navigation">
            <ul class="nav">
                <li><a href="{{ route('frontend.home') }}">Inicio</a></li>
                <li><a href="{{ route('frontend.products.all') }}">Productos</a></li>
                <li><a href="{{ route('frontend.galleries.all') }}">Galeria</a></li>
                <li><a href="{{ route('frontend.information.all') }}">Informacion Relevante</a></li>
                <li><a href="{{ route('frontend.about-us') }}">Nosotros</a></li>
                <li class="li-btn"><a class="custom-btn primary" href="{{ route('frontend.contact.form') }}">Contacto</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- end top bar -->

@yield('content')

<footer id="footer" class="footer--style-1">
    <div class="footer__inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="footer__item">
                        <a class="site-logo" href="{{ route('frontend.home') }}" style="background-image: url('{{ asset('template/frontend/img/logo-footer.png') }}'); width: 300px; height: 90px;">Tres Hermanos</a>

                        <p class="footer__copy">© {{ \Carbon\Carbon::now()->year }}, Tres Hermanos. Todos los derechos reservados.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="footer__item">
                        <h3 class="footer__title">MENU</h3>

                        <div class="row">
                            <div class="col">
                                <ul class="footer__menu">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Galeria</a></li>
                                    <li><a href="#">Nosotros</a></li>
                                </ul>
                            </div>

                            <div class="col">
                                <ul class="footer__menu">
                                    <li><a href="#">Productos</a></li>
                                    <li><a href="#">Informacion Relevante</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="btn-to-top-wrap">
    <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="1000"></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/jquery-2.2.4.min.js"><\/script>')</script>

<script type="text/javascript" src="{{ asset('template/frontend/js/main.min.js') }}"></script>
<script type="text/javascript">
    /*!
     * Bootstrap v3.3.5 (http://getbootstrap.com)
     * Copyright 2011-2016 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     */
    if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var s=t.fn.jquery.split(" ")[0].split(".");if(s[0]<2&&s[1]<9||1==s[0]&&9==s[1]&&s[2]<1||s[0]>2)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3")}(jQuery),+function(t){"use strict";function s(e,i){this.$body=t(document.body),this.$scrollElement=t(t(e).is(document.body)?window:e),this.options=t.extend({},s.DEFAULTS,i),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",t.proxy(this.process,this)),this.refresh(),this.process()}function e(e){return this.each(function(){var i=t(this),o=i.data("bs.scrollspy"),r="object"==typeof e&&e;o||i.data("bs.scrollspy",o=new s(this,r)),"string"==typeof e&&o[e]()})}s.VERSION="3.3.6",s.DEFAULTS={offset:10},s.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},s.prototype.refresh=function(){var s=this,e="offset",i=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),t.isWindow(this.$scrollElement[0])||(e="position",i=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var s=t(this),o=s.data("target")||s.attr("href"),r=/^#./.test(o)&&t(o);return r&&r.length&&r.is(":visible")&&[[r[e]().top+i,o]]||null}).sort(function(t,s){return t[0]-s[0]}).each(function(){s.offsets.push(this[0]),s.targets.push(this[1])})},s.prototype.process=function(){var t,s=this.$scrollElement.scrollTop()+this.options.offset,e=this.getScrollHeight(),i=this.options.offset+e-this.$scrollElement.height(),o=this.offsets,r=this.targets,l=this.activeTarget;if(this.scrollHeight!=e&&this.refresh(),s>=i)return l!=(t=r[r.length-1])&&this.activate(t);if(l&&s<o[0])return this.activeTarget=null,this.clear();for(t=o.length;t--;)l!=r[t]&&s>=o[t]&&(void 0===o[t+1]||s<o[t+1])&&this.activate(r[t])},s.prototype.activate=function(s){this.activeTarget=s,this.clear();var e=this.selector+'[data-target="'+s+'"],'+this.selector+'[href="'+s+'"]',i=t(e).parents("li").addClass("active");i.parent(".dropdown-menu").length&&(i=i.closest("li.dropdown").addClass("active")),i.trigger("activate.bs.scrollspy")},s.prototype.clear=function(){t(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var i=t.fn.scrollspy;t.fn.scrollspy=e,t.fn.scrollspy.Constructor=s,t.fn.scrollspy.noConflict=function(){return t.fn.scrollspy=i,this},t(window).on("load.bs.scrollspy.data-api",function(){t('[data-spy="scroll"]').each(function(){var s=t(this);e.call(s,s.data())})})}(jQuery);
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var bodyNode = document.body || document.getElementsByTagName('body')[0],
            nMenuToggler = document.getElementById('top-bar__navigation-toggler');
        jMenuToggler = $(nMenuToggler),
            TopBarHeight = 0;

        if ( jMenuToggler.is(':visible') )
        {
            TopBarHeight = 71;

            $(bodyNode).scrollspy({target: "#top-bar", offset: TopBarHeight});
        }
        else
        {
            TopBarHeight = 81;

            $(bodyNode).scrollspy({target: "#top-bar", offset: TopBarHeight});
        };
    });
</script>
<!-- Custom JS -->
@yield('scripts')
</body>
</html>
