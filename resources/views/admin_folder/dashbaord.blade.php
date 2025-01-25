@if(!session('admin'))
<script>  window.location='/admin_signin'  </script>
@endif

<?php
use App\client;
use App\vendor_list;
use App\add_category;
use App\add_product;
use App\slider;
use App\page_content;
use App\pickup;
use App\order_list;
use App\user_admin;

?>

@extends('admin_dashboar')



@section('contenth')	

	
	<?php
		
		function list_dashboard($src , $content , $number  ){
			?>
			
			<a  href="{{$src}}"> 
				<div  class=" btn cartbutton  col-sm-3 "  
				style=" color: rgba(51,51,51,1.00); margin: 10px ; height: 100px ; overflow: auto; width: 30%">
				
				<div class="">
				
			<p>	
			
			<strong>{{$number}}</strong>
			<br/>
			
			<strong>	{{	$content }}  </strong>  </p>
					
				</div>
				
						
				</div>
				
					</a>	
			<?php
			
		}
		
		?>
		
					<!--   dashboard-->
					<span>   </span>
					
					<br/>
					
					
	<p><a  href="/admin_logout">   <button   class="btn btn-danger"> Logout  </button>  </a> </p>
				
					
		<?php  
$add_product = add_product::all();

list_dashboard('/list_product' , 'Total Product' , count($add_product)  ) ;


	$client  = client::all();
	list_dashboard('/customer' , 'Total Customers' ,  count($client)  );


		$order_list = order_list::where('state' , 'progress')->get();
		list_dashboard('/progress_order' , 'Total  Processing Orders ' ,   count($order_list)  );


		$order_list = order_list::where('state' , 'complete')->get();
		
		list_dashboard('/complete_order' , 'Total Completed Orders' ,   count($order_list)  );


		$order_list = order_list::where('state' , 'cancel')->get();
		
		list_dashboard('/cancel_order' , 'Total Cancelled Orders' ,   count($order_list)  );



			
		

?>
		
		
		
	@endsection