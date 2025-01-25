<?php
use App\add_category;
use App\cart_list;
use App\logo;
use App\font;
use App\contact_detail  ;  

$contact  =  contact_detail::first()  ;
$logo = logo::first();
$font = font::first();

$parent = add_category::Where('parent', 'none')->Where('sub_parent', 'none')->get();
$category_menu = add_category::Where('parent', 'none')->Where('sub_parent', 'none')->get();

?>

<?php

if (session('client')) {
    $number = cart_list::where('email', session('client')['id'])->get();
} elseif (isset($_COOKIE['session_id'])) {
    $number = cart_list::where('session_id', $_COOKIE['session_id'])->get();
}

if (isset($number)) {
    $item_number = 0;
    foreach ($number as $numbers) {
        $item_number = $item_number + $numbers->quantity;
    }
}
?>


<!DOCTYPE html>
<html lang="en-US">
<!--<![endif]-->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <!---place boostrap here  --->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet" type="text/css">




    <link rel="pingback" href="xmlrpc.php" />


    <title>@yield('title') --- {{ config('app.name') }}</title>

    <?php $about = App\page_content::where('page', 'about')->first(); ?>

   

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />





    <meta property="og:site_name" content="{{ config('app.name') }}" />





    <meta name="description" content="@yield('description')">

    <meta name="keywords" content="T-Shirt, Shirt, FaceCap, Towel, School Uniform, Stocking, 
    Customized shirt/jacket, shoe,muffler, security uniform, gift items , monogramming , mono , monogram etc">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title') --- {{ config('app.name') }}" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="https://zicodimmono.com.ng/slider/{{ $logo->picture }}" />
    <meta property="og:url" content="https://zicodimmono.com.ng/@yield('url')" />
    <meta property="og:type" content="e-commerce website" />
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="@yield('title') --- {{ config('app.name') }}" />
    <meta name="twitter:title" content="@yield('title') --- {{ config('app.name') }}" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="https://zicodimmono.com.ng/slider/{{ $logo->picture }}" />










    <link rel='dns-prefetch' href='/' />
    <link rel='dns-prefetch' href='http://maps.google.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />



    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='single-location-block-css'
        href='/moi_content/plugins/locations/blocks/single-location/style3afa.css?ver=1586870826' type='text/css'
        media='all' />
    <link rel='stylesheet' id='all-locations-block-css'
        href='/moi_content/plugins/locations/blocks/all-locations/style3afa.css?ver=1586870826' type='text/css'
        media='all' />
    <link rel='stylesheet' id='store-locator-block-css'
        href='/moi_content/plugins/locations/blocks/store-locator/style3afa.css?ver=1586870826' type='text/css'
        media='all' />
    <link rel='stylesheet' id='search-locations-block-css'
        href='/moi_content/plugins/locations/blocks/search-locations/style3afa.css?ver=1586870826' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='/moi_content/plugins/contact-form-7/includes/css/styles9dff.css?ver=5.3.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='cookie-law-info-css'
        href='/moi_content/plugins/cookie-law-info/public/css/cookie-law-info-publicbb23.css?ver=1.9.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='cookie-law-info-gdpr-css'
        href='/moi_content/plugins/cookie-law-info/public/css/cookie-law-info-gdprbb23.css?ver=1.9.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wp-locations-css-css'
        href='/moi_content/plugins/locations/assets/css/locations7263.css?ver=5.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='/moi_content/plugins/revslider/public/assets/css/rs6fe13.css?ver=6.1.8' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='wpcp-slick-css'
        href='/moi_content/plugins/wp-carousel-pro/public/css/slick.minc6bd.css?ver=3.1.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wpcp-bx-slider-css-css'
        href='/moi_content/plugins/wp-carousel-pro/public/css/jquery.bxslider.minc6bd.css?ver=3.1.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wp-carousel-pro-fontawesome-css'
        href='/moi_content/plugins/wp-carousel-pro/public/css/font-awesome.minc6bd.css?ver=3.1.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wpcp-magnific-popup-css'
        href='/moi_content/plugins/wp-carousel-pro/public/css/magnific-popup.minc6bd.css?ver=3.1.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wp-carousel-pro-css'
        href='/moi_content/plugins/wp-carousel-pro/public/css/wp-carousel-pro-public.minc6bd.css?ver=3.1.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='parent-style-css' href='/moi_content/themes/totalbusiness/style7263.css?ver=5.4.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='/moi_content/themes/totalbusiness-child/style7263.css?ver=5.4.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='Lato-google-font-css'
        href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Clatin&amp;ver=5.4.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='Crete-Round-google-font-css'
        href='https://fonts.googleapis.com/css?family=Crete+Round%3Aregular%2Citalic&amp;subset=latin-ext%2Clatin&amp;ver=5.4.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='Raleway-google-font-css'
        href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5.4.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='superfish-css'
        href='/moi_content/themes/totalbusiness/plugins/superfish/css/superfish7263.css?ver=5.4.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dlmenu-css'
        href='/moi_content/themes/totalbusiness/plugins/dl-menu/component7263.css?ver=5.4.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='/moi_content/themes/totalbusiness/plugins/font-awesome-new/css/font-awesome.min7263.css?ver=5.4.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elegant-font-css'
        href='/moi_content/themes/totalbusiness/plugins/elegant-font/style7263.css?ver=5.4.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='jquery-fancybox-css'
        href='/moi_content/themes/totalbusiness/plugins/fancybox/jquery.fancybox7263.css?ver=5.4.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='totalbusiness-flexslider-css'
        href='/moi_content/themes/totalbusiness/plugins/flexslider/flexslider7263.css?ver=5.4.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='style-responsive-css'
        href='/moi_content/themes/totalbusiness/stylesheet/style-responsive7263.css?ver=5.4.4' type='text/css'
        media='all' />


        @include('layouts.style-custom7a30')

    <link rel='stylesheet' id='tablepress-default-css'
        href='/moi_content/plugins/tablepress/css/default.min2f3e.css?ver=1.12' type='text/css' media='all' />
    <link rel='stylesheet' id='wpgmp-frontend_css-css'
        href='/moi_content/plugins/wp-google-map-plugin/assets/css/frontend7263.css?ver=5.4.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='ms-main-css'
        href='/moi_content/plugins/masterslider/public/assets/css/masterslider.main6b10.css?ver=3.2.14'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ms-custom-css' href='/moi_content/uploads/masterslider/custom2e47.css?ver=12.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='SP_WPCP-google-web-fonts-sp_wpcp_shortcode_options-css'
        href='http://fonts.googleapis.com/css?family=Open+Sans%3A600%7COpen+Sans%3A600%7COpen+Sans%3A400n%7COpen+Sans%3A600%7COpen+Sans%3A400%7COpen+Sans%3A600%7COpen+Sans%3A400%7COpen+Sans%3A600%7COpen+Sans%3A400%7COpen+Sans%3A400%7COpen+Sans%3A700%7COpen+Sans%3A600'
        type='text/css' media='all' />

    <!-----replace this jquery period ---->

    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>


    <script type='text/javascript' src='/moi_includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>


    <script type='text/javascript'
        src='/moi_content/plugins/revslider/public/assets/js/revolution.tools.minf049.js?ver=6.0'></script>
    <script type='text/javascript' src='/moi_content/plugins/revslider/public/assets/js/rs6.minfe13.js?ver=6.1.8'></script>

    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/moi_includes/wlwmanifest.xml" />
    <meta name="generator" content="itwtech" />
    <link rel='shortlink' href='/' />


    <meta name="generator" content="MasterSlider 3.2.14 - Responsive Touch Image Slider" />



    <!-- load the script for older ie version -->
    <!--[if lt IE 9]>-->

    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator"
        content="Powered by itwtech.com.ng" />
    <link rel="icon" href="/slider/{{ $logo->picture }}" sizes="32x32" />
    <link rel="icon" href="/slider/{{ $logo->picture }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="/slider/{{ $logo->picture }}" />
    <meta name="msapplication-TileImage" content="" />

    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.innerWidth : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.innerHeight);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.innerWidth ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);

                    newh = (e.type === "carousel" && e.justify === "true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e
                    .thumbh);
                }

                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement(
                    "style"));
                document.getElementById(e.c).height = newh;
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
        };
    </script>




    <style>
        @font-face {

            font-family: allfonttext;
            src: url({{ asset('fonts/' . $font->name) }} )
        }








        @-webkit-keyframes _2fda2_2KtCM {
            0% {
                background-position: -29.25rem 0
            }

            to {
                background-position: 29.25rem 0
            }
        }




        .lazy {

            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: _2fda2_2KtCM;
            animation-name: _2fda2_2KtCM;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            background: #f6f7f8;
            background-repeat: repeat;
            background-image: none;
            background-size: auto;
            background-image: -webkit-gradient(linear, left top, right top, from(#f6f7f8), color-stop(20%, #edeef1), color-stop(40%, #f6f7f8), to(#f6f7f8));
            background-image: -webkit-linear-gradient(left, #f6f7f8, #edeef1 20%, #f6f7f8 40%, #f6f7f8);
            background-image: -o-linear-gradient(left, #f6f7f8 0, #edeef1 20%, #f6f7f8 40%, #f6f7f8 100%);
            background-image: linear-gradient(90deg, #f6f7f8, #edeef1 20%, #f6f7f8 40%, #f6f7f8);

        }
    </style>




    <link href="/sweet/sweetalert2.min.css" rel="stylesheet">
</head>

<script>

var  path  =  "/list_product";

</script>

<body class="home page-template-default page page-id-10 _masterslider _msp_version_3.2.14">

    <div class="body-wrapper  float-menu">

        <?php $cats = App\add_category::get(); ?>
        @include('layouts.menu')
        <!-- is search -->

        <div class="content-wrapper">
            <div style="position: relative" class="totalbusiness-content">

                @include('layouts.side_cart')


                @include('layouts/board')

                @yield('content')


            </div><!-- totalbusiness-content -->
            <div class="clear"></div>
        </div><!-- content wrapper -->


        @include('layouts.alertcon')

        <style>
            /* Styles for WhatsApp button */
        
            </style>

            @if(!session('admin'))
            <a href="https://wa.me/{{ $contact->whatapp }}" target="_blank" class="whatsapp-button"> 
              <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="48" height="48">
              Chat  Us
            </a>
            @endif
            
        <footer class="footer-wrapper">

            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                       Office  Address  :

                        <p>{!!  $contact->address !!} </p>


                      
                    
                    
                    </div>
                    <div class="copyright-right">

                        Phone Number   :  



                        <p> 

                              <a  style="color:white"  href="tel:{{  $contact->support }}">   {{  $contact->support }} </a>
                              <br/>

                              <a style="color:white"  href="tel:+{{  $contact->whatapp  }}">+{{   $contact->whatapp  }}</a>
                         </p>
                        <a style="color: #fff" href="/about_us" target="_blank">About Us</a>
                        <a style="color: #fff" href="/policy" target="_blank">Privacy Policy</a>

                    </div>
                    <div class="clear"></div>

                    <div align="center">  Copyright {{  date('Y') }} <strong> {{ config('app.name') }}</strong>, All Right Reserved.</div>
                </div>
            </div>
        </footer>
    </div> <!-- body-wrapper -->
    <!--googleoff: all-->
    <div id="cookie-law-info-bar" data-nosnippet="true"><span>
            <div class="cli-bar-container cli-style-v2">
                <div class="cli-bar-message">We use cookies on our website to give you the most relevant experience by
                    remembering your preferences and repeat visits. By clicking “Accept”, you consent to the use of ALL
                    the cookies.</div>
                <div class="cli-bar-btn_container"><a role='button' tabindex='0' class="cli_settings_button"
                        style="margin:0px 10px 0px 5px;">Cookie settings</a><a role='button' tabindex='0'
                        data-cli_action="accept" id="cookie_action_close_header"
                        class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button"
                        style="display:inline-block; ">ACCEPT</a></div>
            </div>
        </span></div>
    <div id="cookie-law-info-again" style="display:none;" data-nosnippet="true"><span
            id="cookie_hdr_showagain">Privacy & Cookies Policy</span></div>
    <div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
        aria-labelledby="cliSettingsPopup" aria-hidden="true">
        <div class="cli-modal-dialog" role="document">
            <div class="cli-modal-content cli-bar-popup">
                <button type="button" class="cli-modal-close" id="cliModalClose">
                    <svg class="" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
                        </path>
                        <path d="M0 0h24v24h-24z" fill="none"></path>
                    </svg>
                    <span class="wt-cli-sr-only">Close</span>
                </button>
                <div class="cli-modal-body">
                    <div class="cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-privacy-overview">
                                    <h4>Privacy Overview</h4>
                                    <div class="cli-privacy-content">
                                        <div class="cli-privacy-content-text">This website uses cookies to improve your
                                            experience while you navigate through the website. Out of these cookies, the
                                            cookies that are categorized as necessary are stored on your browser as they
                                            are essential for the working of basic functionalities of the website. We
                                            also use third-party cookies that help us analyze and understand how you use
                                            this website. These cookies will be stored in your browser only with your
                                            consent. You also have the option to opt-out of these cookies. But opting
                                            out of some of these cookies may have an effect on your browsing experience.
                                        </div>
                                    </div>
                                    <a class="cli-privacy-readmore" data-readmore-text="Show more"
                                        data-readless-text="Show less"></a>
                                </div>
                            </div>
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">

                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="necessary" data-toggle="cli-toggle-tab">
                                            Necessary </a>
                                        <div class="wt-cli-necessary-checkbox">

                                            <input type="checkbox" class="cli-user-preference-checkbox"
                                                id="wt-cli-checkbox-necessary" data-id="checkbox-necessary"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="wt-cli-checkbox-necessary">Necessary</label>
                                        </div>
                                        <span class="cli-necessary-caption">Always Enabled</span>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                                            <p>Necessary cookies are absolutely essential for the website to function
                                                properly. This category only includes cookies that ensures basic
                                                functionalities and security features of the website. These cookies do
                                                not store any personal information.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
    <!--googleon: all-->
    <script type="text/javascript">
        jQuery(window).load(function() {
            var $ = jQuery;

            $(".bro-btn").removeAttr("data-rel");

            var width = $(window).width();

            var hash = window.location.hash;
            if (hash != '') {
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 420
                }, 2000);
            }

            // order buttons NEW
            $('.totalbusiness-color-wrapper:not(#menu-icons) #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item')
                .each(function() {
                    var link = $(this).find(".wpcp-slide-image a").attr("href");
                    $(this).find(".wpcp-slide-image a").contents().unwrap();
                    $(this).parent().contents().wrap('<a href="' + link + '" target="_blank"></a>');
                });

            // order buttons NEW
            $('#menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item').each(function() {
                var link = $(this).find(".wpcp-slide-image a").attr("href");
                $(this).find(".wpcp-slide-image a").contents().unwrap();
                $(this).parent().contents().wrap('<a href="' + link + '" target="_self"></a>');
            });


            // float menu
            $('.body-wrapper.float-menu').each(function() {
                var sub_area = $('#totalbusiness-header-substitute');
                var main_area = sub_area.siblings('.totalbusiness-header-inner');
                var header_wrapper = sub_area.closest('.totalbusiness-header-wrapper');


                var social_area_substitute = $('.top-navigation-wrapper-substitute');
                var social_area = $('.top-navigation-wrapper');


                if (main_area.length > 0) {
                    $(window).scroll(function() {
                        if (main_area.hasClass('totalbusiness-fixed-header') && ($(this)
                            .scrollTop() <= header_wrapper.offset().top + header_wrapper.height() +
                                30 || $(this).width() < 959)) {
                            var clone = main_area.clone().appendTo('body');
                            clone.slideUp(100, function() {
                                $(this).remove();
                            });

                            var cloneSocial = social_area.clone().appendTo('body');
                            cloneSocial.slideUp(100, function() {
                                $(this).remove();
                            });

                            main_area.removeClass('totalbusiness-fixed-header').insertAfter(sub_area
                                .height(0));
                            social_area.removeClass('totalbusiness-fixed-social').insertAfter(
                                social_area_substitute.height(0));

                        } else if (!main_area.hasClass('totalbusiness-fixed-header') && $(this)
                            .width() > 959 && $(this).scrollTop() > header_wrapper.offset().top +
                            header_wrapper.height() + 30) {

                            sub_area.height(main_area.height());
                            $('body').append(main_area.addClass('totalbusiness-fixed-header').css(
                                'display', 'none'));
                            main_area.slideDown(200);

                            social_area_substitute.height(social_area.height());
                            $('body').append(social_area.addClass('totalbusiness-fixed-social').css(
                                'display', 'none'));
                            social_area.slideDown(200);
                        }
                    });
                }
            });


            // menu items
            $(".sub-menu .menu-item a").on('click', function(e) {
                //e.preventDefault();
                var link = $(this).attr('href');
                //alert(link);
                //window.location.href = ""+link;
            });


            // menu items
            $("#menu-icons a").on('click', function(e) {
                var width = $(window).width();
                //e.preventDefault();
                var link = $(this).attr('href');
                var parts = link.split("#");
                var hash = parts[1];
                var position = $(document).scrollTop();

                if (hash != '') {
                    if (width > 767) {
                        if (position <= 360) {
                            $('html, body').animate({
                                scrollTop: $('#' + hash).offset().top - 420
                            }, 2000);
                        } else {
                            $('html, body').animate({
                                scrollTop: $('#' + hash).offset().top - 260
                            }, 2000);
                        }
                    } else {
                        $('html, body').animate({
                            scrollTop: $('#' + hash).offset().top - 220
                        }, 2000);
                    }
                }
            });


            // Menu Icons Nav
            $(window).scroll(function(e) {
                var width = $(window).width();

                var menuNav = $('#menu-icons');
                var isPositionFixed = (menuNav.css('position') == 'fixed');

                var menuNavHome = $('#home-menu-icons');
                var isPositionFixedHome = (menuNavHome.css('position') == 'fixed');

                if (width > 767) {
                    if ($(this).scrollTop() > 360 && !isPositionFixed) {
                        menuNav.addClass('stick');
                    }
                    if ($(this).scrollTop() < 360 && isPositionFixed) {
                        menuNav.removeClass('stick');
                    }

                    /* if ($(this).scrollTop() > 550 && !isPositionFixedHome ) {  menuNavHome .addClass('stick'); }
    			      if ($(this).scrollTop() < 550 && isPositionFixedHome ) { menuNavHome .removeClass('stick'); }  */
                } else {
                    if ($(this).scrollTop() > 90 && !isPositionFixed) {
                        menuNav.addClass('stick');
                    }
                    if ($(this).scrollTop() < 90 && isPositionFixed) {
                        menuNav.removeClass('stick');
                    }

                    /*if ($(this).scrollTop() > 90 && !isPositionFixedHome ) {  menuNavHome .addClass('stick'); }
                    if ($(this).scrollTop() < 90 && isPositionFixedHome ) { menuNavHome .removeClass('stick'); }*/
                }
            });


        });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:700%2C400" rel="stylesheet" property="stylesheet"
        media="all" type="text/css">

    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err +=
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err +=
                    "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                jQuery(sliderID).show().html(err);
            }
        }
    </script>
    <link rel='stylesheet' id='sp-wpcp-google-fonts6034c2de34cd7-css'
        href='http://fonts.googleapis.com/css?family=Open%20Sans%3A600%3A%7COpen%20Sans%3A600%3A%7COpen%20Sans%3Anormal%3A'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sp-wpcp-google-fonts6034c2de35e9f-css'
        href='http://fonts.googleapis.com/css?family=Open%20Sans%3A600%3A%7COpen%20Sans%3A800%3A%7COpen%20Sans%3Anormal%3A'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sp-wpcp-google-fonts6034c2de36c2f-css'
        href='http://fonts.googleapis.com/css?family=Open%20Sans%3A600%3A%7COpen%20Sans%3A800%3A%7COpen%20Sans%3Anormal%3A'
        type='text/css' media='all' />

    <script type='text/javascript' src='/moi_content/plugins/contact-form-7/includes/js/scripts9dff.js?ver=5.3.2'></script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&amp;ver=5.4.4'></script>

    <script type='text/javascript' src='/moi_content/plugins/locations/assets/js/locations3aa8.js?ver=1.9'></script>
    <script type='text/javascript' src='/moi_content/themes/totalbusiness/plugins/superfish/js/superfish5152.js?ver=1.0'>
    </script>
    <script type='text/javascript' src='/moi_includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
    <script type='text/javascript' src='/moi_content/themes/totalbusiness/plugins/dl-menu/modernizr.custom5152.js?ver=1.0'>
    </script>
    <script type='text/javascript' src='/moi_content/themes/totalbusiness/plugins/dl-menu/jquery.dlmenu5152.js?ver=1.0'>
    </script>
    <script type='text/javascript' src='/moi_content/themes/totalbusiness/plugins/jquery.easing5152.js?ver=1.0'></script>
    <script type='text/javascript'
        src='/moi_content/themes/totalbusiness/plugins/fancybox/jquery.fancybox.pack5152.js?ver=1.0'></script>
    <script type='text/javascript'
        src='/moi_content/themes/totalbusiness/plugins/fancybox/helpers/jquery.fancybox-media5152.js?ver=1.0'></script>
    <script type='text/javascript'
        src='/moi_content/themes/totalbusiness/plugins/fancybox/helpers/jquery.fancybox-thumbs5152.js?ver=1.0'></script>
    <script type='text/javascript'
        src='/moi_content/themes/totalbusiness/plugins/flexslider/jquery.flexslider5152.js?ver=1.0'></script>
    <script type='text/javascript' src='/moi_content/themes/totalbusiness/javascript/gdlr-script5152.js?ver=1.0'></script>
    <script type='text/javascript' src='/moi_content/plugins/page-links-to/dist/new-tab46df.js?ver=3.3.5'></script>

    <script type='text/javascript' src='/moi_content/plugins/wp-google-map-plugin/assets/js/maps531b.js?ver=2.3.4'></script>
    <script type='text/javascript' src='/moi_includes/js/wp-embed.min7263.js?ver=5.4.4'></script>
    <script type='text/javascript' src='/moi_content/plugins/wp-carousel-pro/public/js/preloader.minc6bd.js?ver=3.1.5'>
    </script>
    <script type='text/javascript' src='/moi_content/plugins/wp-carousel-pro/public/js/slick.minc6bd.js?ver=3.1.5'></script>
    <script type='text/javascript'
        src='/moi_content/plugins/wp-carousel-pro/public/js/wp-carousel-pro-public.minc6bd.js?ver=3.1.5'></script>




    <script type="text/javascript" src="{{ asset('js/jqueryzoom.js') }}"></script>


    <script type="text/javascript" src="{{ asset('js/lazy/jquery.lazy.min.js') }}"></script>




    <script>
        $(function() {

            var count = 0;
            $('.lazy').lazy({


                effect: "fadeIn",
                effectTime: 2000,
                threshold: 0,




                // called after an element was successfully handled
                afterLoad: function(element) {


                    var imageSrc = element.removeClass('lazy');




                },

                // called whenever an element could not be handled
                onError: function(element) {


                    // var imageSrc = element.html('<span> Network Error </span>');

                }


            });



        });
    </script>


    @include('script')


    <script src="{{ asset('js/bootstrap.js') }}  "></script>


    <script src="/sweet/sweetalert2.all.min.js"></script>

    <script>
        function confirmAlert(message, link) {
            Swal.fire({
                title: message,
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link; // Load the link if confirmed
                }
            });
            return false; // Prevent the default action of the hyperlink
        }


        function sweetmessage(type, message) {


            Swal.fire({
                //position: "top-end",
                icon: type,
                title: message,
                text: " ",
                showConfirmButton: false,
                timer: 3000
            });


        }



         
<?php  if(session('message')){ 

$message  =  session('message');  
  
  
  ?>
    //showToastr('success', '<?php   echo   $message ; ?>');

    Swal.fire({
    //position: "top-end",
  icon: "success",
  title: "<?php   echo   $message ; ?>",
  text : " ",
  showConfirmButton: false,
  timer: 3000
});

<?php  }  ?>





<?php  if(session('error')  ){ 
  

 

    $message  =  session('error') ;  
      
      
 



?>
  

  Swal.fire({
//position: "top-end",
icon: "error",
title: "<?php   echo  $message  ; ?>",

showConfirmButton: false,
timer: 3000
});

<?php  }  ?>






@if ($errors->any())

<?php  
  $message  =  "" ;  


?>

@foreach ($errors->all() as $error)
             

                <?php  
  $message  .=  $error ;  


                ?>

            @endforeach



Swal.fire({
//position: "top-end",
icon: "error",
title: "<?php   echo  $message  ; ?>",

showConfirmButton: false,
timer: 3000
});


@endif



    </script>


   
</body>

</html>
