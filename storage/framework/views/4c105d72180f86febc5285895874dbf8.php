


<?php $__env->startSection('title'); ?>Shop all product  <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!--- top  -->


<div class="with-sidebar-wrapper"  style="margin-top: 150px">
		
		<section id="content-section-2" >
		
		<?php echo $__env->make('search_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<div   class="top_category  text_color"  id="product_up">  

 <h3>  Shop  Now </h3>
 
 
   </div>



<div   class="container"  style="width: 100%">

	<div   class="row"   style="">
	
	
	  
	  
	
	  
	  <div  class="col-sm-12"   style=" padding: auto">
	  
	<?php echo $__env->make('layouts.category_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  	
  		<div   style=""  class="col-sm-12">	<?php echo e($select->links()); ?>  </div>
	  
	   
	  </div>
	  
	  
	  
	  
	  
	
	</div>	
	
	
	
	
	
</div>


	</section>
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/shop.blade.php ENDPATH**/ ?>