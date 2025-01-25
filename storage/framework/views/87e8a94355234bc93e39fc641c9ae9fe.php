

<?php $__env->startSection('title'); ?>
Order Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin_folder.upload_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.sp-wpcp-1041 .wpcp-all-captions .wpcp-image-caption a,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.sp-wpcp-1041 .wpcp-all-captions .wpcp-image-caption {
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

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.sp-wpcp-1041 .wpcp-all-captions .wpcp-image-description {
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

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-prev,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-next,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-prev:hover,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-next:hover {
        background: none;
        border: none;
        font-size: 30px;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-prev,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-next {
        color: #ff0000;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-prev:hover,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-next:hover {
        color: ;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041.nav-vertical-center {
        padding: 0 30px;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-prev {
        text-align: left;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-next {
        text-align: right;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.sp-wpcp-1041.nav-vertical-center-inner-hover.slick-dotted .slick-next,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041.nav-vertical-center-inner-hover.slick-dotted .slick-prev,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041.nav-vertical-center-inner.slick-dotted .slick-next,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041.nav-vertical-center-inner.slick-dotted .slick-prev,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041.nav-vertical-center.slick-dotted .slick-next,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041.nav-vertical-center.slick-dotted .slick-prev {
        margin-top: -35px;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 ul.slick-dots {
        margin: 18px 0px 0px 0px;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 ul.slick-dots li button {
        background-color: #cccccc;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 ul.slick-dots li.slick-active button {
        background-color: #52b3d9;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041:not(.wpcp-product-carousel) .wpcp-single-item {
        border: 0px solid #ffffff;
        padding: 0px;
    }

    .wpcp-carousel-section.wpcp-standard {
        display: none;
    }

    .wpcp-carousel-section.wpcp-standard.slick-initialized {
        display: block;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-list {
        margin-right: -20px;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.wpcp-carousel-section.sp-wpcp-1041 .slick-slide {
        margin-right: 20px;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.sp-wpcp-1041 .wpcp-slide-image img,
    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.sp-wpcp-1041.wpcp-product-carousel .wpcp-slide-image a {
        border-radius: 0px;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-1041.sp-wpcp-1041:not(.wpcp-product-carousel):not(.wpcp-content-carousel) .wpcp-single-item {
        background: #d2d9de;
    }

    #wpcpro-wrapper .wpcp-carousel-section.wpcp-image-carousel .wpcp-single-item .wpcp-all-captions {
        min-height: 80px;
        padding: 15px 10px 10px;
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
        color: #fff212;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-798.sp-wpcp-798 .wpcp-all-captions .wpcp-image-description {
        color: #fff;
    }

    #wpcpro-wrapper #sp-wp-carousel-pro-id-798.wpcp-carousel-section.wpcp-image-carousel .wpcp-single-item .wpcp-all-captions {
        background-color: #ff0000 !important;
    }

    .wpcp-image-caption a span {
        float: right;
    }

    #wpcpro-wrapper .wpcp-carousel-section .wpcp-single-item,
    #wpcpro-wrapper .wpcp-carousel-section.slick-initialized .slick-slide {
        vertical-align: top;
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
        bottom: 95px;
        color: #ffffff;
        background: #ff0000;
        border: 3px solid #ff0000;
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
        color: #ff0000;
        background: #fff212;
    }

    /* -- Red Version with Black Button -- */
    #red-carousel #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:after {
        background: #201e1e;
        border: 3px solid #201e1e;
    }

    #red-carousel #wpcpro-wrapper .slick-track .slick-slide .wpcp-single-item .wpcp-all-captions:hover:after {
        background: #ffffff;
        border: 3px solid #201e1e;
        color: #ff0000;
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

        border-radius: 50%;
        width: 50%;
        margin: 0 auto;
    }

    /* #menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-slide-image img { background:#FFE61C; } */
    #menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-all-captions h2 a {
        color: #ff0000;
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

        border-radius: 50%;
        width: 50%;
        margin: 0 auto;
    }

    /*#home-menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-slide-image img { background:#ffcc29; } */
    #home-menu-icons #wpcpro-wrapper .slick-track .slick-slide div a:hover .wpcp-single-item .wpcp-all-captions h2 a {
        color: #FFF212;
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




    #wpcp-preloader-946,
    #wpcp-preloader-808,
    #wpcp-preloader-798,
    #wpcp-preloader-771 {
        display: none;
    }

</style>



<?php
    use App\add_product;
    use App\saved_item;
    use App\contact_detail;
    
    $contact = contact_detail::first();
    ?>


<script>
    $(document).ready(function() {
        $('#ex1').zoom();
        $('#ex2').zoom({
            on: 'grab'
        });
        $('#ex3').zoom({
            on: 'click'
        });
        $('#ex4').zoom({
            on: 'toggle'
        });
    });

</script>
<?php 
$product  =  $order->product;
?>

<div class="container" style="margin-top: 150px">

    <div id="space_up" class="row">


        <div style="overflow: auto; background: rgba(255,255,255,1.00)  ; padding: 10px">

            <div data-aos="zoom-out-up" id="ex3" style="" class="col-sm-12">
                <h5>
                    <p>
                        order id : <?php echo e($order->order_id); ?>

                        <br />
                        product name : <a target="_blank" href="/product/<?php echo e($product->id); ?>"> <?php echo e($order->product->name); ?> </a>
                        <br />
                        client name : <?php echo e($order->client->name); ?>

                        <br />
                        client phone : <?php echo e($order->client->phone); ?>

                    </p>


                </h5>

                <!---  begining okay---->





                <div class="">
                    <div class="totalbusiness-content">

                        <?php if($order->picture != NULL): ?>
                        <!-- Sidebar With Content Section-->
                        <div class="with-sidebar-wrapper">


                            <section id="content-section-4">
                                <p>Client Style </p>
                                <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 30px; padding-bottom: 30px; ">
                                    <div class="container">
                                        <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">

                                            <div id="wpcpro-wrapper" class="wpcp-carousel-wrapper wpcp-wrapper-1041">
                                                <div id="sp-wp-carousel-pro-id-1041" class="wpcp-carousel-section sp-wpcp-1041 wpcp-image-carousel nav-vertical-center wpcp-standard" data-slick='{ "accessibility":true, "centerMode":true, "centerPadding": "0px", "swipeToSlide":false, "adaptiveHeight":true, "arrows":true, "autoplay":false, "autoplaySpeed":5000, "dots":false, "infinite":true, "speed":600, "pauseOnHover":true, "slidesToScroll":1, "slidesToShow":1, "responsive":[ { "breakpoint":1200, "settings": { "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px"} }, { "breakpoint":980, "settings":{ "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px" } }, { "breakpoint":736, "settings": { "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px" } }, {"breakpoint":480, "settings":{ "slidesToShow":1, "slidesToScroll":1, "arrows": true, "dots": false, "centerPadding": "0px" } } ], "rows":1, "rtl":false, "variableWidth":false, "fade":false, "lazyLoad": "false", "swipe": true, "draggable": true }' data-arrowtype="angle" dir="ltr" dir="ltr">

                                                    <?php  $all_products  =    json_decode($order->picture , true);   ?>


                                                    <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                                    <div class="wpcp-single-item">
                                                        <a href="<?php echo e($image['new_name']); ?>">
                                                            <div class="wpcp-slide-image">



                                                                <div style="background-image: url('<?php echo e($image['new_name']); ?>')" class="image_container_product">



                                                                </div>


                                                            </div>
                                                        </a>
                                                    </div>



                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








                                                </div>
                                            </div>
                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                                <div class="clear"></div>
                            </section>
                        </div>
                        <!-- Below Sidebar Section-->

                        <?php endif; ?>
                    </div>
                    <!-- totalbusiness-content -->
                    <div class="clear"></div>
                </div>



                <!---  end --->








            </div>





            <div style="" class="col-sm-12">




                <div class="">



                    <div class="">






                    </div>




                    <div class="col-sm-12" style="width: 100%">


                        <!----   create the form here  --->

                        <h5> Client Description</h5> 

                        <div>  <?php echo e($order->description); ?></div>

                        <br/>

                        <label>Quantity   :  <?php echo e($order->quantity); ?></label>




                   
                





                        <hr />








                    </div>


                </div>
            </div>


        </div>



        <br />


        <div style="width: 100%  ; background: rgba(255,255,255,1.00); padding: 20px">


        </div>

        <br />







        <!--   echo some product here just a few --->





    </div>





</div>




<!----    zoom container --->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/client/order_details.blade.php ENDPATH**/ ?>