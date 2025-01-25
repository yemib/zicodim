

<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>


<?php $__env->startSection('description'); ?>
We offer digital monogramming on T-Shirt, Shirt, FaceCap, Towel, School Uniform, Stocking, 
Customized shirt/jacket, shoe,muffler, security uniform, gift items etc

<?php $__env->stopSection(); ?>


<?php $__env->startSection('url'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
    
    use App\slider;
    use App\add_product;
    use App\page_content;
    use App\banner1;
    use App\banner2;
    use App\icons;
    use App\add_category;
    
    $icons = icons::all();
    $home_content = page_content::where('page', 'home')->first();
    
    $slidder = slider::orderby('id', 'desc')->paginate(20);
    $banner1 = banner1::first();
    $banner2 = banner2::first();
    $random_product1 =add_product::where('status','public')->orderby('id' , 'desc' )->inRandomOrder()->take(4)->get() ;
    $lastest_product = add_product::where('status', 'public')->Orderby('id', 'asc')->take(10)->get();
    $old_product = add_product::where('status', 'public')->Orderby('id', 'desc')->take(10)->get();
    
    ?>

<!-- Above Sidebar Section-->
<div class="above-sidebar-wrapper">

    <section id="content-section-1">
        <div class="totalbusiness-full-size-wrapper gdlr-show-all no-skin" style="padding-bottom: 0px;  background-color: #ffffff; ">
            <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">
                <!-- START Home REVOLUTION SLIDER 6.1.8 -->

                <p class="rs-p-wp-fix"></p>


                <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">



                    <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.8">


                        <rs-slides>
                            <?php   foreach($slidder as $slidder){   ?>

                            <div class="">
                                <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">



                                    <img src="/slider/<?php echo e($slidder->picture); ?>" alt="
						banner" title="Banner" width="1140" height="600" data-no-retina>






                                </rs-slide>




                            </div>


                            <?php   } ?>
                        </rs-slides>
                        <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                    </rs-module>





                    <script type="text/javascript">
                        setREVStartSize({
                            c: 'rev_slider_1_1'
                            , rl: [1240, 1024, 778, 480]
                            , el: [650, 768, 960, 380]
                            , gw: [1560, 1024, 778, 600]
                            , gh: [650, 768, 960, 380]
                            , type: 'standard'
                            , justify: ''
                            , layout: 'fullwidth'
                            , mh: "0"
                        });
                        var revapi1
                            , tpj;
                        jQuery(function() {
                            tpj = jQuery;
                            if (tpj("#rev_slider_1_1").revolution == undefined) {
                                revslider_showDoubleJqueryError("#rev_slider_1_1");
                            } else {
                                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                    jsFileLocation: "/moi_content/plugins/revslider/public/assets/js/"
                                    , sliderLayout: "fullwidth"
                                    , visibilityLevels: "1240,1024,778,480"
                                    , gridwidth: "1560,1024,778,600"
                                    , gridheight: "650,768,960,380"
                                    , spinner: "spinner0"
                                    , editorheight: "650,768,960,380"
                                    , responsiveLevels: "1240,1024,778,480"
                                    , disableProgressBar: "off"
                                    , navigation: {
                                        onHoverStop: false
                                    }
                                    , fallbacks: {
                                        allowHTML5AutoPlayOnAndroid: true
                                    }
                                , });
                            }

                        });

                    </script>
                </rs-module-wrap>
                <!-- END REVOLUTION SLIDER -->

            </div>
            <div class="clear"></div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </section>
</div>



