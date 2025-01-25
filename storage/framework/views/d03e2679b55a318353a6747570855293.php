

<?php $__env->startSection('title'); ?>About Us <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<?php   use App\page_content;

$home_content  =page_content::where('page' , 'about')->first(); 
?>




<div  class="container"   id="space_up"   style="margin-top: 150px" >



<div  class="row">

<div   class="col-sm-12   animated fadeInDownBig"   style="overflow: auto">

<h1 align="center"  class="text_color"><?php echo e(config('app.name')); ?></h1>

<?php echo $home_content->content; ?>


	
	
</div>
	
	
</div>
	
	
	
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/about.blade.php ENDPATH**/ ?>