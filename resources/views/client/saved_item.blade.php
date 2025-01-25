
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
		
	@include('cart.saved_item')
	
		
			</div>

@endsection



