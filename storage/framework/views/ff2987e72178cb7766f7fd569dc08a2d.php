<h2>
 <?php if(count($errors) >0): ?>  
	
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
<div  class="alert alert-danger">	<?php echo e($error); ?> </div>
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
<?php endif; ?>	
	</h2><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/layouts/error_code.blade.php ENDPATH**/ ?>