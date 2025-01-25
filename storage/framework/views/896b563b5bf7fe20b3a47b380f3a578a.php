

<?php $__env->startSection('contenth'); ?>


<a  href="/list_user">    <button  class="btn btn-primary"> Admin List </button>  </a>

<h2>Add Admin </h2>


<div  align="center">
<div  align="left"   style="padding: 20px  ; width: 80% ">
		
<?php echo $__env->make('layouts.error_code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<form   method="post"   action="<?php if(isset($edit_list)): ?>/update_user/<?php echo e($edit_list->id); ?>    <?php else: ?> /add_user <?php endif; ?>"    enctype="multipart/form-data" >
		
		 <?php echo e(csrf_field()); ?>

		 <label>Name</label>
		<input  required  value="<?php if(isset($edit_list)): ?><?php echo e($edit_list->name); ?><?php endif; ?>"  name="name"   class="form-control"  />
		
		
		<label>Username</label>
		<input   type=""  required  value="<?php if(isset($edit_list)): ?><?php echo e($edit_list->username); ?><?php endif; ?>"   name="username"   class="form-control"  />
		
		
									
		<label> Password</label>
		<input    type=""   value="<?php if(isset($edit_list)): ?><?php echo e($edit_list->password); ?><?php endif; ?>"  name="password"   class="form-control"  />			
		
			<?php if(isset($edit_list)): ?>
		
		<input  class="btn btn-primary"  type="Submit"  value="Update"  />
		
		<?php else: ?>
		<input  class="btn btn-primary"  type="Submit"  value="Save"  />
		
		<?php endif; ?>

		
	</form>
	</div>
	
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/admin_folder/add_user.blade.php ENDPATH**/ ?>