<?php $__env->startSection('title'); ?>
Home
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
   
    
    ?>




<!-- Sidebar With Content Section-->
<div class="with-sidebar-wrapper"  style="margin-top: 100px">

  


			<section id="content-section-3">

				<div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" id="love" style="background-color: #ffffff; padding-top: 30px; padding-bottom: 30px; ">


					<div class="container">
						<?php echo $__env->make('search_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<div class="clear"></div>


						<?php  
				
				$get_all_cat  =  App\add_category::inRandomOrder()->get() ;  
				
				foreach($get_all_cat as $cat_get){  
				
					//run to 5 products on each category 
					
						$random_product1 =add_product::where('status','public')->where('category' , $cat_get->id )->inRandomOrder()->take(4)->get() ;
							
					if(count($random_product1)  >=  2) { 		
						?>



						<div class="totalbusiness-item totalbusiness-content-item">



							<h2 style="text-align: center;"><span class="spread-title-red"><?php echo e($cat_get->name); ?></span> &nbsp; &nbsp; &nbsp; <?php if(count($random_product1) >= 4): ?> <a style="font-size: 20px" href="/category/<?php echo e($cat_get->id); ?>" class="">view all</a> <?php endif; ?></h2>



						</div>




						<section class="card">

							<?php $__currentLoopData = $random_product1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo $__env->make('layouts.container_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


						</section>



						<div class="clear"></div>



						<?php } } ?>





						<div class="clear"> </div>






					</div>
				</div>

				<div class="clear"></div>
			</section>











</div>
<!-- Below Sidebar Section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/shop.blade.php ENDPATH**/ ?>