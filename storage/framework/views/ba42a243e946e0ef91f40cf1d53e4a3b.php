
<?php $__env->startSection('contenth'); ?>	

<div>
<?php  
use App\page_content;
$update_pages  =page_content::where('page' , $pages)->first();   ?>
	<?php if(isset($success)): ?>
	
 <p   class="alert-success">	Successfull 
 
  <hr/>
    </p>
	
	<?php endif; ?>
	
</div>


	<div   style="width: 80%"  class="">
	
	 <h3>     <?php echo e($pages); ?>   Page   Content </h3>
	 
	 <br/>
	 
		<form   method="post"   action="/pages/<?php echo e($pages); ?>"  >
		
			<?php echo e(csrf_field()); ?>

		
			
			<textarea  id="article-ckeditor" class="form-control"    name="content"  ><?php echo e($update_pages->content); ?>

			</textarea>
			
			<br/>
			<input  class="btn btn-success"   type="submit"   value="Save" />
			
		</form>
		
		
		
	</div>
	



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/admin_folder/pages.blade.php ENDPATH**/ ?>