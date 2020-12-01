<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo, html template">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>POLO | The Multi-Purpose HTML5 Template</title>

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

<header id="header" data-fullwidth="true" data-transparent="true" class="dark">
<div class="header-inner">
<div class="container">

<div id="logo">
<a href="index.html">
<span class="logo-default">POLO</span>
<span class="logo-dark">POLO</span>
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
<a href="#"><i class="icon-globe"></i><span>EN</span></a>
<ul class="p-dropdown-content">
<li><a href="#">French</a></li>
<li><a href="#">Spanish</a></li>
<li><a href="#">English</a></li>
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
<li><a href="index.html">Home</a></li>
<li class="dropdown"><a href="#">Layout</a>
<ul class="dropdown-menu">
<li class="dropdown-submenu"><a href="#">Topbar</a>
<ul class="dropdown-menu">
<li><a href="header-topbar.html">Light</a></li>
<li><a href="header-topbar-dark.html">Dark</a></li>
<li><a href="header-topbar-transparent.html">Transparent</a></li>
<li><a href="header-topbar-colored.html">Colored</a></li>
<li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Header</a>
<ul class="dropdown-menu">
<li><a href="header.html">Light</a></li>
<li><a href="header-dark.html">Dark</a></li>
<li><a href="header-transparent.html">Transparent</a></li>
<li><a href="header-fullwidth.html">Fullwidth</a></li>
<li class="dropdown-submenu"><a href="#">Modern</a>
<ul class="dropdown-menu">
<li><a href="header-modern.html">Light</a></li>
<li><a href="header-modern-dark.html">Dark</a></li>
<li><a href="header-modern-transparent.html">Transparent</a></li>
</ul>
</li>
<li><a href="header-mini.html">Mini</a></li>
<li><a href="header-alternative.html">Alternative</a></li>
<li><a href="header-always-fixed.html">Always Fixed</a></li>
<li><a href="header-disable-fixed.html">Disable Fixed</a></li>
<li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
<li class="dropdown-submenu"><a href="#">Logo</a>
<ul class="dropdown-menu">
<li><a href="header-logo.html">Left</a></li>
<li><a href="header-logo-right.html">Right</a></li>
<li><a href="header-logo-center.html">Center</a></li>
<li><a href="header-logo-fixed-header.html">Header Fixed Logo</a></li>
<li><a href="header-logo-responsive.html">Header Responsive Logo</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Menu Positions</a>
<ul class="dropdown-menu">
<li><a href="header-menu-left.html">Left</a></li>
<li><a href="header-menu-right.html">Right</a></li>
 <li><a href="header-menu-center.html">Center</a></li>
</ul>
</li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Main Menu<span class="badge badge-danger">NEW</span></a>
<ul class="dropdown-menu">
<li><a href="menu.html">Default</a></li>
<li><a href="menu-lowercase.html">Lowercase</a></li>
<li><a href="menu-split.html">Split Menu</a></li>
<li><a href="menu-sub-title.html">Sub Title Menu</a></li>
<li><a href="menu-overlay.html">Overlay Menu</a></li>
<li><a href="menu-creative.html">Creative Menu</a></li>
<li><a href="menu-lines.html">Lines Menu</a></li>
<li class="dropdown-submenu"><a href="#">Outline</a>
<ul class="dropdown-menu">
<li><a href="menu-outline.html">Default</a></li>
<li><a href="menu-outline-dark.html">Dark</a></li>
<li><a href="menu-outline-light.html">Light</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Rounded</a>
<ul class="dropdown-menu">
<li><a href="menu-rounded.html">Default</a></li>
<li><a href="menu-rounded-dark.html">Dark</a></li>
<li><a href="menu-rounded-light.html">Light</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Positions</a>
<ul class="dropdown-menu">
<li><a href="menu-left.html">Left Aligned</a></li>
<li><a href="menu-center.html">Center Aligned</a></li>
<li><a href="menu-right.html">Right Aligned</a></li>
</ul>
</li>
<li><a href="menu-dots.html">Dots Menu</a></li>
<li><a href="menu-one-page.html">One Page Menu</a></li>
<li><a href="menu-hover-background.html">Hover Background</a></li>
<li><a href="menu-button.html">Button Version</a></li>
<li><a href="menu-social-icons.html">Social Icons Version</a></li>
<li><a href="menu-onclick.html">OnClick Open</a></li>
<li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
</ul>
</li>
 <li class="dropdown-submenu"><a href="#">Page Title</a>
