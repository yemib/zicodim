	<?php if(!session('client')): ?>
	<script>
	    window.location = '/signup';

	</script>
	<?php endif; ?>
	

	<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('admin_folder.upload_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<?php 
// selection here will base on sign in and   
use App\cart_list;
use App\add_product;
use App\pickup;
use App\now_address;
use App\client;



$client  = client::where('email', session('client')['id'])->first();
$now_address =  now_address::where('email', session('client')['id'])->first();

?>
	<?php if(session('client')): ?>
	<?php   
$checking_cart  = cart_list::where('email' ,session('client')['id'] )->get() ;
?>
	<?php else: ?>
	<?php if(isset($_COOKIE['session_id'])): ?>
	<!---   this is to check cookie -->
	<?php   
$checking_cart  = cart_list::where('session_id' ,$_COOKIE['session_id'] )->get() ;
?>
	<?php endif; ?>
	<?php endif; ?>



	<div class="container  mycontainer" style="margin-top: 150px">


	    <div style="" id="space_up" class="row">

	        <div class="col-sm-9">
	            <!---   check if the  pick up is available in the cart list  .  --->

	            <?php  
		$cart_list_check  = cart_list::where('email' , session('client')['id'])->get();   
		$pickup_available  = ' ';
		
		foreach($cart_list_check   as $cart_list_checks){
			
			//CHECK THE PRODUCT DATABASE
			
			$product = add_product::find($cart_list_checks->product_id);
			
			
			
			if($product->pick_up_available == 'yes'){
				
				$pickup_available  = 'yes';
				
				
				
			}
			
			
		}
		
		?>


	            <?php if($pickup_available == 'yes'): ?>

	            <div class="container_normal" style="overflow: auto">
				



	             
				
	            </div>





	            <?php endif; ?>


	            <br />


	            <?php echo $__env->make('cart.cart_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	        </div>






	        <div style="padding: 3px" class="col-sm-3">

	            <?php echo $__env->make('cart.summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	            <!---   payment code here ---->


	            <?php if(isset($checking_cart)): ?>
	            <?php   $price_count = 0;    $price  = 0  ;
 ?>
	            <?php $__currentLoopData = $checking_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checking_carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	            <?php   
			
		$price_count++;
			
		
			
$products  = add_product::find($checking_carts->product_id) ;
		
		
		$price = ($products->price  * $checking_carts->quantity ) + $price;
			
?>


	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	            <?php
			$delivery_price =  0 ;
			
			if($pickup_available == 'yes'){
			
				// chweck if pickup is 
			if(isset($now_address->id) ){  
				
  			$pickup = pickup::find($now_address->pickup_id) ;
				
				if(isset($pickup->id)    ){  
			$delivery_price  = $pickup->price ;
				}
				}
			}
			
		$price  = $price  + $delivery_price	  
			

			?>
	            <?php endif; ?>

	            <?php echo $__env->make('payapi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	            <?php if($pickup_available == 'yes'): ?>

	            <!---
		<a  href="/order_pay_on_delivery"> 	<button   type="submit"   style="<?php if(!isset($now_address->id)): ?>  display: none  <?php endif; ?> "  id="disabled_button"  class="btn btn-success  cartbutton"><strong>Pay On  Delivery</strong> </button> </a>
			--->

	            <?php endif; ?>


	        </div>

	    </div>


	</div>


	</div>


	<?php echo $__env->make('admin_folder.upload_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/cart/checkout.blade.php ENDPATH**/ ?>