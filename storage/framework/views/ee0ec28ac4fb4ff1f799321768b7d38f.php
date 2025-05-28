<?php 
// selection here will base on sign in and   
use App\cart_list;
use App\add_product;
use App\saved_item;

?>

<?php if(isset($checking_cart)): ?>	
<?php   
$number_item = 0 ; 
global  $data  ;
?>	
			
				<div data-aos="fade-up"   style="font-size: 17px" class="label-info">
				
				
		
			
		</div>
 <br/>
	
	<div data-aos="fade-up">  	

		<?php   
			$count  = 1  ;
			?>
				
<?php $__currentLoopData = $checking_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checking_carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
 <?php   
	$number_item =   $number_item  + $checking_carts->quantity;
$products  = add_product::find($checking_carts->product_id) ;
		
		?>

		
		
		
		<div   class="container_normal"    style="overflow: auto">
			<?php   $image  =  json_decode($products->picture  ,  true ); ?>
		
		<div  class="col-sm-6"> 
			<p>
				<strong  style=""> <?php echo e($products->name); ?> </strong>  
				 
				 </p>
			<div   class="cartimage"   style="background-image: url('<?php echo e($image[0]['new_name']); ?>')"  >  </div> 
		
		
		</div>
		
		

		
		
		<div  class="col-sm-4">  
		
		 
 <a  href="/cartremove/<?php echo e($checking_carts->id); ?>">    <button   class="btn btn-danger" onClick="">  Remove Item  </button>  </a>     <?php if(session('client')): ?>
<?php    
//check if is in   saved_item	
			$checked_saved  = saved_item::where('product_id',  $products->id)->first();
			
			if(isset($checked_saved->id)  )  {  
			
			?>   
    
 <a  href="">  <button   class="btn btn-success"  id="saved<?php echo e($products->id); ?>" onClick="saved_send('/save_item/<?php echo e($products->id); ?>'  , 'saved<?php echo e($products->id); ?>')" >  Save Item   </button>  </a>
 <?php
}
?>


<?php endif; ?>  
	
	 <p   style="margin-top: 40px" align="right">
 			 
           <a   style="color: green"  class="" href="/product/<?php echo e($products->id); ?> ">    Details    </a> </p>
	  
	    </div>


		
		
	
	



</div>

      <div  class="col-sm-12">
		
		<form  id="form<?php echo e($checking_carts->id); ?>" onsubmit="submit_cart_form('form<?php echo e($checking_carts->id); ?>')"  action="/save_cart/<?php echo e($checking_carts->id); ?>"  method="post">

		<label> Describe Your style </label>
		<textarea   name="description" class="form-control"><?php echo e($checking_carts->description); ?></textarea>

	
	   

		<?php

		$label = 'Upload Your Style Image';
		$name = 'pictures';
	

		$data  =   $checking_carts->pictures; 
		
		imagecontainer($label, $name, $multiple = true, $count  ,  $required = " " );


		$count++;
		?>

		<br />


		<div  class="col-sm-12">
			<span   id="uploadform<?php echo e($checking_carts->id); ?>">
			 <button      class="btn btn-sm btn-info"    > Save Details </button>
			</span>
			
			</div>

		
		</form>

	  </div>
<div class="col-sm-12" ><hr/></div>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
 <?php else: ?>
 <h1> No Cart  </h1>
 <?php endif; ?>
 <?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/cart/cart_list.blade.php ENDPATH**/ ?>