<ul class="dropdown-menu">
<li><a href="page-title.html">Default</a></li>
<li><a href="page-title-image.html">Image background</a></li>
<li><a href="page-title-video.html">Video background</a></li>
<li><a href="page-title-pattern.html">Pattern background</a></li>
<li><a href="page-title-background-color.html">Colored background</a></li>
<li><a href="page-title-parallax.html">Parallax</a></li>
<li><a href="page-title-animated.html">Animated</a></li>
<li><a href="page-title-right.html">Right Aligned</a></li>
<li><a href="page-title-left.html">Left Aligned</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Page Menu<span class="badge badge-danger">NEW</span></a>
<ul class="dropdown-menu">
<li><a href="page-menu.html">Default</a></li>
<li><a href="page-menu-rounded.html">Rounded</a></li>
<li><a href="page-menu-outline.html">Outline</a></li>
<li><a href="page-menu-lines.html">Lines</a></li>
<li><a href="page-menu-solid.html">Solid</a></li>
<li><a href="page-menu-light.html">Light</a></li>
<li><a href="page-menu-dark.html">Dark</a></li>
<li><a href="page-menu-creative.html">Creative</a></li>
<li><a href="page-menu.html">Dropdown</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Sidebars</a>
<ul class="dropdown-menu">
<li><a href="sidebar-sticky.html">Sticky version</a></li>
<li><a href="sidebar.html">Left aligned</a></li>
<li><a href="sidebar-right.html">Right aligned</a></li>
<li><a href="sidebar-both.html">Both Sidebars</a></li>
<li><a href="sidebar-modern.html">Modern</a></li>
<li><a href="sidebar-modern-right.html">Modern Right</a></li>
<li><a href="sidebar-modern-both.html">Modern Both Sidebars</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Footers</a>
<ul class="dropdown-menu">
<li><a href="footer.html#footer">Default</a></li>
<li><a href="footer-dark.html#footer">Dark</a></li>
<li><a href="footer-1.html#footer">Footer 1</a></li>
 <li><a href="footer-2.html#footer">Footer 2</a></li>
<li><a href="footer-3.html#footer">Footer 3</a></li>
<li><a href="footer-4.html#footer">Footer 4</a></li>
<li><a href="footer-5.html#footer">Footer 5</a></li>
<li><a href="footer-6.html#footer">Footer 6</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Options</a>
<ul class="dropdown-menu">
<li><a href="layout-boxed.html">Boxed</a></li>
<li><a href="layout-modern.html">Modern</a></li>
<li><a href="layout-frame.html">Frame</a></li>
<li><a href="layout-wide.html">Wide (default)</a></li>
</ul>
</li>
<li><a href="preview/index.html">Layout Demos<span class="badge badge-primary">220+</span></a></li>
</ul>
</li>
<li class="dropdown"><a href="#">Features</a>
<ul class="dropdown-menu">
<li class="dropdown-submenu"><a href="#">Sliders</a>
<ul class="dropdown-menu">
<li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
<li><a href="slider-inspiro-slider.html">Inspiro Slider</a></li>
<li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
<li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
<li><a href="slider-static-media-text-rotator.html">Fullscreen Text Rotator</a></li>
<li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
</ul>
</li>
<li><a href="widgets.html">Widgets</a></li>
<li><a href="page-loaders.html">Page Loaders<span class="badge badge-danger">NEW</span></a></li>
<li class="dropdown-submenu"><a href="#">Modal Auto Open<span class="badge badge-danger">NEW</span></a>
<ul class="dropdown-menu">
<li><a href="modal-auto-open-subscription.html">Subscription</a></li>
<li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
<li><a href="modal-auto-open-login.html">Login Form</a></li>
<li><a href="modal-auto-open-audio.html">Audio Player</a></li>
<li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
<li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
<li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
<li><a href="modal-auto-open-iframe.html">Iframe</a></li>
<li><a href="modal-auto-open.html">Sample Text</a></li>
</ul>
</li>
<li class="dropdown-submenu"><a href="#">Cookie Notify<span class="badge badge-danger">NEW</span></a>
<ul class="dropdown-menu">
<li><a href="cookie-notify.html">Top position</a></li>
<li><a href="cookie-notify-bottom.html">Bottom position</a></li>
</ul>
</li>
<li><a href="shape-dividers.html">Shape Dividers<span class="badge badge-danger">NEW</span></a></li>
<li class="dropdown-submenu"><a href="#">Menu Labels</a>
<ul class="dropdown-menu">
<li><a href="#">Label (new)<span class="badge badge-danger">NEW</span></a></li>
<li><a href="#">Label (hot)<span class="badge badge-danger">HOT</span></a></li>
<li><a href="#">Label (popular)<span class="badge badge-success">POPULAR</span></a></li>
<li><a href="#">Label (sale)<span class="badge badge-warning">SALE</span></a></li>
<li><a href="#">Label (info)<span class="badge badge-info">INFO</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="dropdown mega-menu-item"><a href="#">Elements</a>
<ul class="dropdown-menu">
<li class="mega-menu-content">
<div class="row">
<div class="col-lg-2">
<ul>
<li><a href="shortcode-according.html">Accordions</a></li>
<li><a href="shortcode-alerts.html">Alerts</a></li>
<li><a href="shortcode-animations.html">Animations</a></li>
<li><a href="shortcode-avatar.html">Avatar</a></li>
<li><a href="shortcode-audio-video.html">Audio & Video</a></li>
<li><a href="shortcode-blockquotes.html">Blockquotes</a></li>
<li><a href="component-bootstrap-switch.html">BS Switch<span class="badge badge-danger">NEW</span></a></li>
<li><a href="component-bootstrap-notify.html">BS Notify<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-breadcrumbs.html">Breadcrumbs</a></li>
<li><a href="shortcode-buttons.html">Buttons</a></li>
<li><a href="shortcode-background-image.html">Background Image</a></li>
<li><a href="shortcode-background-overlays.html">Background Overlays</a></li>
</ul>
 </div>
