<?php $__env->startSection('content'); ?>



<?php   use App\page_content;

$home_content  =page_content::where('page' , 'contact')->first(); 
?>




<div  class="container"   id="space_up"  >



<div  class="row">

<div   class="col-sm-12">
<?php echo $home_content->content; ?>


	


		
				
</div>
	
	
</div>
	
	
	
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/contact.blade.php ENDPATH**/ ?>