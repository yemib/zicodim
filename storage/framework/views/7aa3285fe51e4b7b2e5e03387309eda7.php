<h2>
 <?php if(count($errors) >0): ?>  
	
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
<div  class="alert alert-danger">	<?php echo e($error); ?> </div>
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
<?php endif; ?>	
	</h2><?php /**PATH G:\websites\Zicodim\resources\views/layouts/error_code.blade.php ENDPATH**/ ?>