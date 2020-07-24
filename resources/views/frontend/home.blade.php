@extends('frontend.layouts.master')

@section('content')
    <!-- start header -->
    <header id="start-screen" class="start-screen--style-1">
        <div id="vegas-slider" data-dots="true">
            <div class="vegas-control">
                <span id="vegas-control__prev" class="vegas-control__btn">Anterior</span>
                <span id="vegas-control__next" class="vegas-control__btn">Siguiente</span>
            </div>
        </div>

        <div id="start-screen_content-container">
            @if($slider->count())
                @foreach($slider as $item)
                    <div class="start-screen__content start-screen__content-first">
                        <div class="v-align">
                            <div class="v-middle">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-xl-10">
                                            <p class="title">{{ $item->title }}</p>

                                            <p class="subtitle">
                                                {{ $item->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4>¡No existen registros!</h4>
            @endif
        </div>

        <!-- defaul vegas styles -->
        <style type="text/css">
            .vegas-overlay,.vegas-slide,.vegas-slide-inner,.vegas-timer,.vegas-wrapper{position:absolute;top:0;left:0;bottom:0;right:0;overflow:hidden;border:none;padding:0;margin:0}.vegas-overlay{opacity:.5;background:url(overlays/02.png) center center}.vegas-timer{top:auto;bottom:0;height:2px}.vegas-timer-progress{width:0;height:100%;background:#fff;-webkit-transition:width ease-out;transition:width ease-out}.vegas-timer-running .vegas-timer-progress{width:100%}.vegas-slide,.vegas-slide-inner{margin:0;padding:0;background:center center no-repeat;-webkit-transform:translateZ(0);transform:translateZ(0)}body .vegas-container{overflow:hidden!important;position:relative}.vegas-video{min-width:100%;min-height:100%;width:auto;height:auto}body.vegas-container{overflow:auto;position:static;z-index:-2}body.vegas-container>.vegas-overlay,body.vegas-container>.vegas-slide,body.vegas-container>.vegas-timer{position:fixed;z-index:-1}:root body.vegas-container>.vegas-overlay,:root body.vegas-container>.vegas-slide,_::full-page-media,_:future{bottom:-76px}.vegas-transition-blur,.vegas-transition-blur2{opacity:0;-webkit-filter:blur(32px);filter:blur(32px)}.vegas-transition-blur-in,.vegas-transition-blur2-in{opacity:1;-webkit-filter:blur(0);filter:blur(0)}.vegas-transition-blur2-out{opacity:0}.vegas-transition-burn,.vegas-transition-burn2{opacity:0;-webkit-filter:contrast(1000%) saturate(1000%);filter:contrast(1000%) saturate(1000%)}.vegas-transition-burn-in,.vegas-transition-burn2-in{opacity:1;-webkit-filter:contrast(100%) saturate(100%);filter:contrast(100%) saturate(100%)}.vegas-transition-burn2-out{opacity:0;-webkit-filter:contrast(1000%) saturate(1000%);filter:contrast(1000%) saturate(1000%)}.vegas-transition-fade,.vegas-transition-fade2{opacity:0}.vegas-transition-fade-in,.vegas-transition-fade2-in{opacity:1}.vegas-transition-fade2-out{opacity:0}.vegas-transition-flash,.vegas-transition-flash2{opacity:0;-webkit-filter:brightness(25);filter:brightness(25)}.vegas-transition-flash-in,.vegas-transition-flash2-in{opacity:1;-webkit-filter:brightness(1);filter:brightness(1)}.vegas-transition-flash2-out{opacity:0;-webkit-filter:brightness(25);filter:brightness(25)}.vegas-transition-negative,.vegas-transition-negative2{opacity:0;-webkit-filter:invert(100%);filter:invert(100%)}.vegas-transition-negative-in,.vegas-transition-negative2-in{opacity:1;-webkit-filter:invert(0);filter:invert(0)}.vegas-transition-negative2-out{opacity:0;-webkit-filter:invert(100%);filter:invert(100%)}.vegas-transition-slideDown,.vegas-transition-slideDown2{-webkit-transform:translateY(-100%);transform:translateY(-100%)}.vegas-transition-slideDown-in,.vegas-transition-slideDown2-in{-webkit-transform:translateY(0);transform:translateY(0)}.vegas-transition-slideDown2-out{-webkit-transform:translateY(100%);transform:translateY(100%)}.vegas-transition-slideLeft,.vegas-transition-slideLeft2{-webkit-transform:translateX(100%);transform:translateX(100%)}.vegas-transition-slideLeft-in,.vegas-transition-slideLeft2-in{-webkit-transform:translateX(0);transform:translateX(0)}.vegas-transition-slideLeft2-out,.vegas-transition-slideRight,.vegas-transition-slideRight2{-webkit-transform:translateX(-100%);transform:translateX(-100%)}.vegas-transition-slideRight-in,.vegas-transition-slideRight2-in{-webkit-transform:translateX(0);transform:translateX(0)}.vegas-transition-slideRight2-out{-webkit-transform:translateX(100%);transform:translateX(100%)}.vegas-transition-slideUp,.vegas-transition-slideUp2{-webkit-transform:translateY(100%);transform:translateY(100%)}.vegas-transition-slideUp-in,.vegas-transition-slideUp2-in{-webkit-transform:translateY(0);transform:translateY(0)}.vegas-transition-slideUp2-out{-webkit-transform:translateY(-100%);transform:translateY(-100%)}.vegas-transition-swirlLeft,.vegas-transition-swirlLeft2{-webkit-transform:scale(2) rotate(35deg);transform:scale(2) rotate(35deg);opacity:0}.vegas-transition-swirlLeft-in,.vegas-transition-swirlLeft2-in{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0);opacity:1}.vegas-transition-swirlLeft2-out,.vegas-transition-swirlRight,.vegas-transition-swirlRight2{-webkit-transform:scale(2) rotate(-35deg);transform:scale(2) rotate(-35deg);opacity:0}.vegas-transition-swirlRight-in,.vegas-transition-swirlRight2-in{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0);opacity:1}.vegas-transition-swirlRight2-out{-webkit-transform:scale(2) rotate(35deg);transform:scale(2) rotate(35deg);opacity:0}.vegas-transition-zoomIn,.vegas-transition-zoomIn2{-webkit-transform:scale(0);transform:scale(0);opacity:0}.vegas-transition-zoomIn-in,.vegas-transition-zoomIn2-in{-webkit-transform:scale(1);transform:scale(1);opacity:1}.vegas-transition-zoomIn2-out,.vegas-transition-zoomOut,.vegas-transition-zoomOut2{-webkit-transform:scale(2);transform:scale(2);opacity:0}.vegas-transition-zoomOut-in,.vegas-transition-zoomOut2-in{-webkit-transform:scale(1);transform:scale(1);opacity:1}.vegas-transition-zoomOut2-out{-webkit-transform:scale(0);transform:scale(0);opacity:0}.vegas-animation-kenburns{-webkit-animation:kenburns ease-out;animation:kenburns ease-out}@-webkit-keyframes kenburns{0%{-webkit-transform:scale(1.5);transform:scale(1.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes kenburns{0%{-webkit-transform:scale(1.5);transform:scale(1.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}.vegas-animation-kenburnsDownLeft{-webkit-animation:kenburnsDownLeft ease-out;animation:kenburnsDownLeft ease-out}@-webkit-keyframes kenburnsDownLeft{0%{-webkit-transform:scale(1.5) translate(10%,-10%);transform:scale(1.5) translate(10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsDownLeft{0%{-webkit-transform:scale(1.5) translate(10%,-10%);transform:scale(1.5) translate(10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsDownRight{-webkit-animation:kenburnsDownRight ease-out;animation:kenburnsDownRight ease-out}@-webkit-keyframes kenburnsDownRight{0%{-webkit-transform:scale(1.5) translate(-10%,-10%);transform:scale(1.5) translate(-10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsDownRight{0%{-webkit-transform:scale(1.5) translate(-10%,-10%);transform:scale(1.5) translate(-10%,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsDown{-webkit-animation:kenburnsDown ease-out;animation:kenburnsDown ease-out}@-webkit-keyframes kenburnsDown{0%{-webkit-transform:scale(1.5) translate(0,-10%);transform:scale(1.5) translate(0,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsDown{0%{-webkit-transform:scale(1.5) translate(0,-10%);transform:scale(1.5) translate(0,-10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsLeft{-webkit-animation:kenburnsLeft ease-out;animation:kenburnsLeft ease-out}@-webkit-keyframes kenburnsLeft{0%{-webkit-transform:scale(1.5) translate(10%,0);transform:scale(1.5) translate(10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsLeft{0%{-webkit-transform:scale(1.5) translate(10%,0);transform:scale(1.5) translate(10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsRight{-webkit-animation:kenburnsRight ease-out;animation:kenburnsRight ease-out}@-webkit-keyframes kenburnsRight{0%{-webkit-transform:scale(1.5) translate(-10%,0);transform:scale(1.5) translate(-10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsRight{0%{-webkit-transform:scale(1.5) translate(-10%,0);transform:scale(1.5) translate(-10%,0)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsUpLeft{-webkit-animation:kenburnsUpLeft ease-out;animation:kenburnsUpLeft ease-out}@-webkit-keyframes kenburnsUpLeft{0%{-webkit-transform:scale(1.5) translate(10%,10%);transform:scale(1.5) translate(10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsUpLeft{0%{-webkit-transform:scale(1.5) translate(10%,10%);transform:scale(1.5) translate(10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsUpRight{-webkit-animation:kenburnsUpRight ease-out;animation:kenburnsUpRight ease-out}@-webkit-keyframes kenburnsUpRight{0%{-webkit-transform:scale(1.5) translate(-10%,10%);transform:scale(1.5) translate(-10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsUpRight{0%{-webkit-transform:scale(1.5) translate(-10%,10%);transform:scale(1.5) translate(-10%,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}.vegas-animation-kenburnsUp{-webkit-animation:kenburnsUp ease-out;animation:kenburnsUp ease-out}@-webkit-keyframes kenburnsUp{0%{-webkit-transform:scale(1.5) translate(0,10%);transform:scale(1.5) translate(0,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}@keyframes kenburnsUp{0%{-webkit-transform:scale(1.5) translate(0,10%);transform:scale(1.5) translate(0,10%)}100%{-webkit-transform:scale(1) translate(0,0);transform:scale(1) translate(0,0)}}
        </style>

        <!-- custom vegas styles -->
        <style type="text/css">
            #vegas-slider
            {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100% !important;
            }

            #vegas-slider .vegas-control__btn
            {
                position: absolute;
                top: 50%;
                line-height: 1;
                font-size: 1.5rem;
                font-weight: 700;
                font-family: 'Poppins', sans-serif;
                color: #fff;
                text-transform: uppercase;
                cursor: pointer;
                padding: 5px;
                -webkit-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                -webkit-transition: color 0.3s ease-in-out;
                -moz-transition: color 0.3s ease-in-out;
                -ms-transition: color 0.3s ease-in-out;
                -o-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
                z-index: 3;
            }

            #vegas-slider .vegas-control__btn:hover { color: #f1cf69; }

            #vegas-control__prev { left: -10px; }
            #vegas-control__next { right: -10px; }

            #vegas-slider .vegas-dots
            {
                position: absolute;
                left: 0;
                bottom: 20px;
                width: 100%;
                line-height: 0;
                text-align: center;
                z-index: 3;
            }

            #vegas-slider .vegas-dots a
            {
                display: inline-block;
                vertical-align: top;
                width: 15px;
                height: 15px;
                margin: 0 5px;
                cursor: pointer;
                background-color: #f1cf69;
                box-shadow: 0 0 0 0 #4a8b71 inset;
                border-radius: 50%;
                -webkit-transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
                -moz-transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
                -ms-transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
                -o-transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
                transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out, opacity 0.3s ease-in-out;
            }

            #vegas-slider .vegas-dots a:hover,
            #vegas-slider .vegas-dots a.active
            {
                box-shadow: 0 0 0 8px #4a8b71 inset;
            }

            #vegas-slider .vegas-dots a.active { cursor: default; }

            #start-screen_content-container
            {
                position: relative;
                height: 100%
            }

            .start-screen__content
            {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 100%;
                padding-top: 100px;
                padding-bottom: 50px;
                visibility: hidden;
                opacity: 0;
                text-align: center;
                color: #fff;
                -webkit-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
                -moz-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
                -ms-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
                -o-transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
                transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
            }

            .start-screen__content.active
            {
                position: relative;
                top: auto;
                left: auto;
                right: auto;
                visibility: visible;
                opacity: 1;
                -webkit-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
                -moz-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
                -ms-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
                -o-transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
                transition: opacity .5s ease-in-out .2s,visibility .3s ease-in-out;
            }

            .start-screen__content .title,
            .start-screen__content .subtitle
            {
                font-family: 'Poppins', sans-serif;
                text-transform: uppercase;
            }

            .start-screen__content .title
            {
                line-height: 1;
                font-size: 45px;
                font-weight: 700;
                letter-spacing: 5px;
                margin-bottom: 0;
            }

            .start-screen__content .subtitle
            {
                line-height: 1.2;
                font-size: 18px;
                font-weight: 300;
                letter-spacing: 20px;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .start-screen__content p
            {
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .start-screen__content p:first-child { margin-top: 0; }
            .start-screen__content p:last-child { margin-bottom: 0; }

            .start-screen__content .custom-btn.primary
            {
                background-color: #f1cf69;
                color: #504935;
            }

            .start-screen__content .custom-btn.primary:hover,
            .start-screen__content .custom-btn.primary:focus
            {
                background-color: #444;
                border-color: #444;
                color: #fff;
            }

            /* first slide */
            .start-screen__content-first { }
            .start-screen__content-first .title { }
            .start-screen__content-first .subtitle {}

            /* second slide */
            .start-screen__content-second { }
            .start-screen__content-second .title { }
            .start-screen__content-second .subtitle {}

            /* third slide */
            .start-screen__content-third { }
            .start-screen__content-third .title { color: #282828; }
            .start-screen__content-third .subtitle {}

            @media only screen and (min-width: 576px)
            {
                #vegas-control__prev { left: 0px; }
                #vegas-control__next { right: 0px; }

                .start-screen__content { text-align: inherit; }

                .start-screen__content .title
                {
                    line-height: 0.8;
                    font-size: 80px;
                    letter-spacing: 10px;
                }

                .start-screen__content .subtitle { font-size: 20px; }

                .start-screen__content p
                {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }

                .start-screen__content-third .title { line-height: 0.6; }
            }

            @media only screen and (min-width: 768px)
            {
                #vegas-slider .vegas-dots { bottom: 30px; }

                .start-screen__content
                {
                    padding-top: 120px;
                    padding-bottom: 80px;
                }

                .start-screen__content .title
                {
                    font-size: 110px;
                    letter-spacing: 15px;
                }

                .start-screen__content .subtitle { font-size: 25px; }
            }

            @media only screen and (min-width: 992px)
            {
                #vegas-slider .vegas-dots { bottom: 40px; }

                .start-screen__content
                {
                    padding-top: 120px;
                    padding-bottom: 120px;
                }

                .start-screen__content .title
                {
                    font-size: 130px;
                    letter-spacing: 20px;
                }
            }

            @media only screen and (min-width: 1200px)
            {
                .start-screen__content .title
                {
                    font-size: 150px;
                    letter-spacing: 30px;
                }
            }
        </style>

        <script type="text/javascript">
            (function()
            {
                var oInterval = setInterval(function ()
                {
                    if (typeof window.jQuery !== 'undefined')
                    {
                        clearInterval(oInterval);

                        /*!-----------------------------------------------------------------------------
                         * Vegas - Fullscreen Backgrounds and Slideshows.
                         * v2.3.1 - built 2016-09-18
                         * Licensed under the MIT License.
                         * http://vegas.jaysalvat.com/
                         * ----------------------------------------------------------------------------
                         * Copyright (C) 2010-2016 Jay Salvat
                         * http://jaysalvat.com/
                         * --------------------------------------------------------------------------*/
                        !function(t){"use strict";var s={slide:0,delay:5e3,loop:!0,preload:!1,preloadImage:!1,preloadVideo:!1,timer:!0,overlay:!1,autoplay:!0,shuffle:!1,cover:!0,color:null,align:"center",valign:"center",firstTransition:null,firstTransitionDuration:null,transition:"fade",transitionDuration:1e3,transitionRegister:[],animation:null,animationDuration:"auto",animationRegister:[],init:function(){},play:function(){},pause:function(){},walk:function(){},slides:[]},i={},e=function(i,e){this.elmt=i,this.settings=t.extend({},s,t.vegas.defaults,e),this.slide=this.settings.slide,this.total=this.settings.slides.length,this.noshow=this.total<2,this.paused=!this.settings.autoplay||this.noshow,this.ended=!1,this.$elmt=t(i),this.$timer=null,this.$overlay=null,this.$slide=null,this.timeout=null,this.first=!0,this.transitions=["fade","fade2","blur","blur2","flash","flash2","negative","negative2","burn","burn2","slideLeft","slideLeft2","slideRight","slideRight2","slideUp","slideUp2","slideDown","slideDown2","zoomIn","zoomIn2","zoomOut","zoomOut2","swirlLeft","swirlLeft2","swirlRight","swirlRight2"],this.animations=["kenburns","kenburnsLeft","kenburnsRight","kenburnsUp","kenburnsUpLeft","kenburnsUpRight","kenburnsDown","kenburnsDownLeft","kenburnsDownRight"],this.settings.transitionRegister instanceof Array==!1&&(this.settings.transitionRegister=[this.settings.transitionRegister]),this.settings.animationRegister instanceof Array==!1&&(this.settings.animationRegister=[this.settings.animationRegister]),this.transitions=this.transitions.concat(this.settings.transitionRegister),this.animations=this.animations.concat(this.settings.animationRegister),this.support={objectFit:"objectFit"in document.body.style,transition:"transition"in document.body.style||"WebkitTransition"in document.body.style,video:t.vegas.isVideoCompatible()},this.settings.shuffle===!0&&this.shuffle(),this._init()};e.prototype={_init:function(){var s,i,e,n="BODY"===this.elmt.tagName,o=this.settings.timer,a=this.settings.overlay,r=this;this._preload(),n||(this.$elmt.css("height",this.$elmt.css("height")),s=t('<div class="vegas-wrapper">').css("overflow",this.$elmt.css("overflow")).css("padding",this.$elmt.css("padding")),this.$elmt.css("padding")||s.css("padding-top",this.$elmt.css("padding-top")).css("padding-bottom",this.$elmt.css("padding-bottom")).css("padding-left",this.$elmt.css("padding-left")).css("padding-right",this.$elmt.css("padding-right")),this.$elmt.clone(!0).children().appendTo(s),this.elmt.innerHTML=""),o&&this.support.transition&&(e=t('<div class="vegas-timer"><div class="vegas-timer-progress">'),this.$timer=e,this.$elmt.prepend(e)),a&&(i=t('<div class="vegas-overlay">'),"string"==typeof a&&i.css("background-image","url("+a+")"),this.$overlay=i,this.$elmt.prepend(i)),this.$elmt.addClass("vegas-container"),n||this.$elmt.append(s),setTimeout(function(){r.trigger("init"),r._goto(r.slide),r.settings.autoplay&&r.trigger("play")},1)},_preload:function(){var t,s;for(s=0;s<this.settings.slides.length;s++)(this.settings.preload||this.settings.preloadImages)&&this.settings.slides[s].src&&(t=new Image,t.src=this.settings.slides[s].src),(this.settings.preload||this.settings.preloadVideos)&&this.support.video&&this.settings.slides[s].video&&(this.settings.slides[s].video instanceof Array?this._video(this.settings.slides[s].video):this._video(this.settings.slides[s].video.src))},_random:function(t){return t[Math.floor(Math.random()*t.length)]},_slideShow:function(){var t=this;this.total>1&&!this.ended&&!this.paused&&!this.noshow&&(this.timeout=setTimeout(function(){t.next()},this._options("delay")))},_timer:function(t){var s=this;clearTimeout(this.timeout),this.$timer&&(this.$timer.removeClass("vegas-timer-running").find("div").css("transition-duration","0ms"),this.ended||this.paused||this.noshow||t&&setTimeout(function(){s.$timer.addClass("vegas-timer-running").find("div").css("transition-duration",s._options("delay")-100+"ms")},100))},_video:function(t){var s,e,n=t.toString();return i[n]?i[n]:(t instanceof Array==!1&&(t=[t]),s=document.createElement("video"),s.preload=!0,t.forEach(function(t){e=document.createElement("source"),e.src=t,s.appendChild(e)}),i[n]=s,s)},_fadeOutSound:function(t,s){var i=this,e=s/10,n=t.volume-.09;n>0?(t.volume=n,setTimeout(function(){i._fadeOutSound(t,s)},e)):t.pause()},_fadeInSound:function(t,s){var i=this,e=s/10,n=t.volume+.09;1>n&&(t.volume=n,setTimeout(function(){i._fadeInSound(t,s)},e))},_options:function(t,s){return void 0===s&&(s=this.slide),void 0!==this.settings.slides[s][t]?this.settings.slides[s][t]:this.settings[t]},_goto:function(s){function i(){f._timer(!0),setTimeout(function(){y&&(f.support.transition?(h.css("transition","all "+_+"ms").addClass("vegas-transition-"+y+"-out"),h.each(function(){var t=h.find("video").get(0);t&&(t.volume=1,f._fadeOutSound(t,_))}),e.css("transition","all "+_+"ms").addClass("vegas-transition-"+y+"-in")):e.fadeIn(_));for(var t=0;t<h.length-4;t++)h.eq(t).remove();f.trigger("walk"),f._slideShow()},100)}"undefined"==typeof this.settings.slides[s]&&(s=0),this.slide=s;var e,n,o,a,r,h=this.$elmt.children(".vegas-slide"),d=this.settings.slides[s].src,l=this.settings.slides[s].video,g=this._options("delay"),u=this._options("align"),c=this._options("valign"),p=this._options("cover"),m=this._options("color")||this.$elmt.css("background-color"),f=this,v=h.length,y=this._options("transition"),_=this._options("transitionDuration"),w=this._options("animation"),b=this._options("animationDuration");this.settings.firstTransition&&this.first&&(y=this.settings.firstTransition||y),this.settings.firstTransitionDuration&&this.first&&(_=this.settings.firstTransitionDuration||_),this.first&&(this.first=!1),"repeat"!==p&&(p===!0?p="cover":p===!1&&(p="contain")),("random"===y||y instanceof Array)&&(y=y instanceof Array?this._random(y):this._random(this.transitions)),("random"===w||w instanceof Array)&&(w=w instanceof Array?this._random(w):this._random(this.animations)),("auto"===_||_>g)&&(_=g),"auto"===b&&(b=g),e=t('<div class="vegas-slide"></div>'),this.support.transition&&y&&e.addClass("vegas-transition-"+y),this.support.video&&l?(a=l instanceof Array?this._video(l):this._video(l.src),a.loop=void 0!==l.loop?l.loop:!0,a.muted=void 0!==l.mute?l.mute:!0,a.muted===!1?(a.volume=0,this._fadeInSound(a,_)):a.pause(),o=t(a).addClass("vegas-video").css("background-color",m),this.support.objectFit?o.css("object-position",u+" "+c).css("object-fit",p).css("width","100%").css("height","100%"):"contain"===p&&o.css("width","100%").css("height","100%"),e.append(o)):(r=new Image,n=t('<div class="vegas-slide-inner"></div>').css("background-image",'url("'+d+'")').css("background-color",m).css("background-position",u+" "+c),"repeat"===p?n.css("background-repeat","repeat"):n.css("background-size",p),this.support.transition&&w&&n.addClass("vegas-animation-"+w).css("animation-duration",b+"ms"),e.append(n)),this.support.transition||e.css("display","none"),v?h.eq(v-1).after(e):this.$elmt.prepend(e),h.css("transition","all 0ms").each(function(){this.className="vegas-slide","VIDEO"===this.tagName&&(this.className+=" vegas-video"),y&&(this.className+=" vegas-transition-"+y,this.className+=" vegas-transition-"+y+"-in")}),f._timer(!1),a?(4===a.readyState&&(a.currentTime=0),a.play(),i()):(r.src=d,r.complete?i():r.onload=i)},_end:function(){this.ended=!0,this._timer(!1),this.trigger("end")},shuffle:function(){for(var t,s,i=this.total-1;i>0;i--)s=Math.floor(Math.random()*(i+1)),t=this.settings.slides[i],this.settings.slides[i]=this.settings.slides[s],this.settings.slides[s]=t},play:function(){this.paused&&(this.paused=!1,this.next(),this.trigger("play"))},pause:function(){this._timer(!1),this.paused=!0,this.trigger("pause")},toggle:function(){this.paused?this.play():this.pause()},playing:function(){return!this.paused&&!this.noshow},current:function(t){return t?{slide:this.slide,data:this.settings.slides[this.slide]}:this.slide},jump:function(t){0>t||t>this.total-1||t===this.slide||(this.slide=t,this._goto(this.slide))},next:function(){if(this.slide++,this.slide>=this.total){if(!this.settings.loop)return this._end();this.slide=0}this._goto(this.slide)},previous:function(){if(this.slide--,this.slide<0){if(!this.settings.loop)return void this.slide++;this.slide=this.total-1}this._goto(this.slide)},trigger:function(t){var s=[];s="init"===t?[this.settings]:[this.slide,this.settings.slides[this.slide]],this.$elmt.trigger("vegas"+t,s),"function"==typeof this.settings[t]&&this.settings[t].apply(this.$elmt,s)},options:function(i,e){var n=this.settings.slides.slice();if("object"==typeof i)this.settings=t.extend({},s,t.vegas.defaults,i);else{if("string"!=typeof i)return this.settings;if(void 0===e)return this.settings[i];this.settings[i]=e}this.settings.slides!==n&&(this.total=this.settings.slides.length,this.noshow=this.total<2,this._preload())},destroy:function(){clearTimeout(this.timeout),this.$elmt.removeClass("vegas-container"),this.$elmt.find("> .vegas-slide").remove(),this.$elmt.find("> .vegas-wrapper").clone(!0).children().appendTo(this.$elmt),this.$elmt.find("> .vegas-wrapper").remove(),this.settings.timer&&this.$timer.remove(),this.settings.overlay&&this.$overlay.remove(),this.elmt._vegas=null}},t.fn.vegas=function(t){var s,i=arguments,n=!1;if(void 0===t||"object"==typeof t)return this.each(function(){this._vegas||(this._vegas=new e(this,t))});if("string"==typeof t){if(this.each(function(){var e=this._vegas;if(!e)throw new Error("No Vegas applied to this element.");"function"==typeof e[t]&&"_"!==t[0]?s=e[t].apply(e,[].slice.call(i,1)):n=!0}),n)throw new Error('No method "'+t+'" in Vegas.');return void 0!==s?s:this}},t.vegas={},t.vegas.defaults=s,t.vegas.isVideoCompatible=function(){return!/(Android|webOS|Phone|iPad|iPod|BlackBerry|Windows Phone)/i.test(navigator.userAgent)}}(window.jQuery||window.Zepto);

                        jQuery(document).ready(function($){

                            var slider = $('#vegas-slider'),
                                slides = @json($jsonSlider),
                                slider_content = $('.start-screen__content'),
                                dots, a, x;

                            slider.vegas({
                                autoplay: true,
                                timer: false,
                                preloadImage: true,
                                transition: [ 'fade', 'zoomOut', 'blur', 'swirlLeft', 'swirlRight' ],
                                transitionDuration: 4000,
                                delay: 5000,
                                slides: slides,
                                overlay: '{{ asset('template/frontend/img/home_img/overlays/04.png') }}',
                                init: function (globalSettings) {

                                    if ( this.data('dots') == true ) {

                                        var $this = this,
                                            dots = $('<nav class="vegas-dots"></nav>');

                                        $this.find('.vegas-control').append(dots);

                                        for (var i = 0; i < slides.length; i++) {
                                            x = $('<a "href="#" class="paginatorLink"></a>');

                                            x.on('click', function(e) {
                                                e.preventDefault();

                                                $this.vegas('jump', dots.find('a').index(this));
                                            });

                                            dots.append(x);
                                        };

                                        a = dots.find('a');
                                        a.eq(0).addClass('active');

                                        slider_content.eq(0).addClass('active');
                                    };
                                },
                                play: function (index, slideSettings) {

                                },
                                walk: function (index, slideSettings) {

                                    if ( this.data('dots') == true ) {

                                        a.removeClass('active').eq(index).addClass('active');
                                    };

                                    slider_content.removeClass('active').eq(index).addClass('active');
                                }
                            });

                            $('#vegas-control__prev').on('click', function () {
                                slider.vegas('previous');
                            });

                            $('#vegas-control__next').on('click', function () {
                                slider.vegas('next');
                            });
                        });
                    }
                }, 500);
            })();
        </script>
    </header>
    <!-- end header -->

    <main role="main">
        <!-- start section -->
        <section class="section section--no-pt section--no-pb">
            <div class="container-fluid">
                <div class="products--style-2">
                    <div class="products__inner">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="product__item">
                                    <figure>
                                        <img src="{{ asset('template/frontend/img/blank.gif') }}" style="background-image: url('{{ asset('template/frontend/img/gall_img/2_col/6.jpg') }}');" alt="demo" />
                                    </figure>

                                    <div class="product__item__description">
                                        <div class="product__item__description__inner">
                                            <h2 class="product__item__title">sweet<br />Grape</h2>

                                            Works discount secure
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="product__item">
                                    <figure>
                                        <img src="{{ asset('template/frontend/img/blank.gif') }}" style="background-image: url('{{ asset('template/frontend/img/gall_img/4_col/15.jpg') }}');" alt="demo">
                                    </figure>

                                    <div class="product__item__description">
                                        <div class="product__item__description__inner">
                                            <h2 class="product__item__title">Juicy<br />cherry</h2>

                                            First superior full-bodied drink
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="product__item">
                                    <figure>
                                        <img src="{{ asset('template/frontend/img/blank.gif') }}" style="background-image: url('{{ asset('template/frontend/img/gall_img/4_col/10.jpg') }}');" alt="demo">
                                    </figure>

                                    <div class="product__item__description">
                                        <div class="product__item__description__inner">
                                            <h2 class="product__item__title">Beautiful<br />Strawberry</h2>

                                            Odor to yummy high racy bonus soaking
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <a id="spy-services" class="ancor"></a>
        <section class="section section--screen  section-services">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="col-MB-30">
                            <h2>AgriCom<br />Services</h2>

                            <h4>Smells racy free announcing than durable zesty smart exotic far feel. </h4>

                            <p>
                                Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="feature feature--style-3">
                            <div class="feature__inner">
                                <div class="row justify-content-between">
                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="feature__item">
                                            <i class="feature__item__ico feature__item__ico--1"></i>

                                            <h3 class="feature__item__title  h4">Agriculture Products</h3>

                                            <p>
                                                Evulates vast a real proven works discount secure care. Market invigorate a awesome
                                            </p>

                                            <p>
                                                <a class="custom-btn primary" href="#">See more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="feature__item">
                                            <i class="feature__item__ico feature__item__ico--2"></i>

                                            <h3 class="feature__item__title  h4">Fresh Vegatables</h3>

                                            <p>
                                                Natural our comes for sold tired value survey brighter genuine brings smells
                                            </p>

                                            <p>
                                                <a class="custom-btn primary" href="#">See more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="feature__item">
                                            <i class="feature__item__ico feature__item__ico--3"></i>

                                            <h3 class="feature__item__title  h4">Different Livestock</h3>

                                            <p>
                                                Plus extravaganza delectable chosen yummy can't better fresh worthwhile will
                                            </p>

                                            <p>
                                                <a class="custom-btn primary" href="#">See more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="feature__item">
                                            <i class="feature__item__ico feature__item__ico--4"></i>

                                            <h3 class="feature__item__title  h4">Farm Factory</h3>

                                            <p>
                                                Citrus stimulates ultimate unlimited energy very genuine spacious silky savor
                                            </p>

                                            <p>
                                                <a class="custom-btn primary" href="#">See more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <a id="spy-about" class="ancor"></a>
        <section class="section section--screen section--background  section-about  jarallax" data-speed="0.5" data-img-position="50% 30%" style="background-image: url('{{ asset('template/frontend/img/img_8.jpg') }}');">

            <div class="pattern" style="opacity: .5"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="col-MB-30">
                            <h2 class="section-about__title">Interesting Story about Food Company</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-MB-15">
                            <div class="col-MB-30">
                                <h4>Smells racy free announcing than durable zesty smart exotic far feel. Screamin' affordable secret way absolutely.</h4>
                            </div>

                            <p>
                                Stimulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime.
                            </p>

                            <p>
                                Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime. Odor to yummy high racy bonus soaking mouthwatering. First superior
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-MB-15">
                            <p>
                                Sale thirsty colossal humongous look splash cool. Does our calories anti win classic ultimate remarkable kids flexible. Every fun generous flip stimulates quick available dry try. Durable messy and and monster goodness sparkling youthful seasoned double soaking look. Big luscious sporty mega leading full guaranteed plush outstanding dazzling.
                            </p>

                            <p>
                                Luscious classic soaking happy kids this buy chocolatey spectacular does get effervescent. Traditional absolutely tighter ultimate appreciate comfort plush full-bodied by quality keen. Finest appearance aromatic
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <p>&nbsp;</p>
                        <p>
                            <a class="custom-btn primary big" href="#">Find out more</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section" style="background-color: #f1cf69;">
            <div class="container">
                <div class="section-heading section-heading--center section-heading--white">
                    <h2 class="title">What People Says</h2>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-lg-10">
                        <div class="feedbacks feedbacks--slider feedbacks--style-1">
                            <div class="owl-carousel owl-theme">
                                <!-- start item -->
                                <article class="feedback__item">
                                    <div class="feedback__author">
                                        <div class="feedback__author__photo  mx-auto">
                                            <img class="circled  img-fluid" src="{{ asset('template/frontend/img/users_photos/4.png') }}" height="140" width="140" alt="demo" />
                                        </div>

                                        <h4 class="feedback__author__name">Alex Roberts</h4>

                                        <p class="feedback__author__position">Farmer, AgroHolding</p>
                                    </div>

                                    <div class="feedback__text">
                                        <p>
                                            “Absorbent lower warranty smart deluxe lasting sporty fast customer spring rated. Free every challenge your spicey racy. Introducing handcrafted credit-card like supreme monster just hurry fresh outlasts flip quality.
                                        </p>
                                    </div>
                                </article>
                                <!-- end item -->

                                <!-- start item -->
                                <article class="feedback__item">
                                    <div class="feedback__author">
                                        <div class="feedback__author__photo  mx-auto">
                                            <img class="circled  img-fluid" src="{{ asset('template/frontend/img/users_photos/4.png') }}" height="140" width="140" alt="demo" />
                                        </div>

                                        <h4 class="feedback__author__name">Alex Roberts</h4>

                                        <p class="feedback__author__position">Farmer, AgroHolding</p>
                                    </div>

                                    <div class="feedback__text">
                                        <p>
                                            “Absorbent lower warranty smart deluxe lasting sporty fast customer spring rated. Free every challenge your spicey racy. Introducing handcrafted credit-card like supreme monster just hurry fresh outlasts flip quality. Value far mouthwatering wherever try offer ultra aroma
                                        </p>
                                    </div>
                                </article>
                                <!-- end item -->

                                <!-- start item -->
                                <article class="feedback__item">
                                    <div class="feedback__author">
                                        <div class="feedback__author__photo  mx-auto">
                                            <img class="circled  img-fluid" src="{{ asset('template/frontend/img/users_photos/4.png') }}" height="140" width="140" alt="demo" />
                                        </div>

                                        <h4 class="feedback__author__name">Alex Roberts</h4>

                                        <p class="feedback__author__position">Farmer, AgroHolding</p>
                                    </div>

                                    <div class="feedback__text">
                                        <p>
                                            “Absorbent lower warranty smart deluxe lasting sporty fast customer spring rated. Free every challenge your spicey racy. Introducing handcrafted credit-card like supreme monster just hurry fresh outlasts flip quality. Value far mouthwatering wherever try offer ultra aroma Introducing handcrafted credit-card like supreme monster
                                        </p>
                                    </div>
                                </article>
                                <!-- end item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <a id="spy-progress" class="ancor"></a>
        <section class="section section--screen section--background-base-light section--background-logo">
            <div class="container">
                <div class="section-heading section-heading--left">
                    <h2 class="title">Agricom Progress</h2>
                </div>

                <div class="counters counters--style-2">
                    <div class="counters__inner">
                        <div class="row">
                            <!-- star item -->
                            <div class="col-md-6 col-xl-3">
                                <div class="counter__item">
                                    <i class="counter__item__ico counter__item__ico--1"></i>

                                    <p class="counter__item__count  js-count" data-from="0" data-to="600" data-after="k">600</p>

                                    <p class="counter__item__title">tonnes of fruits assembled</p>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- star item -->
                            <div class="col-md-6 col-xl-3">
                                <div class="counter__item">
                                    <i class="counter__item__ico counter__item__ico--2"></i>

                                    <p class="counter__item__count  js-count" data-from="0" data-to="50" data-after="k">50</p>

                                    <p class="counter__item__title">hectare of production</p>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- star item -->
                            <div class="col-md-6 col-xl-3">
                                <div class="counter__item">
                                    <i class="counter__item__ico counter__item__ico--3"></i>

                                    <p class="counter__item__count  js-count" data-from="0" data-to="250">250</p>

                                    <p class="counter__item__title">units of equipment</p>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- star item -->
                            <div class="col-md-6 col-xl-3">
                                <div class="counter__item">
                                    <i class="counter__item__ico counter__item__ico--4"></i>

                                    <p class="counter__item__count  js-count" data-from="0" data-to="300" data-after="k">300</p>

                                    <p class="counter__item__title">tons of fresh vegatables</p>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <a id="spy-offer" class="ancor"></a>
        <section class="section section--screen section--background section-banner" style="background-image: url('{{ asset('template/frontend/img/home_img/img_3.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6">
                        <div class="col-MB-30">
                            <h2 class="section-banner__title">Tasty Fruits Ideas</h2>

                            <h4>Vinyl grown remarkable in survey wherever parents are it's. Mega bold action. Sold care wherever less appetizing your far easily</h4>
                        </div>

                        <p>
                            <a class="custom-btn primary big" href="#">Discover</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <a id="spy-gallery" class="ancor"></a>
        <section class="section  section--no-pt section--no-pb  section-gallery">
            <!-- start item -->
            <div class="item" style="background-image: url('{{ asset('template/frontend/img/gall_img/1.jpg') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="item__title">Sweet Bananas</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item -->

            <!-- start item -->
            <div class="item" style="background-image: url('{{ asset('template/frontend/img/gall_img/2.jpg') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="item__title">Cherry</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item -->

            <!-- start item -->
            <div class="item" style="background-image: url('{{ asset('template/frontend/img/gall_img/3.jpg') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="item__title">Awesome Bilberry</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item -->

            <!-- start item -->
            <div class="item" style="background-image: url('{{ asset('template/frontend/img/gall_img/4.jpg') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="item__title">Awesome Fresh Grape</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item -->
        </section>
        <!-- end section -->

        <!-- start section -->
        <a id="spy-blog" class="ancor"></a>
        <section class="section" style="background-color: #fafafa;">
            <div class="container">
                <div class="section-heading section-heading--left">
                    <h2 class="title">Blog Posts</h2>
                </div>

                <div class="blog blog--style-3">
                    <div class="blog__inner">
                        <div class="row no-gutters">
                            <!-- start item -->
                            <div class="col-md-6 col-lg-4">
                                <div class="blog__item">
                                    <figure>
                                        <img src="{{ asset('template/frontend/img/blank.gif') }}" style="background-image: url('{{ asset('template/frontend/img/blog_img/3.jpg') }}');" alt="demo">
                                    </figure>

                                    <div class="blog__entry">
                                        <span class="blog__entry__meta">Jul 19, 2016  /  4 Comments</span>

                                        <h3 class="blog__entry__title  h4"><a href="blog_post.html">Waxy latest also drink</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-md-6 col-lg-4">
                                <div class="blog__item">
                                    <figure>
                                        <img src="{{ asset('template/frontend/img/blank.gif') }}" style="background-image: url('{{ asset('template/frontend/img/blog_img/5.jpg') }}');" alt="demo">
                                    </figure>

                                    <div class="blog__entry">
                                        <span class="blog__entry__meta">Jul 19, 2016  /  4 Comments</span>

                                        <h3 class="blog__entry__title  h4"><a href="blog_post.html">Agriculture Products</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-md-6 col-lg-4">
                                <div class="blog__item">
                                    <figure>
                                        <img src="{{ asset('template/frontend/img/blank.gif') }}" style="background-image: url('{{ asset('template/frontend/img/blog_img/6.jpg') }}');" alt="demo">
                                    </figure>

                                    <div class="blog__entry">
                                        <span class="blog__entry__meta">Jul 19, 2016  /  4 Comments</span>

                                        <h3 class="blog__entry__title  h4"><a href="blog_post.html">Fruits on Nutrition</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section">
            <div class="container">
                <div class="partners">
                    <div class="partners__inner">
                        <div class="row">
                            <!-- start item -->
                            <div class="col-6 col-sm-4 col-lg-2">
                                <img class="img-fluid" src="{{ asset('template/frontend/img/partners_img/1.jpg') }}" alt="demo" />
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-6 col-sm-4 col-lg-2">
                                <img class="img-fluid" src="{{ asset('template/frontend/img/partners_img/2.jpg') }}" alt="demo" />
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-6 col-sm-4 col-lg-2">
                                <img class="img-fluid" src="{{ asset('template/frontend/img/partners_img/3.jpg') }}" alt="demo" />
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-6 col-sm-4 col-lg-2">
                                <img class="img-fluid" src="{{ asset('template/frontend/img/partners_img/4.jpg') }}" alt="demo" />
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-6 col-sm-4 col-lg-2">
                                <img class="img-fluid" src="{{ asset('template/frontend/img/partners_img/5.jpg') }}" alt="demo" />
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-6 col-sm-4 col-lg-2">
                                <img class="img-fluid" src="{{ asset('template/frontend/img/partners_img/6.jpg') }}" alt="demo" />
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <a id="spy-get-in-touch" class="ancor"></a>
        <section class="section-contact">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-md-6 bg-2">
                        <div class="item">
                            <header class="item__header">
                                <h2 class="item__title">Get In Touch</h2>

                                <p class="item__subtitle">Vinyl grown remarkable in survey wherever parents are it's. Mega bold action. Sold care</p>
                            </header>

                            <form class="f1 js-contact-form" action="#">
                                <label class="input-wrp">
                                    <i class="fontello-user"></i>
                                    <input class="textfield" type="text" placeholder="You name" name="name" />
                                </label>

                                <label class="input-wrp">
                                    <i class="fontello-mail"></i>
                                    <input class="textfield" type="text" placeholder="E-mail" name="email" />
                                </label>

                                <label class="input-wrp">
                                    <i class="fontello-comment"></i>
                                    <textarea class="textfield" placeholder="Comment" name="message"></textarea>
                                </label>

                                <div class="btn-wrp">
                                    <button class="custom-btn long" type="submit" role="button">Send a message</button>
                                </div>

                                <div class="form__note"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
@endsection