<div class="col-lg-2">
<ul>
<li><a href="component-charts-chartjs.html">Charts<span class="badge badge-danger">NEW</span></a></li>
<li><a href="component-calendar.html">Calendar<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-client-logo.html">Clients logos</a></li>
<li><a href="shortcode-calltoaction.html">Call to action</a></li>
<li><a href="shortcode-carousel.html">Carousel</a></li>
<li><a href="shortcode-code.html">Code</a></li>
<li><a href="shortcode-countdown-timer.html">Countdown Timers</a></li>
<li><a href="shortcode-countdown.html">Countdown<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-counters.html">Counter Numbers</a></li>
<li><a href="component-clipboard.html">Clipboard<span class="badge badge-danger">NEW</span></a></li>
<li><a href="component-datatable.html">Data Tables<span class="badge badge-danger">NEW</span></a></li>
<li><a href="component-daterangepicker.html">Date & Time Pickers</a></li>
</ul>
</div>
<div class="col-lg-2">
<ul>
<li><a href="shortcode-dropcat-highlight.html">Dropcat & Highlight</a></li>
<li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
<li><a href="shortcode-team-members.html">Team members</a></li>
<li><a href="shortcode-forms.html">Form Controls</a></li>
<li><a href="shortcode-form-validation.html">Form Validation</a></li>
<li><a href="shortcode-form-layouts.html">Form Layouts</a></li>
<li><a href="shortcode-file-upload.html">File upload</a></li>
<li><a href="shortcode-grid.html">Grid System</a></li>
<li><a href="shortcode-heading-styles.html">Heading Styles</a></li>
<li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
<li><a href="shortcode-icon-lists.html">Icons</a></li>
<li><a href="shortcode-images.html">Images</a></li>
</ul>
</div>
<div class="col-lg-2">
<ul>
<li><a href="shortcode-lightbox.html">Lightbox</a></li>
<li><a href="shortcode-lists.html">Lists</a></li>
 <li><a href="shortcode-labels-badgets.html">Labels & Badges</a></li>
<li><a href="shortcode-maps.html">Maps</a></li>
<li><a href="shortcode-modal.html">Modal</a></li>
<li><a href="shortcode-modal-strip.html">Modal Strip</a></li>
<li><a href="shortcode-navs.html">Navbar & Navs</a></li>
<li><a href="shortcode-paginations.html">Pagination & Pager</a></li>
<li><a href="shortcode-panels.html">Panels</a></li>
<li><a href="shortcode-pie-chart.html">Pie charts</a></li>
<li><a href="shortcode-popover.html">Popover</a></li>
<li><a href="shortcode-milestone-stats.html">Milestone & Stats</a></li>
</ul>
</div>
<div class="col-lg-2">
<ul>
<li><a href="shortcode-pricing-table.html">Pricing tables</a></li>
<li><a href="shortcode-progress-bar.html">Progress bars</a></li>
<li><a href="shortcode-parallax.html">Parallax</a></li>
<li><a href="shortcode-particles.html">Particles<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-responsive-utilities.html">Responsive utilities</a></li>
<li><a href="component-ion-range-slider.html">Range Slider<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-sections.html">Sections</a></li>
<li><a href="shortcode-smooth-scrolling.html">Smooth Scrolling</a></li>
<li><a href="shortcode-social-icons.html">Social Icons</a></li>
<li><a href="shortcode-spinners.html">Spinners<span class="badge badge-danger">NEW</span></a></li>
<li><a href="component-toggles-radio-checkboxes.html">Switch Toggle<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-shape-dividers.html">Shape Dividers<span class="badge badge-danger">NEW</span></a></li>
</ul>
</div>
<div class="col-lg-2">
<ul>
<li><a href="shortcode-ratings.html">Ratings<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-tables.html">Tables</a></li>
<li><a href="shortcode-textbox.html">Text Boxes</a></li>
<li><a href="shortcode-tabs.html">Tabs</a></li>
<li><a href="shortcode-testimonial.html">Testimonials</a></li>
 <li><a href="shortcode-toggles.html">Toggles</a></li>
