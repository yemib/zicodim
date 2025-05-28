<?php $__env->startSection('title'); ?>
    <?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('description'); ?>
<?php echo e($product->name); ?>   |   <?php echo e($product->description); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('url'); ?>
product/<?php echo e($product->id); ?>

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


    <div class="container" style="margin-top: 150px">

        <div id="space_up" class="row">


            <div style="overflow: auto; background: rgba(255,255,255,1.00)  ; padding: 10px">

                <div data-aos="zoom-out-up" id="ex3" style="" class="col-sm-12">
                  <h1>
                    <?php echo e($product->name); ?>




                  


                </h1>

                    <!---  begining okay---->





                    <div class="">
                        <div class="totalbusiness-content">
                            
                            <a  class="btn btn-sm  btn-success" href="/cart/addItem/<?php echo e($product->id); ?>/next">  <strong
                                >Add To Cart</strong> </a>
                         
                            <!-- Sidebar With Content Section-->
                            <div class="with-sidebar-wrapper">
                              
                           
                                <section id="content-section-4">
                                    <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin"
                                        style="background-color: #ffffff; padding-top: 30px; padding-bottom: 30px; ">
                                        <div class="container">
                                            <div class="totalbusiness-item totalbusiness-content-item"
                                                style="margin-bottom: 0px;">
                                            
                                                <div id="wpcpro-wrapper" class="wpcp-carousel-wrapper wpcp-wrapper-1041">
                                                    <div id="sp-wp-carousel-pro-id-1041"
                                                        class="wpcp-carousel-section sp-wpcp-1041 wpcp-image-carousel nav-vertical-center wpcp-standard"
                                                        data-slick='{ "accessibility":true, "centerMode":true, "centerPadding": "0px", "swipeToSlide":false, "adaptiveHeight":true, "arrows":true, "autoplay":false, "autoplaySpeed":5000, "dots":false, "infinite":true, "speed":600, "pauseOnHover":true, "slidesToScroll":1, "slidesToShow":1, "responsive":[ { "breakpoint":1200, "settings": { "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px"} }, { "breakpoint":980, "settings":{ "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px" } }, { "breakpoint":736, "settings": { "slidesToShow":1, "slidesToScroll":1, "centerPadding": "0px" } }, {"breakpoint":480, "settings":{ "slidesToShow":1, "slidesToScroll":1, "arrows": true, "dots": false, "centerPadding": "0px" } } ], "rows":1, "rtl":false, "variableWidth":false, "fade":false, "lazyLoad": "false", "swipe": true, "draggable": true }'
                                                        data-arrowtype="angle" dir="ltr" dir="ltr">

                                                        <?php  $all_products  =    json_decode($product->picture , true);   ?>


                                                    <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      
                                                 
                                                        <div class="wpcp-single-item">
                                                          <a  href="<?php echo e($image['new_name']); ?>">
                                                            <div class="wpcp-slide-image">

                                                             
                                                              
                                                          <div  style="background-image: url('<?php echo e($image['new_name']); ?>')"  
                                                              class="image_container_product">



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

                            <div> <?php echo $product->description; ?> </div>

                            <!----   create the form here  --->

                            <form   action="<?php echo e(route('place_order')); ?>"  id="Form1"   method="POST" action="">
                                <h5>Make Enquiry</h5>

                                <input  value="<?php echo e($product->id); ?>"    name="product_id"  type="hidden" />


                                <?php if(!session('client')): ?>

                                
                                <label> Name </label>

                                <input name="name" type="text" class="form-control" />


                                <label> Email </label>

                                <input name="email" type="email" class="form-control" />



                                <label> Phone Number </label>

                                <input name="phone" type="" class="form-control" />


                                <?php endif; ?>


                                <label>Quantity</label>

                                <input name="quantity" type="number"  value="1" class="form-control" />

                                <label> Describe Your style </label>
                                <textarea name="description" class="form-control"></textarea>

                            
                               

                                <?php
                
                                $label = 'Upload Your Style Image';
                                $name = 'pictures';
                                
                                imagecontainer($label, $name, $multiple = true, 1  ,  $required = " " );
                                ?>

                                <br />

                                <div  class="col-sm-12">
                              

                                    <div  style="display: inline-block"   id="uploadingform1"> 
                                <input class="btn btn-sm btn-success" type="submit" value="Send Order" />

                                    </div>



                                </div>



                            </form>



                            <div  class="col-sm-12">

                            <hr />


                            Share With Friend

                           

                            <div>

                                <div class="fb-share-button" data-href="https://<?php echo $_SERVER['HTTP_HOST']; ?>"
                                    data-layout="button" data-size="large"><a target="_blank"
                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F<?php echo $_SERVER['HTTP_HOST']; ?>%2F&amp;src=sdkpreparse"
                                        class="fb-xfbml-parse-ignore">Share</a></div>

                            </div>

                        </div>  



                            <hr />




                            <?php if($product->pick_up_available == 'yes'): ?>
                                <br />
                                <p class="desktopmenu" style=""> <strong> </strong> </p>
                            <?php endif; ?>







                        </div>


                    </div>
                </div>


            </div>



            <br />


            <div style="width: 100%  ; background: rgba(255,255,255,1.00); padding: 20px">


            </div>

            <br />





            <div style="width: 100%  ; background: rgba(255,255,255,1.00); padding: 20px">

                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php if($product->description != ' ' && !is_null($product->description)): ?>
                            <li role="presentation" class="active"><a href="#home1" data-toggle="tab" role="tab"
                                    aria-controls="tab1">Description</a></li>
                        <?php endif; ?>
                        <?php if($product->warranty != ' ' && !is_null($product->warranty)): ?>
                            <li role="presentation"><a href="#paneTwo1" data-toggle="tab" role="tab"
                                    aria-controls="tab2">Warranty</a></li>
                        <?php endif; ?>



                        <?php if($product->policy != ' ' && !is_null($product->policy)): ?>
                            <li role="presentation"><a href="#paneTwo2" data-toggle="tab" role="tab"
                                    aria-controls="tab2">Return Policy</a></li>
                        <?php endif; ?>

                        <?php if($product->shipping != ' ' && $product->shipping != 'NULL'): ?>
                            <li role="presentation"><a href="#paneTwo3" data-toggle="tab" role="tab"
                                    aria-controls="tab2">Shipping</a></li>
                        <?php endif; ?>

                    </ul>
                    <div id="tabContent1" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="home1">
                            <div class="price_size">
                                <?php echo $product->description; ?>


                                

                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="paneTwo1">
                            <div class="price_size">
                                <?php echo $product->warranty; ?>

                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="paneTwo2">
                            <div class="price_size">
                                <?php echo $product->policy; ?>

                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="paneTwo3">
                            <div class="price_size">
                                <?php echo $product->shipping; ?>

                            </div>
                        </div>





                    </div>
                </div>

            </div>
            <br />




            <h2 class="text_color"> Related Items </h2>


            <!--   echo some product here just a few --->


            <div class="container_of_each" style="">

                <?php $random_product1 = add_product::where('status', 'public')
                    ->where('category', $product->category)
                    ->inRandomOrder()
                    ->take(4)
                    ->get(); ?>

                <section class="card">

                    <?php $__currentLoopData = $random_product1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('layouts.container_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </section>



            </div>


        </div>





    </div>




    <!----    zoom container --->
  
    <script>
        path  =  "/my_order";
    </script>

    <?php echo $__env->make('admin_folder.upload_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/product.blade.php ENDPATH**/ ?>