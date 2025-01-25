
<?php $__env->startSection('contenth'); ?>	


<?php 

use App\logo; 

$logo = logo::first();

?>


<div  class="">



	
	<h2>  Change  Logo  </h2>
	
<form    id="upload_slider"   method="post"   action="/logo"   enctype="multipart/form-data">
	
	<?php echo e(csrf_field()); ?>

		
<input  style="display: none"  onChange="upoad_file(event,'upload_slider','progress_id' , 'message_id', 'picture' , '/logo' , 'addind_content')"     id="picture"   type="file"   name="picture"   />
		
<label  class="btn btn-primary"    for="picture">CHANGE  LOGO   </label>
		
		
</form>

	
</div>

<div  id="progress_id">   </div>

<div  id="message_id">   </div>



<div   class=""   style="" id="addind_content"> <img   height="100"   width="100"   src="<?php echo e(asset('slider/'.$logo->picture )); ?>" />   </div>





<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/logo.blade.php ENDPATH**/ ?>