<li><a href="shortcode-tooltips.html">Tooltips</a></li>
<li><a href="shortcode-typography.html">Typography</a></li>
<li><a href="shortcode-text-rotator.html">Text Rotator</a></li>
<li><a href="shortcode-timeline.html">Timeline<span class="badge badge-danger">NEW</span></a></li>
<li><a href="shortcode-video-background.html">Video Background</a></li>
<li><a href="shortcode-wizard.html">Wizard<span class="badge badge-danger">NEW</span></a></li>
</ul>
</div>
</div>
</li>
</ul>
</li>
<li class="dropdown"><a href="#">Pages</a>
<ul class="dropdown-menu">
<li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
<ul class="dropdown-menu">
<li><a href="page-about-basic.html">Basic</a></li>
<li><a href="page-about-extended.html">Extended</a></li>
</ul>
</li>
<li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
<ul class="dropdown-menu">
<li><a href="page-about-me-creative.html">Creative<span class="badge badge-danger">NEW</span></a></li>
<li><a href="page-about-me-basic.html">Basic</a></li>
<li><a href="page-about-me-extended.html">Extended</a></li>
</ul>
</li>
<li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
<ul class="dropdown-menu">
<li><a href="page-contact-classic.html">Classic</a></li>
<li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a></li>
<li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a></li>
<li><a href="page-contact-map-bottom.html">Map bottom</a></li>
<li><a href="page-contact-sidebar-left.html">Sidebar Left</a></li>
<li><a href="page-contact-sidebar-right.html">Sidebar Right</a></li>
</ul>
</li>
<li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
<ul class="dropdown-menu">
<li><a href="page-gallery-2.html">Two Columns</a></li>
<li><a href="page-gallery-3.html">Three Columns</a></li>
<li><a href="page-gallery-4.html">Four Columns</a></li>
<li><a href="page-gallery-5.html">Five Columns</a></li>
<li><a href="page-gallery-6.html">Six Columns</a></li>
<li><a href="page-gallery-sidebar.html">Sidebar version</a></li>
<li><a href="page-gallery-wide.html">Wide version</a></li>
<li><a href="page-gallery-load-more.html">Load more</a></li>
<li><a href="page-gallery-infinite-scroll.html">Infinity Scroll</a></li>

</ul>
</li>
<li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
<ul class="dropdown-menu">
<li><a href="page-user-login.html">Login</a></li>
<li><a href="page-user-login-classic.html">Login - Classic</a></li>
<li><a href="page-user-register.html">Register</a></li>
<li><a href="page-user-register-classic.html">Register - Classic</a></li>
<li><a href="page-user-password-recovery.html">Recovery Password</a></li>
</ul>
</li>
<li><a href="page-services.html">Services</a></li>
<li><a href="page-our-team.html">Our team</a></li>
<li><a href="page-our-clients.html">Our clients</a></li>
<li><a href="page-maintenance.html">Maintenance</a></li>
<li><a href="page-404.html">404 Page</a></li>
<li><a href="page-404-parallax.html">404 Page - Parallax</a></li>
<li><a href="page-500.html">500 Page</a></li>
<li><a href="page-fullwidth.html">Fullwidth page</a></li>
<li><a href="page-fullwidth-wide.html">Fullwidth page - Wide</a></li>
<li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
<ul class="dropdown-menu">
<li><a href="page-sidebar.html">Sidebar Left</a></li>
<li><a href="page-sidebar-right.html">Sidebar Right</a></li>
<li><a href="page-sidebar-both.html">Sidebar Both</a></li>
</ul>
</li>
<li><a href="page-site-map.html">Site Map</a></li>
<li><a href="page-faq.html">FAQ</a></li>
</ul>
</li>
<li class="dropdown mega-menu-item"><a href="#">Portfolio</a>
<ul class="dropdown-menu">
<li class="mega-menu-content">
<div class="row">
<div class="col-lg-2-5">
 <ul>