<!-- Sidebar With Content Section-->
<div class="with-sidebar-wrapper">

    <section id="content-section-2">


        <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" id="home-menu-icons" style="background-color: <?php echo e(config('app.color')); ?>; padding-top: 10px; padding-bottom: 10px; ">
            <div class="container">
                <div align="center" style="color: white">
                    <h5 style="color: white"> We offer digital monogramming on T-Shirt, Shirt, FaceCap, Towel,
                        School Uniform, Stocking, Customized shirt/jacket, shoe,muffler, security uniform, gift items etc </h5>
                </div>
                <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">
                    <h3 style="background-color: <?php echo e(config('app.color2')); ?>;" class="order-now-title"><a href="/shop" style="color:white">SHOP NOW</a>
                    </h3>



                    <br />
                    <?php echo $__env->make('layouts/style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div id="wpcpro-wrapper" class="wpcp-carousel-wrapper wpcp-wrapper-946">
                        <div id="wpcp-preloader-946" class="wpcp-carousel-preloader">

                            <img src="/moi_content/plugins/wp-carousel-pro/public/css/bx_loader.gif" />
                        </div>

                        <div id="sp-wp-carousel-pro-id-946" class="wpcp-carousel-section sp-wpcp-946 wpcp-image-carousel wpcp-preloader wpcp-standard" data-slick='{ "accessibility":true, "centerMode":false, "centerPadding": "0px", "swipeToSlide":true, "adaptiveHeight":false, "arrows":false, "autoplay":true, "autoplaySpeed":3000, "dots":false, "infinite":true, "speed":600, "pauseOnHover":true, "slidesToScroll":1, "slidesToShow":6, "responsive":[ { "breakpoint":1200, "settings": { "slidesToShow":6, "slidesToScroll":1, "centerPadding": "0px"} }, { "breakpoint":980, "settings":{ "slidesToShow":6, "slidesToScroll":1, "centerPadding": "0px" } }, { "breakpoint":736, "settings": { "slidesToShow":4, "slidesToScroll":1, "centerPadding": "0px" } }, {"breakpoint":480, "settings":{ "slidesToShow":4, "slidesToScroll":2, "arrows": false, "dots": false, "centerPadding": "0px" } } ], "rows":1, "rtl":false, "variableWidth":false, "fade":false, "lazyLoad": "false", "swipe": true, "draggable": true }' data-arrowtype="angle" dir="ltr" dir="ltr">


                            <?php $all_category = App\add_category::get(); ?>



                            <?php //  foreach($all_category  as $all_category ){   ?>

                            

                    <?php //} ?>



                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
</div>
</div>
<div class="clear"></div>

</section>



<section id="content-section-3">

    <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" id="love" style="background-color: #ffffff; padding-top: 30px; padding-bottom: 30px; ">


        <div class="container">
            <?php echo $__env->make('search_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="clear"></div>


            <?php  
	
	$get_all_cat  =  App\add_category::inRandomOrder()->take(5)->get() ;  
	
	foreach($get_all_cat as $cat_get){  
	
		//run to 5 products on each category 
		
	 $random_product1 =add_product::where('status','public')->where('category' , $cat_get->id )->inRandomOrder()->take(4)->get() ;
		
if(count($random_product1)  >=  2) { 		
	?>



<div class="totalbusiness-item totalbusiness-content-item" >



<h2 style="text-align: center;"><span class="spread-title-red"><?php echo e($cat_get->name); ?></span> &nbsp;  &nbsp; &nbsp; <?php if(count($random_product1) >= 4): ?> <a  style="font-size: 20px"  href="/category/<?php echo e($cat_get->id); ?>" class="">view all</a>  <?php endif; ?></h2>



</div>




            <section class="card">

                <?php $__currentLoopData = $random_product1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('layouts.container_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </section>



            <div class="clear"></div>



            <?php } } ?>





            <div class="clear"> </div>

            <div class="totalbusiness-item totalbusiness-content-item">



                <h2 style="text-align: center;"><span class="spread-title-red"> </span> &nbsp;

                    <a style="font-size: 20px" href="/shop" class="btn btn-sm btn-primary">view all</a>

                </h2>



            </div>





        </div>
    </div>

    <div class="clear"></div>
</section>







<section id="content-section-7">
    <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" style="background-color: <?php echo e(config('app.color')); ?>; padding-top: 30px; padding-bottom: 30px; ">
        <div class="container">
            <div class="six columns">
                <div class="totalbusiness-image-frame-item totalbusiness-item" id="ppl-img" style="margin-bottom: 0px;">
                    <div class="totalbusiness-frame totalbusiness-link-type-none frame-type-none">
                        <div class="totalbusiness-image-link-shortcode">
                            <img
                                src="/header/397771404.png"
                                alt=""
                                width="721"
                                height="412"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <div class="six columns">
                <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">
                    <h2 class="home-title">
                        <span style="color: <?php echo e(config('app.color2')); ?>">Our objectives are
                        </span>
                    </h2>
                    <p class="behind-text"  style="color: white">
                        
                        -Providing customers with technical advice and information as well as product samples of the latest market trend <br/>
                        -Supplying the best quality products at competitive prices.   <br/>
                        -Building a long term cordial and effective business relationship with customers 
                        
                        
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>




<section id="content-section-6">
    <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 30px; padding-bottom: 30px; ">
        <div class="container">
            <div class="six columns">
                <div class="totalbusiness-image-frame-item totalbusiness-item" id="ppl-img" style="margin-bottom: 0px;">
                    <div class="totalbusiness-frame totalbusiness-link-type-none frame-type-none">
                        <div class="totalbusiness-image-link-shortcode">
                            <img
                                src="/header/397771404.png"
                                alt=""
                                width="721"
                                height="412"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <div class="six columns">
                <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">
                    <h2 class="home-title">
                        <span style="color: <?php echo e(config('app.color')); ?>">WHY CHOOSE US?
                        </span>
                    </h2>
                    <p class="behind-text"  style="color: black">
                        
                        1. We offer best customers/clients advice service.
                        <br/>
                        2. Ability to handle large request.
                        <br/>
                        3. We work with your budget and take into consideration the peculiarity of your order. <br/>
                        4. We offer good quality yet affordable products.  <br/>
                        5. We can work with you anywhere you are in Nigeria. <br/>
                        6. We deliver the best time possible. <br/>
                        7. We have built a loyal clientele off-line who can vouch for the quality of our service.
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>







<section id="content-section-4">


    <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" style="background-color: <?php echo e(config('app.color2')); ?>; padding-top: 30px; padding-bottom: 30px; ">
        <div class="container">
            <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">
                <h2 class="home-title" style="text-align: center;"><?php echo e(config('app.name')); ?></h2>
            </div>
            <div class="clear"></div>
            <div class="totalbusiness-item totalbusiness-content-item">

                <style>
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.sp-wpcp-957 .wpcp-all-captions .wpcp-image-caption a,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.sp-wpcp-957 .wpcp-all-captions .wpcp-image-caption {
                        color: #b93538;
                        font-size: 15px;
                        line-height: 23px;
                        letter-spacing: 0px;
                        text-transform: capitalize;
                        text-align: left;
                        font-family: Open Sans;
                        font-weight: 800;
                        font-style: normal;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.sp-wpcp-957 .wpcp-all-captions .wpcp-image-description {
                        color: #727376;
                        font-size: 14px;
                        line-height: 21px;
                        letter-spacing: 0px;
                        text-transform: none;
                        text-align: left;
                        font-family: Open Sans;
                        font-weight: normal;
                        font-style: normal;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-prev,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-next,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-prev:hover,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-next:hover {
                        background: none;
                        border: none;
                        font-size: 30px;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-prev,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-next {
                        color: {
                                {
                                config('app.color')
                            }
                        }

                        ;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-prev:hover,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-next:hover {
                        color: ;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957.nav-vertical-center {
                        padding: 0 30px;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-prev {
                        text-align: left;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-next {
                        text-align: right;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.sp-wpcp-957.nav-vertical-center-inner-hover.slick-dotted .slick-next,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957.nav-vertical-center-inner-hover.slick-dotted .slick-prev,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957.nav-vertical-center-inner.slick-dotted .slick-next,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957.nav-vertical-center-inner.slick-dotted .slick-prev,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957.nav-vertical-center.slick-dotted .slick-next,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957.nav-vertical-center.slick-dotted .slick-prev {
                        margin-top: -35px;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 ul.slick-dots {
                        margin: 18px 0px 0px 0px;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 ul.slick-dots li button {
                        background-color: #cccccc;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 ul.slick-dots li.slick-active button {
                        background-color: #52b3d9;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957:not(.wpcp-product-carousel) .wpcp-single-item {
                        border: 0px solid #ffffff;
                        padding: 0px;
                    }

                    .wpcp-carousel-section.wpcp-standard {
                        display: none;
                    }

                    .wpcp-carousel-section.wpcp-standard.slick-initialized {
                        display: block;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-list {
                        margin-right: -20px;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.wpcp-carousel-section.sp-wpcp-957 .slick-slide {
                        margin-right: 20px;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.sp-wpcp-957 .wpcp-slide-image img,
                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.sp-wpcp-957.wpcp-product-carousel .wpcp-slide-image a {
                        border-radius: 0px;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-957.sp-wpcp-957:not(.wpcp-product-carousel):not(.wpcp-content-carousel) .wpcp-single-item {
                        background: #d2d9de;
                    }

                    #wpcpro-wrapper .wpcp-carousel-section.wpcp-image-carousel .wpcp-single-item .wpcp-all-captions {
                        min-height: 50px;
                        padding: 10px;
                    }

                    #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions h2 a {
                        font-family: 'gothammedium' !important;
                    }

                    #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions p {
                        font-family: 'gothambookregular' !important;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-771.wpcp-carousel-section.wpcp-image-carousel .wpcp-single-item .wpcp-all-captions {
                        background-color: #d2d9de;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-798.sp-wpcp-798 .wpcp-all-captions .wpcp-image-caption a {
                        color: {
                                {
                                config('app.color2')
                            }
                        }

                        ;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-798.sp-wpcp-798 .wpcp-all-captions .wpcp-image-description {
                        color: #fff;
                    }

                    #wpcpro-wrapper #sp-wp-carousel-pro-id-798.wpcp-carousel-section.wpcp-image-carousel .wpcp-single-item .wpcp-all-captions {
                        background-color: {
                                {
                                config('app.color')
                            }
                        }

                         !important;
                    }


                    @media screen and (max-width: 767px) {

                        #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions h2,
                        #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions h2 a {
                            font-size: 10px !important;
                            line-height: 10px !important;
                        }

                        #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions p {
                            font-size: 10px !important;
                            line-height: 10px !important;
                        }

                        #wpcpro-wrapper .wpcp-carousel-section.wpcp-image-carousel .wpcp-single-item .wpcp-all-captions {
                            min-height: 45px !important;
                            padding: 10px 10px 7.5px !important;
                        }
                    }



                    /*-------ORDER BUTTONS-------*/
                    #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item {
                        position: relative;
                    }

                    #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:after {
                        content: "order";
                        position: absolute;
                        right: 10px;
                        bottom: 60px;
                        color: #ffffff;

                        background: {
                                {
                                config('app.color')
                            }
                        }

                        ;

                        border: 3px solid {
                                {
                                config('app.color')
                            }
                        }

                        ;
                        padding: 0px 20px 2px 20px;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        font-size: 15px;
                        line-height: 17px;
                        -webkit-transition: all 0.3s linear;
                        -moz-transition: all 0.3s linear;
                        -ms-transition: all 0.3s linear;
                        -o-transition: all 0.3s linear;
                        transition: all 0.3s linear;
                    }

                    #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:hover:after {
                        color: {
                                {
                                config('app.color')
                            }
                        }

                        ;

                        background: {
                                {
                                config('app.color2')
                            }
                        }

                        ;
                    }

                    /* -- Red Version with Black Button -- */
                    #red-carousel #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:after {
                        background: #201e1e;
                        border: 3px solid #201e1e;
                    }

                    #red-carousel #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:hover:after {
                        background: #ffffff;
                        border: 3px solid #201e1e;

                        color: {
                                {
                                config('app.color')
                            }
                        }

                        ;
                        font-weight: bold;
                    }


                    @media screen and (max-width: 767px) {
                        #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:after {
                            bottom: 55px;
                            right: 5px;
                            font-size: 10px;
                            line-height: 12px;
                            padding: 0px 5px;
                        }
                    }


                    /*-------MENU ICONS-------*/
                    #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item {
                        width: 100% !important;
                    }

                    #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions {
                        padding: 5px 0px 0px 0px;
                        background: none;
                        background-color: none !important;
                        min-height: 10px !important;
                    }

                    #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions h2 a {
                        font-family: 'gothambookregular' !important;
                    }

                    #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:after {
                        content: none;
                    }

                    #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-slide-image {
                        background: {
                                {
                                config('app.color')
                            }
                        }

                        ;
                        border-radius: 50%;
                        width: 50%;
                        margin: 0 auto;
                    }

                    #menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-slide-image img {
                        background: {
                                {
                                config('app.color2')
                            }
                        }

                        ;
                    }

                    #menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-all-captions h2 a {
                        color: {
                                {
                                config('app.color')
                            }
                        }

                        ;
                    }

                    @media only screen and (max-width: 554px) {
                        #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item {
                            width: 100% !important;
                        }

                        #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-slide-image {
                            width: 100% !important;
                        }

                        #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions {
                            padding: 10px 0px 0px 0px !important;
                            min-height: 30px;
                        }

                        #menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions * {
                            font-family: 'gothambookregular' !important;
                        }
                    }

                    /*-------HOME PAGE MENU ICONS-------*/
                    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item {
                        width: 100% !important;
                    }

                    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions {
                        padding: 5px 0px 0px 0px;
                        background: none;
                        background-color: none !important;
                        min-height: 10px !important;
                    }

                    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions h2 a {
                        font-family: 'gothambookregular' !important;
                    }

                    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:after {
                        content: none;
                    }

                    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-slide-image {
                        background: #ffffff;
                        border-radius: 50%;
                        width: 50%;
                        margin: 0 auto;
                    }

                    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-slide-image img {
                        background: {
                                {
                                config('app.color2')
                            }
                        }

                        ;
                    }

                    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-all-captions h2 a {
                        color: {
                                {
                                config('app.color2')
                            }
                        }

                        ;
                    }

                    @media only screen and (max-width: 554px) {
                        #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item {
                            width: 100% !important;
                        }

                        #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-slide-image {
                            width: 100% !important;
                        }

                        #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions {
                            padding: 10px 0px 0px 0px !important;
                            min-height: 30px;
                        }

                        #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions * {
                            font-family: 'gothambookregular' !important;
                        }
                    }

                </style>
                <div id="wpcpro-wrapper" class="wpcp-carousel-wrapper wpcp-wrapper-957">

                    <div id="sp-wp-carousel-pro-id-957" class="wpcp-carousel-section sp-wpcp-957 wpcp-image-carousel nav-vertical-center wpcp-standard" data-slick='{ "accessibility":true, "centerMode":false, "centerPadding": "0px", "swipeToSlide":false, "adaptiveHeight":false, "arrows":true, "autoplay":true, "autoplaySpeed":4000, "dots":false, "infinite":true, "speed":600, "pauseOnHover":true, "slidesToScroll":1, "slidesToShow":1, "responsive":[ { "breakpoint":1200, "settings": { "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px"} }, { "breakpoint":980, "settings":{ "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px" } }, { "breakpoint":736, "settings": { "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px" } }, {"breakpoint":480, "settings":{ "slidesToShow":1, "slidesToScroll":1, "arrows": true, "dots": false, "centerPadding": "0px" } } ], "rows":1, "rtl":false, "variableWidth":false, "fade":false, "lazyLoad": "false", "swipe": true, "draggable": true }' data-arrowtype="angle" dir="ltr" dir="ltr">


                        <?php  $sliddert  = slider::inRandomOrder()->get();  
	
	
	foreach($sliddert as $sliddert ){
		
		
	
	
	?>



                        <div class="wpcp-single-item">

                            <div class="wpcp-slide-image">

                                <img src="/slider/<?php echo e($sliddert->picture); ?>" title="" alt="" width="1551" height="812">



                            </div>
                        </div>

                        <?php } ?>


                    </div>

                </div>
            </div>
            <div class="clear"></div>
            <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">
                <p style="text-align: center;"></p>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>





</div>
<!-- Below Sidebar Section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/home.blade.php ENDPATH**/ ?>