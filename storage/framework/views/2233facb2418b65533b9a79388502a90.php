	<?php 
// selection here will base on sign in and   
use App\cart_list;
use App\add_product;
use App\pickup;
use App\now_address;

$delivery_charge =  0 ;
if(session('client')){
	
	$address  = now_address::where('email',  session('client')['id'])->first();
	
if(isset($address->id) ) { 
	
	if($address->pickup_id != 0) { 
	$pickup  = pickup::find( $address->pickup_id);
	
	$delivery_charge  =  $pickup->price; }
	
	
	
	}
}



?>
	<?php if(isset($checking_cart)): ?>	
<?php   $number_item = 0 ;  ?>		
<?php $__currentLoopData = $checking_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checking_carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
 <?php   
	$number_item =   $number_item  + $checking_carts->quantity;
$products  = add_product::find($checking_carts->product_id) ;
		
		?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
																		
		<div   style="background: white;border-radius: 5px  ; padding: 4px">
			<h4>  Order Summary   &nbsp;  &nbsp;   <span  id="item2"> <?php echo e($number_item); ?> </span> items     </h4>
		
			
				
					
							
			<hr/>
			
			<?php if(isset($checking_cart)): ?>	
			<?php  
			$subtotal1 = 0 ;
			$delivery1  =$delivery_charge ;
			$subtotal_new = 0;
			?>		
			
<?php $__currentLoopData = $checking_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checking_carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
 <?php   
$products  = add_product::find($checking_carts->product_id) ;
			
			
			
			
			$y = $products->price;
			//echo($y);
			$x =  $products->price  * $checking_carts->quantity;
			//echo( $x);
			$subtotal1 = $subtotal1  + $x ; 
		 
			
		?>
		
		
		
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
		<?php endif; ?>
	<strong  class="price_size">SubTotal : <span class=""  >  &#x20A6; </span> <span class=""  id="subtotal"> <?php echo e(number_format(  $subtotal1  )); ?>   </span>  
	
	
	 
	 <input type="hidden"  id="subtotalt"  value="<?php echo e($subtotal1); ?>"    />
	 
	
</strong>
				<hr/>
			
			
			<strong  style="display: none" class="price_size">Delivery Charges  :  <span > &#x20A6;  </span> 
				 <span   id="delivery_price_here"> <?php echo e(number_format(  $delivery1)); ?>  </span> 
				
				</strong>
			
			
			
			<hr/>
			
			<strong  class="price_size">Total   : &#x20A6;<span  id="total_value2">  
				<?php echo e(number_format(  $subtotal1    +  $delivery1 )); ?>   </span>  </strong>  
			
			<hr/><?php /**PATH G:\websites\Zicodim\resources\views/cart/summary.blade.php ENDPATH**/ ?>