<li class="mega-menu-title">Grids</li>
<li><a href="portfolio-2.html">Two Columns</a></li>
<li><a href="portfolio-3.html">Three Columns</a></li>
<li><a href="portfolio-4.html">Four Columns</a></li>
<li><a href="portfolio-5.html">Five Columns</a></li>
<li><a href="portfolio-6.html">Six Columns</a></li>
<li><a href="portfolio-sidebar.html">Sidebar version</a></li>
<li><a href="portfolio-wide-3.html">Wide version</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Masonry</li>
<li><a href="portfolio-masonry-2.html">Two Columns</a></li>
<li><a href="portfolio-masonry-3.html">Three Columns<span class="badge badge-danger">HOT</span></a></li>
<li><a href="portfolio-masonry-4.html">Four Columns</a></li>
<li><a href="portfolio-masonry-5.html">Five Columns</a></li>
<li><a href="portfolio-masonry-6.html">Six Columns</a></li>
<li><a href="portfolio-masonry-sidebar.html">Sidebar version</a></li>
<li><a href="portfolio-masonry-wide-3.html">Wide version</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Styles</li>
<li><a href="portfolio-filter-styles.html">Filter Styles</a></li>
<li><a href="portfolio-load-more.html">Load more</a></li>
<li><a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a></li>
<li><a href="portfolio-infinite-scroll.html">Infinity Scroll</a></li>
<li><a href="portfolio-ajax.html">Portfolio Ajax</a></li>
<li><a href="portfolio-gallery-modal.html">Gallery Modal</a></li>
<li><a href="portfolio-video-modal.html">Video Modal</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Layouts</li>
<li><a href="portfolio-sidebar-left.html">Left Sidebar</a></li>
<li><a href="portfolio-sidebar-right.html">Right Sidebar</a></li>
<li><a href="portfolio-sidebar-both.html">Both Sidebars</a></li>
<li><a href="portfolio-slider-3.html">Slider Default</a></li>
<li><a href="portfolio-no-page-title.html">No Page Title</a></li>
<li><a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a></li>
<li><a href="portfolio-hover-styles.html">Hover Styles</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Single Project</li>
<li><a href="portfolio-page-grid-gallery.html">Grid Gallery</a></li>
<li><a href="portfolio-page-particles.html">Particles Wide Project</a></li>
<li><a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a></li>
<li><a href="portfolio-page-slider.html">Slider version</a></li>
<li><a href="portfolio-page-background-image.html">Fullscreen image</a></li>
<li><a href="portfolio-page-background-video.html">Fullscreen Video</a></li>
</ul>
</div>
<div class="col-md-12 no-padding">
<div class="d-none d-lg-block m-t-40 m-b-10">
<div class="container">
<div class="row">
<div class="col-lg-9 m-t-10">
<div class="text-center center">
<div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
</div>
</div>
<div class="col-lg-3"><a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a></div>
</div>
</div>
</div>
<ul class="d-block d-lg-none">
<li><a class="mega-menu-title" href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a></li>
</ul>
</div>
</div>
</li>
</ul>
</li>
<li class="dropdown mega-menu-item"><a href="#">Blog</a>
<ul class="dropdown-menu">
<li class="mega-menu-content">
 <div class="row">
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Masonry</li>
<li><a href="blog-masonry-2.html">Two Columns</a></li>
<li><a href="blog-masonry-3.html">Three Columns<span class="badge badge-danger">HOT</span></a></li>
<li><a href="blog-masonry-4.html">Four Columns</a></li>
<li><a href="blog-masonry-sidebar.html">Sidebar version</a></li>
<li><a href="blog-masonry-no-page-title.html">No page title</a></li>
<li><a href="blog-masonry-wide.html">Wide version</a></li>
<li><a href="blog-masonry-load-more.html">Load More</a></li>
<li><a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a></li>
<li><a href="blog-masonry-filter.html">Filter Categories</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Grids Layout</li>
<li><a href="blog-1.html">One Column</a></li>
<li><a href="blog-2.html">Two Columns</a></li>
<li><a href="blog-3.html">Three Columns</a></li>
<li><a href="blog-4.html">Four Columns</a></li>
<li><a href="blog-no-page-title.html">No page title</a></li>
<li><a href="blog-wide.html">Wide version</a></li>
<li><a href="blog-load-more.html">Load More</a></li>
<li><a href="blog-infinite-scroll.html">Infinite Scroll</a></li>
<li><a href="blog-filter.html">Filter Categories</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Left Image</li>
<li><a href="blog-left-image-sidebar-right.html">Right Sidebar</a></li>
<li><a href="blog-left-image-sidebar-left.html">Left Sidebar</a></li>
<li><a href="blog-left-image-sidebar-both.html">Both Sidebars</a></li>
<li><a href="blog-left-image-no-sidebar.html">No Sidebar</a></li>
<li><a href="blog-left-image-no-page-title.html">No page title</a></li>
<li><a href="blog-left-image-load-more.html">Load More</a></li>
<li><a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a></li>
<li><a href="blog-left-image-author-info.html">Author Info</a></li>
<li><a href="blog-left-image-filter.html">Filter Categories</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Layouts</li>
<li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
<li><a href="blog-sidebar-right.html">Right Sidebar</a></li>
<li><a href="blog-sidebar-both.html">Both Sidebars</a></li>
<li><a href="blog-fullwidth.html">Fullwidth</a></li>
<li class="mega-menu-title">Post Item Styles</li>
<li><a href="blog-style-shadow.html">Shadow</a></li>
<li><a href="blog-style-textual.html">Textual</a></li>
<li><a href="blog-style-grey-bg.html">Grey Background</a></li>
<li><a href="blog-style-author-info.html">Author Info</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Single Post</li>
<li><a href="blog-single.html">Default</a></li>
<li><a href="blog-single-slider.html">Slider</a></li>
<li><a href="blog-single-video.html">Video</a></li>
<li><a href="blog-single-audio.html">Audio</a></li>
<li><a href="blog-single-creative.html">Creative</a></li>
<li class="mega-menu-title">Comments<span class="badge badge-danger">NEW</span></li>
<li><a href="blog-comments.html#comments">Default Comments</a></li>
<li><a href="blog-comments-disqus.html#comments">Disqus Comments</a></li>
<li><a href="blog-comments-facebook.html#comments">Facebook Comments</a></li>
</ul>
</div>
</div>
</li>
</ul>
</li>
<li class="dropdown mega-menu-item"><a href="#">Shop</a>
<ul class="dropdown-menu">
<li class="mega-menu-content">
<div class="row">
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Columns</li>
 <li><a href="shop-columns-2.html">Two Columns</a></li>
