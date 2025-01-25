@extends('admin_dashboar')

@section('contenth')
<?php    
use App\order_list;
use App\add_product;
use App\client;



if( session('admin')){  
	
$category = order_list::where('state' , 'progress')->orderBy('id', 'desc')->paginate(20);

}else{
	
	if(session('vendor')){
		
		$category = order_list::where('state' , 'progress')->where('vendor_email', session('vendor'))->orderBy('id', 'desc')->paginate(20);
	}
	
}



$value_progress  = 'Complete' ;

$link_change = "complete";


?>

<div>

<h2> Progress Order List  </h2>

@include('admin_folder.orders.table')


{{  $category->links() }}	

</div>


@endsection