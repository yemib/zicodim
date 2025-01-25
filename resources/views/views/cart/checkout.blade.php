	@if(!session('client'))
<script>   

window.location='/signup';

</script>
@endif
@extends('layouts.index')

@section('content')

    
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
@if(session('client'))
<?php   
$checking_cart  = cart_list::where('email' ,session('client')['id'])->get() ;
?>
@else
@if(isset($_COOKIE['session_id']))  <!---   this is to check cookie -->
<?php   
$checking_cart  = cart_list::where('session_id' ,$_COOKIE['session_id'] )->get() ;
?>
@endif
@endif



<div   class="container  mycontainer"   style="margin-top: 150px">


<div   style=""  id="space_up"   class="row"   >

	<div    class="col-sm-9"  >  
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
		
		
	@if($pickup_available == 'yes')
	
	<div    class="container_normal" style="overflow: auto">
	
		<div  class="col-sm-6"><h3>  Delivery  / Pickup Option  </h3>    </div>
		
		
		
		<div  class="col-sm-12"  style="width: 100% ; padding: 10px  ;background-color: #fff5e6; color: #b87300"> <strong>Select  a Pickup </strong></div>
		
		<div   id="define_addressess"  style=""   class="col-sm-12">
		
	<?php    
			
	$select_pickup  = pickup::paginate(20); 
			
    //seect the address of the client here 
	$pick_client_address  =client::where('email' , session('client')['id'])->first();
			
			
			
			
			?>
	
	
	
	
		
		
	<div>
	
	
	
	
	<div  style="display: none"  class="col-sm-6">
			  
			  
			<div  class="pickup"   id="">
			<label  for="yourself">
			<input    onClick="update_address('/update_delivery_address/{{ $pick_client_address->id }}/yourself')" type="radio" id="yourself"  name="pickup"  value="{{ $pick_client_address->id }}" />
			<strong>Select Your Location</strong>
			
			<p> {{ $pick_client_address->home_address  }}</p>
			
			<a  href="/account_profile"   class="btn btn-primary">  Edit Address </a>
				
			</label>
					</div>
			</div>
	
	
	
	<?php  $select_pickup  = pickup::paginate(20);  ?>
	
	
	
	@foreach($select_pickup  as $pickups)
	
			<div     class="col-sm-6">
			  
			  
			<div  class="pickup"   id="">
			<label  style="cursor: pointer"  for="pickup{{$pickups->id}}">
			<input    onClick="update_address('/update_delivery_address/{{ $pickups->id }}/pickup');$('#submitr').removeAttr('disabled');$('#hidde_info').hide()" type="radio" id="pickup{{$pickups->id}}"  name="pickup"  value="{{ $pickups->id }}" /><strong>Select This Pickup Location</strong>
			
			<p> 
			<strong>{{ $pickups->address  }}</strong> 
			<br/>
			₦ {{ number_format($pickups->price  , 2) }}
			   </p>
				
			</label>
					</div>
			</div>
		
				@endforeach
				
					
					
				
				<!---    make use of the person personal address here  ---->
				
				
			</div>
			
		
			
			
		</div>
		
		
		
	</div>
	
	
	
	
	
	@endif
	
	
	<br/>
	
	
		@include('cart.cart_list')	

 
</div>
	
	
	
	
	
	
		<div  style="padding: 3px"  class="col-sm-3">   
							 
@include('cart.summary')

			<!---   payment code here ---->

 		
   		@if(isset($checking_cart))	
				<?php   $price_count = 0;    $price  = 0  ;
 ?>
@foreach($checking_cart as $checking_carts) 
 <?php   
			
		$price_count++;
			
		
			
$products  = add_product::find($checking_carts->product_id) ;
		
		
		$price = ($products->price  * $checking_carts->quantity ) + $price;
			
?> 
   
     
@endforeach
   
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
			@endif
   
    @include('payapi')
		
		
	@if($pickup_available == 'yes')
	
	<!---
		<a  href="/order_pay_on_delivery"> 	<button   type="submit"   style="@if(!isset($now_address->id))  display: none  @endif "  id="disabled_button"  class="btn btn-success  cartbutton"><strong>Pay On  Delivery</strong> </button> </a>
			--->
				
			@endif	
			
			
		</div>							   
									      
		</div>
		
	
	</div>
	
	
</div>

 

@endsection