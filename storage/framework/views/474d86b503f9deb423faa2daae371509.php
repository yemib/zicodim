

<?php $__env->startSection('title'); ?>Privacy Policy <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<?php   use App\page_content;

$home_content  =page_content::where('page' , 'privacy')->first(); 
?>




<div  class="container"   id="space_up"   style="margin-top: 150px"  >



<div  class="row">

<div   class="col-sm-12"   style="overflow: auto">

<?php echo $home_content->content; ?>


	
	
</div>
	
	
</div>
	
	
	
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/policy.blade.php ENDPATH**/ ?>