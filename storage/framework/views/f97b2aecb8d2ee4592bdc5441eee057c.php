<?php  $cat  = App\add_category::find($category); ?>

<?php $__env->startSection('title'); ?><?php echo e($cat->name); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>

<?php echo e($cat->name); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('url'); ?>
category/<?php echo e($cat->id); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--- top  -->


<div class="with-sidebar-wrapper"  style="margin-top: 150px">
		
		<section id="content-section-2" >
		
		<?php echo $__env->make('search_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php if(isset($cat->id)): ?>
<div   class="top_category  text_color"  id="product_up">  

 <h3>  <?php echo e($cat->name); ?> </h3>
 
 
   </div>


<?php endif; ?>

<div   class="container"  style="width: 100%">

	<div   class="row"   style="">
	
	
	  
	  

	  
	  
	  <div  class="col-sm-12"   style=" padding: 0px">
	  
	<?php echo $__env->make('layouts.category_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  	
  		<div   style=""  class="col-sm-12">	<?php echo e($select->links()); ?>  </div>
	  
	   
	  </div>
	  
	  
	  
	  
	  
	
	</div>	
	
	
	
	
	
</div>


	</section>
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/category.blade.php ENDPATH**/ ?>