@extends('admin_dashboar')

@section('contenth')

<h3> Completed Order List  </h3>

<?php    
use App\order_list;
use App\add_product;
use App\client;




if( session('admin')){  
	
$category = order_list::where('state' , 'complete')->orderBy('id', 'asc')->paginate(20);

}else{
	
	if(session('vendor')){
		
		$category = order_list::where('state' , 'complete')->where('vendor_email', session('vendor'))->orderBy('id', 'asc')->paginate(20);
	}
	
}




$value_progress  = 'Progress' ;

$link_change = "progress";


?>

<div>

@include('admin_folder.orders.table')


{{  $category->links() }}	

</div>


@endsection