<li><a href="shop-columns-3.html">Three Columns</a></li>
<li><a href="shop-columns-4.html">Four Columns</a></li>
<li><a href="shop-columns-5.html">Five Columns</a></li>
<li><a href="shop-columns-6.html">Six Columns</a></li>
<li><a href="shop-sidebar-sticky.html">Sidebar Sticky</a></li>
<li><a href="shop-wide.html">Wide version</a></li>
<li><a href="shop-no-page-title.html">No page title</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Layouts</li>
<li><a href="shop-sidebar-left.html">Left Sidebar</a></li>
<li><a href="shop-sidebar-right.html">Right Sidebar</a></li>
<li><a href="shop-sidebar-both.html">Both Sidebars</a></li>
<li><a href="shop-fullwidth.html">Fullwidth (Wide)</a></li>
<li class="mega-menu-title">Loading Styles</li>
<li><a href="shop-load-more.html">Load more</a><a href="shop-load-more-sidebar.html">Load Sidebar</a></li>
<li><a href="shop-infinite-scroll.html">Infinity Scroll</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Order process</li>
<li><a class="animsition-link" href="shop-cart.html">Shoping Cart</a></li>
<li><a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a></li>
<li><a class="animsition-link" href="shop-checkout.html">Checkout</a></li>
<li><a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a></li>
<li><a href="shop-wishlist.html">Wishlist</a></li>
<li><a href="shop-wishlist-empty.html">Wishlist Empty</a></li>
</ul>
</div>
<div class="col-lg-2-5">
<ul>
<li class="mega-menu-title">Single Product</li>
<li><a href="shop-single-product.html">Fullwidth</a></li>
<li><a href="shop-single-product-sidebar-left.html">Left Sidebar</a></li>
<li><a href="shop-single-product-sidebar-right.html">Right Sidebar</a></li>
<li><a href="shop-single-product-sidebar-both.html">Both Sidebars</a></li>
</ul>
</div>
<div class="col-lg-2-5 p-l-0">
<h4 class="text-theme">BIG SALE<small>Up to</small></h4>
<h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
<p class="m-b-0">The most happiest time of the day!. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p><a class="btn btn-shadow btn-rounded btn-block m-t-10">SHOP NOW!</a><small class="t300">
<p class="text-center m-0"><em>* Limited time Offer</em></p>
</small>
</div>
</div>
</li>
</ul>
</li>
</ul>
</nav>
</div>
</div>

</div>
</div>
</header>


<section id="slider">
<div id="rev_slider_346_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="beforeafterslider1" data-source="gallery" style="background:#252525;padding:0px;">

<div id="rev_slider_346_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">
<ul>

<li data-index="rs-964" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://server.local/revslider/wp-content/uploads/" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"linear-gradient(270deg, rgba(238,205,163,1) 0%, rgba(239,98,159,1) 100%)","bgType":"solid","bgImage":"","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false,"bounceArrows":"infinite","bounceType":"repel","bounceAmount":"5","bounceSpeed":"1500","bounceEasing":"ease-in-out","bounceDelay":"750","shiftOffset":"10","shiftTiming":"300","shiftEasing":"ease","shiftDelay":"250"}'>

<img src="{{asset('plugins/transparent.png')}}" data-bgcolor='linear-gradient(90deg, rgba(203,186,204,1) 0%, rgba(36,57,73,1) 100%)' style='background:linear-gradient(90deg, rgba(203,186,204,1) 0%, rgba(36,57,73,1) 100%)' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>


