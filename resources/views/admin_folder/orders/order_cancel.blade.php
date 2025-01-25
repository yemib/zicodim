@extends('admin_dashboar')

@section('contenth')

<h3> Canceled Order List  </h3>

<?php    
use App\order_list;
use App\add_product;
use App\client;



if( session('admin')){  
	
$category = order_list::where('state' , 'cancel')->orderBy('id', 'asc')->paginate(20);

}else{
	
	if(session('vendor')){
		
		$category = order_list::where('state' , 'cancel')->where('vendor_email', session('vendor'))->orderBy('id', 'asc')->paginate(20);
	}
	
}



$value_progress  = 'Progress' ;

$link_change = "progress";
$cancel_code = "cancel";


?>

<div>

@include('admin_folder.orders.table')


{{  $category->links() }}	

</div>


@endsection