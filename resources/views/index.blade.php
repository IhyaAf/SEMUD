<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo, html template">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>SEMUD - SEKOLAH MUDAH</title>

<link href="{{ asset('css/plugins.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

<link href="//fonts.googleapis.com/css?family=Montserrat:400%2C700%7CAbril+Fatface:400%7CYellowtail:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome.css')}}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/navigation.css')}}">

<script type="text/javascript" src="{{ asset('plugins/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.themepunch.revolution.min.js')}}"></script>

<link rel='stylesheet' href="{{ asset('plugins/revolution.addon.particles.css')}}?ver=1.0.3" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('plugins/revolution.addon.particles.min.js')}}?ver=1.0.3"></script>

<script type="text/javascript" src="{{ asset('plugins/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.video.min.js')}}"></script>
@yield('css')
<script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
</head>
<body>

<div class="body-inner">

<header id="header" data-fullwidth="true" data-transparent="true" class="">
<div class="header-inner">
<div class="container">

<div id="logo">
<a href="/">
<span class="logo-default"><img src="{{asset('plugins/Logo.png')}}" style="width:85px"></span>
<span class="logo-dark"><img src="{{asset('plugins/Logo.png')}}" style="width:85px"></span>
</a>
</div>


<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
<form class="search-form" action="search-results-page.html" method="get">
<input class="form-control" name="q" type="text" placeholder="Type & Search..." />
<span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
</form>
</div>


<div class="header-extras">
<ul>
<li>
<a id="btn-search" href="#"> <i class="icon-search"></i></a>
</li>
<li>
<div class="p-dropdown">
<a href="#"><i class="fas fa-user-circle "></i></a>
<ul class="p-dropdown-content">
<li><a href="#">LOGOUT</a></li>
</ul>
</div>
</li>
</ul>
</div>


<div id="mainMenu-trigger">
<a class="lines-button x"><span class="lines"></span></a>
</div>


<div id="mainMenu">
<div class="container">
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li class="dropdown"><a href="/sekolah">Sekolah</a>
        <li><a href="index.html">About US</a></li>
        <li class="dropdown"><a href="#">Contact</a>
        </li>
    </ul>
</nav>
</div>
</div>

</div>
</div>
</header>