<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-37" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-280','-280','-280','-280']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:top;rX:-180deg;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="{{asset('plugins/object_macscreen_1-2.png')}}" alt="" data-ww="['1000px','1000px','1000px','500px']" data-hh="['1000px','1000px','1000px','500']" width="2000" height="2000" data-no-retina> </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-23" data-x="['center','center','center','center']" data-hoffset="['-578','-578','-578','-221']" data-y="['middle','middle','middle','middle']" data-voffset="['-344','-344','-344','-194']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"x:left;y:-500px;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;"><img src="{{asset('plugins/object_plant_1.png')}}" alt="" data-ww="['375px','375px','375px','200px']" data-hh="['375px','375px','375px','200px']" width="1500" height="1500" data-no-retina> </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-28" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-170']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;"><img src="{{asset('plugins/keyboard_apple.png')}}" alt="" data-ww="['600px','600px','600px','300px']" data-hh="['600px','600px','600px','300px']" width="1600" height="1600" data-no-retina> </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-964-layer-22" data-x="['center','center','center','center']" data-hoffset="['307','307','307','131']" data-y="['middle','middle','middle','middle']" data-voffset="['-59','-59','-59','-103']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"x:200px;y:bottom;rZ:-180deg;sX:1;sY:1;","to":"o:1;rZ:-20;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;"><img src="{{asset('plugins/object_macmouse_1.png')}}" alt="" data-ww="['250px','250px','250px','125px']" data-hh="['250px','250px','250px','125px']" width="1000" height="1000" data-no-retina> </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-964-layer-35" data-x="['center','center','center','center']" data-hoffset="['-296','-296','-296','-149']" data-y="['middle','middle','middle','middle']" data-voffset="['-67','-67','-67','-89']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:left;y:200px;rZ:180deg;sX:1;sY:1;","to":"o:1;rZ:45;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;"><img src="{{asset('plugins/object_glasses_2.png')}}" alt="" data-ww="['250px','250px','250px','125px']" data-hh="['250px','250px','250px','125px']" width="1000" height="1000" data-no-retina> </div>

<div class="tp-caption   tp-resizeme  tp-whiteshadow rs-parallaxlevel-5" id="slide-964-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']" data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']" data-letterspacing="['50','50','50','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" data-blendmode="screen" style="z-index: 10; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #000000; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">NICE </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-964-layer-48" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['210','210','210','100']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Montserrat;text-transform:uppercase;">Get the Before / After Add-On for Slider Revolution free </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-46" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['70','70','70','80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" data-blendmode="overlay" style="z-index: 12; white-space: nowrap; font-size: 15px; line-height: 60px; font-weight: 700; color: #ffffff; letter-spacing: 5px;font-family:Montserrat;background-color:rgb(101,101,101);cursor:pointer;"><i class="fas fa-sign-in-alt" ></i> </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-38" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-280','-280','-280','-280']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:top;rX:-180deg;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;"><img src="{{asset('plugins/object_macscreen_2.png')}}" alt="" data-ww="['1000px','1000px','1000px','500px']" data-hh="['1000px','1000px','1000px','500']" width="2000" height="2000" data-no-retina> </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-42" data-x="['center','center','center','center']" data-hoffset="['545','545','545','181']" data-y="['middle','middle','middle','middle']" data-voffset="['-203','-203','-203','-178']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"x:right;y:-500px;rZ:-180deg;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;"><img src="{{asset('plugins/object_coffee_1.png')}}" alt="" data-ww="['375px','375px','375px','170px']" data-hh="['375px','375px','375px','170px']" width="1500" height="1500" data-no-retina> </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-45" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-170']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15;"><img src="{{asset('plugins/keyboard_apple.png')}}" alt="" data-ww="['600px','600px','600px','300px']" data-hh="['600px','600px','600px','300px']" width="1600" height="1600" data-no-retina> </div>

<div class="tp-caption   tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-964-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']" data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']" data-letterspacing="['50','50','50','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]" data-blendmode="overlay" style="z-index: 16; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #ffffff; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">CLEAN </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-964-layer-49" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['210','210','210','100']" data-width="['960','960','960','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 17; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Montserrat;text-transform:uppercase;">Get the Before / After Add-On for Slider Revolution free </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-44" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['70','70','70','80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,45,45,45]" data-blendmode="overlay" style="z-index: 18; white-space: nowrap; font-size: 15px; line-height: 60px; font-weight: 700; color: #ffffff; letter-spacing: 5px;font-family:Montserrat;background-color:rgb(101,101,101);cursor:pointer;">Register </div>
</li>

<li data-index="rs-965" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('plugins/night-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"#e7e7e7","bgType":"image","bgImage":"http:\/\/server.local\/revslider\/wp-content\/uploads\/revslider\/beforeafterslider\/day.jpg","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>

<img src="{{asset('plugins/night.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power4.easeOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="30" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>


<div class="tp-caption   fullscreenvideo  tp-blendvideo disabled_lc tp-videolayer" id="slide-965-layer-15" data-x="0" data-y="0" data-whitespace="normal" data-type="video" data-beforeafter="before" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-videocontrols="none" data-videowidth="100%" data-videoheight="100%" data-videoposter="{{asset('plugins/tp_vid_clouds-1.jpg')}}" data-videomp4="{{asset('plugins/tp_vid_clouds-2.mp4')}}" data-noposteronmobile="off" data-videopreload="auto" data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="overlay" data-autoplay="on" data-volume="mute" style="z-index: 5;"> </div>

<div class="tp-caption tp-shape tp-shapewrapper " id="slide-965-layer-17" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal" data-type="shape" data-beforeafter="before" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;"> </div>

<div class="tp-caption   tp-resizeme  tp-whiteshadow" id="slide-965-layer-1" data-x="['center','center','center','center']" data-hoffset="['-280','-280','-280','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" data-fontsize="['100','100','100','60']" data-lineheight="['100','100','100','60']" data-width="['600','600','600','none']" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]" data-blendmode="screen" style="z-index: 7; min-width: 600px; max-width: 600px; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #000000; letter-spacing: 20px;font-family:Montserrat;text-transform:uppercase;">Night </div>
 
