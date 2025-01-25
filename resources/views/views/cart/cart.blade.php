@extends('layouts.index')

@section('content')


<?php 
// selection here will base on sign in and   
use App\cart_list;
use App\add_product;

$checking_cart=0;
?>


@if(session('client'))
<?php   
$checking_cart  = cart_list::where('email' ,session('client')['id'] )->get() ;
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

	
@if(count($checking_cart)  == 0)

	<script>  window.location='/'  </script>
	
	@endif
	
	
	@if(count($checking_cart)  > 0 )

	<div    class="col-sm-9"  >  
	

	
			
	@include('cart.cart_list')	

 
</div>
	
	
	
	
		<div  style="padding: 3px"  class="col-sm-3">    
									
		@include('cart.summary')
			
		<a  href="/checkout/complete-order"> 	<button  class="btn btn-success  cartbutton"><strong>Continue to Checkout</strong> </button> </a>
			
			
			
			
		</div>							   

	@endif								      								      
		</div>

  										
  												
  			@include('cart.saved_item')													
 

	</div>
	
	
</div>




@endsection