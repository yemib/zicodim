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
	@if(isset($checking_cart))	
<?php   $number_item = 0 ;  ?>		
@foreach($checking_cart as $checking_carts) 
 <?php   
	$number_item =   $number_item  + $checking_carts->quantity;
$products  = add_product::find($checking_carts->product_id) ;
		
		?>
		@endforeach
		@endif
																		
		<div   style="background: white;border-radius: 5px  ; padding: 4px">
			<h4>  Order Summary   &nbsp;  &nbsp;   <span  id="item2"> {{   $number_item  }} </span> items     </h4>
		
			
				
					
							
			<hr/>
			
			@if(isset($checking_cart))	
			<?php  
			$subtotal1 = 0 ;
			$delivery1  =$delivery_charge ;
			$subtotal_new = 0;
			?>		
			
@foreach($checking_cart as $checking_carts) 
 <?php   
$products  = add_product::find($checking_carts->product_id) ;
			
			
			
			
			$y = $products->price;
			//echo($y);
			$x =  $products->price  * $checking_carts->quantity;
			//echo( $x);
			$subtotal1 = $subtotal1  + $x ; 
		 
			
		?>
		
		
		
		
		@endforeach
		
		@endif
	{{-- <strong  class="price_size">SubTotal : <span class=""  >  &#x20A6; </span> <span class=""  
		id="subtotal"> {{ number_format(  $subtotal1  ) }}   </span>  
	
	 --}}
	 
	 <input type="hidden"  id="subtotalt"  value="{{ $subtotal1  }}"    />
	 
	
</strong>
				{{-- <hr/>
			
			
			<strong  style="display: none" class="price_size">Delivery Charges  :  <span > &#x20A6;  </span> 
				 <span   id="delivery_price_here"> {{ number_format(  $delivery1) }}  </span> 
				
				</strong>
			 --}}
			
			
			{{-- <hr/>
			
			<strong  class="price_size">Total   : &#x20A6;<span  id="total_value2">  
				{{  number_format(  $subtotal1    +  $delivery1 ) }}   </span>  </strong>  
			 --}}
			<hr/>