<div class="tp-caption   tp-resizeme  tp-blackshadow" id="slide-965-layer-9" data-x="['center','center','center','center']" data-hoffset="['280','280','280','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" data-fontsize="['100','100','100','60']" data-lineheight="['100','100','100','60']" data-width="['600','600','600','none']" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]" data-blendmode="overlay" style="z-index: 8; min-width: 600px; max-width: 600px; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #ffffff; letter-spacing: 20px;font-family:Montserrat;text-transform:uppercase;">DAY </div>

<div class="tp-caption   tp-resizeme" id="slide-965-layer-11" data-x="['center','center','center','center']" data-hoffset="['300','300','300','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','100']" data-fontsize="['20','20','20','15']" data-lineheight="['25','25','25','20']" data-width="['400','400','400','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 400px; max-width: 400px; white-space: normal; font-size: 20px; line-height: 25px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">I often think that the night is more alive and more richly colored than the day.<br />
— Vincent Van Gogh
</div>

<div class="tp-caption   tp-resizeme" id="slide-965-layer-13" data-x="['center','center','center','center']" data-hoffset="['-300','-300','-300','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','100']" data-fontsize="['20','20','20','15']" data-lineheight="['25','25','25','20']" data-width="['400','400','400','320']" data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; min-width: 400px; max-width: 400px; white-space: normal; font-size: 20px; line-height: 25px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">Fishing, with me, has always been an excuse to drink in the daytime.
<br />
— Jimmy Cannon </div>
</li>

<li data-index="rs-966" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('plugins/before1-1-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"#e7e7e7","bgType":"image","bgImage":"http:\/\/server.local\/revslider\/wp-content\/uploads\/revslider\/beforeafterslider\/after1-1.jpg","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>

<img src="{{asset('plugins/before1-1.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power4.easeOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="30" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>


<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-966-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-fontsize="['300','300','300','200']" data-lineheight="['300','300','300','200']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"sX:5;sY:5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[50,50,50,50]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 300px; line-height: 300px; font-weight: 400; color: rgba(0,28,159,0.5); letter-spacing: 0px;font-family:Abril Fatface;">
<div class="rs-looped rs-pulse" data-easing="Power1.easeInOut" data-speed="1" data-zoomstart="1" data-zoomend="1.05">& </div>
</div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-966-layer-1" data-x="['center','center','center','center']" data-hoffset="['-250','-250','-250','-60']" data-y="['middle','middle','middle','middle']" data-voffset="['1','1','1','-50']" data-fontsize="['150','150','150','80']" data-lineheight="['150','150','150','80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on" data-frames='[{"delay":450,"speed":2000,"frame":"0","from":"x:-200px;sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 150px; line-height: 150px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Yellowtail;">Before </div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-966-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['300','300','300','200']" data-lineheight="['300','300','300','200']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[50,50,50,50]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 300px; line-height: 300px; font-weight: 400; color: rgba(233,0,82,0.5); letter-spacing: 0px;font-family:Abril Fatface;">
<div class="rs-looped rs-pulse" data-easing="Power1.easeInOut" data-speed="1" data-zoomstart="1" data-zoomend="1.05">& </div>
</div>

<div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-966-layer-7" data-x="['center','center','center','center']" data-hoffset="['250','250','250','60']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','40']" data-fontsize="['120','120','120','80']" data-lineheight="['120','120','120','80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:200px;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[5,5,5,5]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]" style="z-index: 8; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Abril Fatface;">After </div>
</li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
</div>
</div>

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
</section>


<footer id="footer">
<div class="footer-content">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="widget">
<div class="widget-title">Polo HTML5 Template</div>
<p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
All rights reserved. Copyright © 2019. INSPIRO.</p>
<a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a>
</div>
</div>
<div class="col-lg-7">
<div class="row">
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Discover</div>
<ul class="list">
<li><a href="#">Features</a></li>
<li><a href="#">Layouts</a></li>
<li><a href="#">Corporate</a></li>
<li><a href="#">Updates</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Customers</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Features</div>
<ul class="list">
<li><a href="#">Layouts</a></li>
<li><a href="#">Headers</a></li>
<li><a href="#">Widgets</a></li>
<li><a href="#">Footers</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Pages</div>
<ul class="list">
<li><a href="#">Portfolio</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Shop</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Support</div>
<ul class="list">
<li><a href="#">Help Desk</a></li>
<li><a href="#">Documentation</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="copyright-content">
<div class="container">
<div class="copyright-text text-center">&copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template.
All Rights Reserved.<a href="//www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a> </div>
</div>
</div>
</footer>

</div>


<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="{{asset('js/plugins.js')}}"></script>

<script src="{{asset('js/functions.js')}}"></script>
</body>
</html>