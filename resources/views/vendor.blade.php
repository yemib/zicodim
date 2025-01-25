@if(!session('vendor'))
<script>  window.location='/vendor_signin'  </script>
@endif
@extends('admin_dashboar')

@section('contenth')

<?php

use App\add_product;

use App\order_list;
use App\vendorper;

$pers = vendorper::first();








?>


<div>

   
   
   
   	
	<?php
		
		function list_dashboard($src , $content , $number  ){
			?>
				<div  class=" btn cartbutton  col-sm-3 "  style=" color: rgba(51,51,51,1.00); margin: 10px ; height: 100px ; overflow: auto; width: 30%">
					
				
				
				<div class="">
				
			<p>	
			
			<strong>{{$number}}</strong>
			<br/>
			
			<strong>	{{	$content }}  </strong>  </p>
					
				</div>
				
						
				</div>	
			<?php
			
		}
		
		?>
		
		
		
		
		<?php  


list_dashboard(' ' , 'Percentage Deduction' , $pers->percentage.'%' ) 

?>
		
		
		
		<?php  
$product  = add_product::where('email'  , session('vendor'))->get();

list_dashboard(' ' , 'Total Product' , count($product )  ) 

?>
		
		
		<?php  

$product_public  = add_product::where('email'  , session('vendor'))->where('status' , 'public')->get();


list_dashboard(' ' , 'Total Public Product' , count($product )  ) 

?>
		
   	
		<?php  
		$order_list = order_list::where('state' , 'progress')->where('vendor_email',  session('vendor'))->get();
		
		list_dashboard(' ' , 'Total Orders Processing' ,   count($order_list)  )


?>	
		<?php  
		$order_list = order_list::where('state' , 'complete')->where('vendor_email',  session('vendor'))->get();
		
		list_dashboard(' ' , 'Total Orders completed' ,   count($order_list)  )


?>	
	
			<?php  
		$order_list = order_list::where('state' , 'cancel')->where('vendor_email',  session('vendor'))->get();
		
		list_dashboard(' ' , 'Total Orders cancelled' ,   count($order_list)  )


?>
	
   
   
   </div>



@endsection