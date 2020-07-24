<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <title>Tres Hermanos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#4A8B71" />
    <meta name="msapplication-navbutton-color" content="#4A8B71" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#4A8B71" />

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('template/frontend/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('template/frontend/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('template/frontend/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('template/frontend/img/apple-touch-icon-114x114.png') }}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('template/frontend/css/style.min.css') }}" type="text/css">

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
        <a id="top-bar__logo" class="site-logo" href="index.html">AGRICOM</a>

        <a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

        <nav id="top-bar__navigation" role="navigation">
            <ul class="nav">
                <li><a href="#spy-services">Services</a></li>
                <li><a href="#spy-about">about</a></li>
                <li><a href="#spy-progress">progress</a></li>
                <li><a href="#spy-offer">offer</a></li>
                <li><a href="#spy-gallery">gallery</a></li>
                <li><a href="#spy-blog">blog</a></li>
                <li class="li-btn"><a class="custom-btn primary" href="#spy-get-in-touch">Get in touch</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- end top bar -->

@yield('content')

<!-- start footer -->
<footer id="footer" class="footer--style-3">
    <div class="footer__inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer__item">
                        <a class="site-logo" href="index.html">AGRICOM</a>

                        <div class="footer__text">
                            <p>
                                <strong>Evulates vast a real proven works discount secure care. Market invigorate a awesome.</strong>
                            </p>

                            <p>
                                Odor to yummy high racy bonus soaking mouthwatering. Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer
                            </p>
                        </div>

                        <p class="footer__copy">© 2019, Agricom. All rights reserved. Template by <a href="https://themeforest.net/user/artureanec" target="_blank">Artureanec</a></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="footer__item">
                        <h3 class="footer__title">QUiCK menu</h3>

                        <div class="row">
                            <div class="col">
                                <ul class="footer__menu">
                                    <li><a href="#">Home page</a></li>
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog Posts</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>

                            <div class="col">
                                <ul class="footer__menu">
                                    <li><a href="#">Documentsion</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Conference</a></li>
                                    <li><a href="#">Legal Agreement</a></li>
                                    <li><a href="#">Company Profile</a></li>
                                    <li><a href="#">Solutions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="footer__item">
                        <h3 class="footer__title">Contacts</h3>

                        <div class="company-contacts">
                            <address>
                                <p>
                                    <i class="fontello-location"></i>
                                    523 Sylvan Ave, 5th Floor Mountain View, CA 94041USA
                                </p>

                                <p>
                                    <i class="fontello-phone-call"></i>
                                    +1 (234) 56789,  +1 987 654 3210
                                </p>

                                <p>
                                    <i class="fontello-mail"></i>
                                    <a href="mailto:support@watchland.com">support@watchland.com</a>
                                </p>
                            </address>

                            <div class="social-btns">
                                <div class="social-btns__inner">
                                    <a class="fontello-twitter" href="#" target="_blank"></a>
                                    <a class="fontello-facebook" href="#" target="_blank"></a>
                                    <a class="fontello-linkedin-squared" href="#" target="_blank"></a>
                                    <a class="fontello-youtube" href="#" target="_blank"></a>
                                    <a class="fontello-gplus" href="#" target="_blank"></a>
                                    <a class="fontello-vimeo" href="#" target="_blank"></a>
                                    <a class="fontello-vkontakte" href="#" target="_blank"></a>
                                    <a class="fontello-instagram" href="#" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

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

</body>
</html>
