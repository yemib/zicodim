
   

   

<?php $__env->startSection('content'); ?>
   
   <div class="container "   id="space_up"  style="margin-top: 150px">
   
   
   <?php echo $__env->make('search_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <div class="clear"></div>
   
    <?php if(isset($select)): ?>
       
        <h3> Total Result  :  <?php echo e(count($select)); ?> </h3>
   
<?php else: ?>
  
    <?php endif; ?> 
    
    
    <div  class="col-sm-12"> 
    
    <?php echo $__env->make('layouts.category_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
          
          
          <div  style=""  class="col-sm-12"></div>
          
    <br/>
    
    	  <?php echo $__env->make('pagination.default', ['paginator' => $select], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/search.blade.php ENDPATH**/ ?>