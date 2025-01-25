

<?php $__env->startSection('contenth'); ?>
<?php echo $__env->make('admin_folder.upload_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php 
use App\add_category;
$parent = add_category::all();

?>



	
<div  align="center">
<div  align="left"   style="padding: 20px  ; width: 80% ">


<p>  <a href="/list_product"   class="btn btn-primary"> List Product  </a>   </p>

<h2>  Edit Product  </h2>


	
	<form   id="Form1"  method="post"   action="/edit_product/<?php echo e($edit_list->id); ?>"    enctype="multipart/form-data" >
		
		 <?php echo e(csrf_field()); ?>

		 <label>Name</label>
		<input  required  value="<?php if(isset($edit_list)): ?> <?php echo e($edit_list->name); ?> <?php endif; ?>"  name="name"   class="form-control"  />
		
		
		<label>Quantity</label>
		<input   required  value="<?php if(isset($edit_list)): ?> <?php echo e($edit_list->quantity); ?> <?php endif; ?>"   name="quantity"   class="form-control"  />
		
			
				
						<label> Coupon Price</label>
		<input   required  value="<?php if(isset($edit_list)): ?> <?php echo e($edit_list->price); ?> <?php endif; ?>"  name="price"   class="form-control"  />			
		
			
				
						<label> Price</label>
		<input   required  value="<?php if(isset($edit_list)): ?> <?php echo e($edit_list->coupon_price); ?> <?php endif; ?>"  name="coupon_price"   class="form-control"  />			
		
			
				
	  <label>Description</label>
			
		<textarea    <?php if(session('admin')): ?>id="article-ckeditor"  <?php endif; ?> required name="description"  class="form-control"  ><?php if(isset($edit_list)): ?> <?php echo e($edit_list->description); ?> <?php endif; ?>  </textarea>	
		
		<br/>
		
	<label>Warranty</label>
			
		<textarea  <?php if(session('admin')): ?>id="article-ckeditor"  <?php endif; ?>  name="warranty"  class="form-control"  ><?php if(isset($edit_list)): ?> <?php echo e($edit_list->warranty); ?> <?php endif; ?>  </textarea>	
		
		<br/>
		
	<label>Return Policy</label>
			
		<textarea  <?php if(session('admin')): ?>id="article-ckeditor"  <?php endif; ?>  name="policy"  class="form-control"  ><?php if(isset($edit_list)): ?> <?php echo e($edit_list->policy); ?> <?php endif; ?>  </textarea>	
		
		<br/>

		
		<label>Shipping Instruction</label>
			
		<textarea  <?php if(session('admin')): ?>id="article-ckeditor"  <?php endif; ?>  name="shipping"  class="form-control"  ><?php if(isset($edit_list)): ?> <?php echo e($edit_list->shipping); ?> <?php endif; ?></textarea>	



		<?php
                  
		$label  =  "Upload  Image";
		$name  = "pictures";

		global  $data  ;

		$data  =   $edit_list->picture; 

		imagecontainer($label,  $name,  $multiple =  true, 1 , $required = " ");
		?>

		
   <div  class="col-sm-12"> 		
		
  
		
		<label>  <strong>Category</strong>  </label>
		
		<select    name="category"   class="form-control"  >
		
		<?php  $get_cat  =  App\add_category::find($edit_list->category); ?>
			
		<?php if(isset( $get_cat->id)): ?>   <option  value="<?php echo e($get_cat->id); ?>">  <?php echo e($get_cat->name); ?>  </option> <?php endif; ?>
				
				<?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<option  value="<?php echo e($parent->id); ?> ">  	<?php echo e($parent->name); ?>  </option>
					
					
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			
			
		</select>
			
		
		
		<br/>
		
		
		<?php if(session('admin')): ?>
		
 <label  class="btn btn-sm btn-primary" for="checkpublic">  		
	<input id="checkpublic"  <?php   if($edit_list->status=='public') { echo('checked ');  } ?>  
	   type="checkbox"  name="status"    value="public"/>  &nbsp; <span style="display: inline-block; margin-top:12px ">  Make Public  </span> </label>
		
		<?php endif; ?>
		
		
		
		
		<br/>
		
		
		<input  <?php   if($edit_list->pick_up_available=='yes') { echo('checked ');  } ?>     type="hidden"  name="pickup"    value="yes"/> <!-- Pick Up Available  -->
		
		
		
		<br/>
		
		 
	


	
	


			


		  
	
		<div id="uploadingform1">
	<input    class="btn btn-primary"  type="Submit"  value="Save"  />

		</div>
   </div>
	</form>
	</div>
	
</div>


   
<?php echo $__env->make('admin_folder.upload_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/edit_product.blade.php ENDPATH**/ ?>