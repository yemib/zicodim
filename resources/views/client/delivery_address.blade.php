
@extends('client')


<?php   

use App\client;
use App\order_address;
use App\now_address;
use App\pickup;

$address  = now_address::where('email',  session('client')['id'])->first();


if(isset($address->id) ){ 
$pickup =  pickup::find($address->pickup_id); }

?>

@section('client_extension')

	<div  class="acct_info">
		<h3> Last  Picked  Delivery  Address </h3>
		
		
		
			<div  class="col-sm-6"   >
	<div  style="padding: 3px  ; border-radius: 5px ;  border: 1px solid 
			rgba(0,0,0,1.00) ; background:white">	
			
				@if(isset($pickup) )	
			
			Address :
			
		<p>	{{  $pickup->address }}</p>
		
		
		
		Delivery Price :
		
		<p> <strong>  &#x20A6;  {{ number_format(   $pickup->price ) }} </strong>  </p>
		@else 
		<h3> No  Address Picked  </h3>
	
		@endif
				
				
			
			
				</div>
				
				<?php 
				$client  =client::where('id' , session('client')['id'])->first();
				
				?>
				
					<h3> Your Home Address </h3>
			<form   method="post"  action=""   >  
			
			{{csrf_field() }}
			
				<textarea  name="home_address"
  class="form-control">{{$client->home_address}}</textarea>
				
				<br/>
				<button  class="btn-primary">  Update Change   </button>
				
			</form>
			
				
			</div>
			
		
			
	
		
			</div>

@endsection



