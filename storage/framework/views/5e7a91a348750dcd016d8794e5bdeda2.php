


<?php $__env->startSection('content'); ?>
<div class="with-sidebar-wrapper">
		
		<section id="content-section-2" >


<div  class="container"   id="space_up"  style="margin-top: 200px; ">  
<div  class="row"  >

<div  class="col-sm-6  "  style="margin: auto !important ">
	
	
	
		<?php if(session('error')): ?>
	
	<label  class="text-danger  bg-danger"> <?php echo e(session('error')); ?>   </label>
	<?php endif; ?>
	
	
	<h2> Admin Log In </h2>
	<form   method="post"  action=""  >
	
	
	<?php echo e(csrf_field()); ?>

	

	
		<p>
		<label> Username  </label>
		<input   type=""   name="username"   class="form-control"/></p>
		
		
		<p>
		<label> password  </label>
		<input   type="password"   name="password"   class="form-control"/>  </p>
		
		
		<br/>
		
		
		<input   type="submit"  value="LogIn"   class="btn cartbutton"/>
		
		
		<br/>
		
	
		
	</form>
	
</div>
	
	
</div>


</div>


	</section>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views//admin_folder/admin_signin.blade.php ENDPATH**/ ?>