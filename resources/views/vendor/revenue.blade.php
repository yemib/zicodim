@extends('admin_dashboar')

@section('contenth')
<?php 
use App\order_list;
use App\vendorper;

$pers = vendorper::first();

$order_list = order_list::where('vendor_email' , session('vendor'))->where('state' , 'complete')->get();

$price  =  0  ;

foreach($order_list  as $order_list){
	
	$price  = $order_list->price  + $price ;
	
}
?>


<h2> Total Revenue :   &#35;   {{  number_format($price) }} </h2>






@endsection