@yield('isi')
<link rel='stylesheet' href="{{ asset('plugins/revolution.addon.beforeafter.css')}}" type='text/css' media='all' />
        <script type='text/javascript' src="{{ asset('plugins/revolution.addon.beforeafter.min.js')}}"></script>
        <script type="text/javascript">
                        var revapi346,
                            tpj = jQuery;
                        tpj(document).ready(function () {
                            if (tpj("#rev_slider_346_1").revolution == undefined) {
                                revslider_showDoubleJqueryError("#rev_slider_346_1");
                            } else {
                                revapi346 = tpj("#rev_slider_346_1").show().revolution({
                                    sliderType: "standard",
                                    jsFileLocation: "{{asset('plugins/')}}",
                                    sliderLayout: "fullscreen",
                                    dottedOverlay: "none",
                                    delay: 9000,
                                    particles: {
                                        startSlide: "2",
                                        endSlide: "2",
                                        zIndex: "1",
                                        particles: {
                                            number: {
                                                value: 80
                                            },
                                            color: {
                                                value: "#ffffff"
                                            },
                                            shape: {
                                                type: "circle",
                                                stroke: {
                                                    width: 0,
                                                    color: "#ffffff",
                                                    opacity: 1
                                                },
                                                image: {
                                                    src: ""
                                                }
                                            },
                                            opacity: {
                                                value: 0.5,
                                                random: true,
                                                min: 0.25,
                                                anim: {
                                                    enable: false,
                                                    speed: 3,
                                                    opacity_min: 0,
                                                    sync: false
                                                }
                                            },
                                            size: {
                                                value: 2,
                                                random: true,
                                                min: 0.5,
                                                anim: {
                                                    enable: false,
                                                    speed: 40,
                                                    size_min: 1,
                                                    sync: false
                                                }
                                            },
                                            line_linked: {
                                                enable: false,
                                                distance: 150,
                                                color: "#ffffff",
                                                opacity: 0.4,
                                                width: 1
                                            },
                                            move: {
                                                enable: true,
                                                speed: 1,
                                                direction: "none",
                                                random: true,
                                                min_speed: 1,
                                                straight: false,
                                                out_mode: "out"
                                            }
                                        },
                                        interactivity: {
                                            events: {
                                                onhover: {
                                                    enable: false,
                                                    mode: "repulse"
                                                },
                                                onclick: {
                                                    enable: false,
                                                    mode: "repulse"
                                                }
                                            },
                                            modes: {
                                                grab: {
                                                    distance: 400,
                                                    line_linked: {
                                                        opacity: 0.5
                                                    }
                                                },
                                                bubble: {
                                                    distance: 400,
                                                    size: 40,
                                                    opacity: 0.4
                                                },
                                                repulse: {
                                                    distance: 200
                                                }
                                            }
                                        }
                                    },
                                    navigation: {
                                        keyboardNavigation: "off",
                                        keyboard_direction: "horizontal",
                                        mouseScrollNavigation: "off",
                                        mouseScrollReverse: "default",
                                        onHoverStop: "off",
                                        arrows: {
                                            style: "gyges",
                                            enable: true,
                                            hide_onmobile: false,
                                            hide_onleave: false,
                                            tmp: '',
                                            left: {
                                                h_align: "center",
                                                v_align: "bottom",
                                                h_offset: -20,
                                                v_offset: 0
                                            },
                                            right: {
                                                h_align: "center",
                                                v_align: "bottom",
                                                h_offset: 20,
                                                v_offset: 0
                                            }
                                        }
                                    },
                                    responsiveLevels: [1240, 1240, 1240, 480],
                                    visibilityLevels: [1240, 1240, 1240, 480],
                                    gridwidth: [1200, 1200, 1200, 480],
                                    gridheight: [800, 800, 800, 700],
                                    lazyType: "none",
                                    parallax: {
                                        type: "mouse+scroll",
                                        origo: "slidercenter",
                                        speed: 400,
                                        speedbg: 0,
                                        speedls: 0,
                                        levels: [1, 2, 3, 4, 5, 6, 7, 8, 12, 16, 47, 48, 49, 50, 51, 55],
                                    },
                                    shadow: 0,
                                    spinner: "off",
                                    stopLoop: "on",
                                    stopAfterLoops: 0,
                                    stopAtSlide: 1,
                                    shuffle: "off",
                                    autoHeight: "off",
                                    fullScreenAutoWidth: "off",
                                    fullScreenAlignForce: "off",
                                    fullScreenOffsetContainer: "",
                                    fullScreenOffset: "",
                                    disableProgressBar: "on",
                                    hideThumbsOnMobile: "off",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    debugMode: false,
                                    fallbacks: {
                                        simplifyAll: "off",
                                        nextSlideOnWindowFocus: "off",
                                        disableFocusListener: false,
                                    }
                                });
                                var ua = window.navigator.userAgent;
                                var msie = ua.indexOf("MSIE ");
                                if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./) || ('CSS' in window && 'supports' in window.CSS && !window.CSS.supports('mix-blend-mode', 'screen'))) {
                                    var bgColor = 'rgba(245, 245, 245, 0.5)';
                                    //jQuery('.rev_slider .tp-caption[data-blendmode]').removeAttr('data-blendmode').css('background', bgColor);
                                    jQuery('.rev_slider .tp-caption.tp-blendvideo[data-blendmode]').remove();
                                }
                                // BEFORE/AFTER INITIALISATION
                                RevSliderBeforeAfter(tpj, tpj("#rev_slider_346_1"), {
                                    arrowStyles: {
                                        leftIcon: "fa fa-icon-caret-left",
                                        rightIcon: "fa fa-icon-caret-right",
                                        topIcon: "fa fa-icon-caret-up",
                                        bottomIcon: "fa fa-icon-caret-down",
                                        size: "35",
                                        color: "#ffffff",
                                        bgColor: "transparent",
                                        spacing: "10",
                                        padding: "0",
                                        borderRadius: "0"
                                    },
                                    dividerStyles: {
                                        width: "1",
                                        color: "rgba(255, 255, 255, 0.5)"
                                    },
                                    onClick: {
                                        time: "500",
                                        easing: "Power2.easeOut",
                                    },
                                    cursor: "move",
                                    carousel: false
                                });
                                // PARTICLES INITIALISATION
                                RsParticlesAddOn(revapi346);
                            }
                        }); /*ready*/
                    </script>

<footer id="footer">
   
                        <div class="copyright-content">
                            <div class="container">
                                <div class="copyright-text text-center">&copy; 2020 SEMUD - SEKOLAH MUDAH.
                                    All Rights Reserved.</div>
                                </div>
                            </div>
</footer>



<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('plugins/popper.min.js')}}"></script>
@yield('script')
</body>
</html>