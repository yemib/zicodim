  										
<div   class="row"  style=""> 
<?php
use App\saved_item;
use App\add_product;
	if(session('client')){  
		
$saved_item = 	saved_item::where('email', session('client')['id'])->paginate(4);
		
		}
?>


	<div   class="col-sm-12" style="padding: 5px"  >
	
	
	@if(isset($saved_item ))
	
	<h3  class="text_color"  align="left">  Saved for later</h3>
	
	
	
@foreach($saved_item  as $saved_items)
<?php 
$saved_product  = add_product::find($saved_items->product_id) ;
		?>
		
		
		<div  class="container_normal  col-sm-9"  >

			<?php 
				 $image  =  json_decode($saved_product->picture , true) ;
				
				?>
		
			<div  class="col-sm-3"> <div   class="lazy cartimage"     data-src="{{ asset( $image[0]['new_name'] )  }}">  </div> </div>
			
			
			<div  class="col-sm-5"> 
			
			<strong>  {{  $saved_product->name  }}</strong> 
			
			<p> <strong> &#x20A6; {{ number_format(  $saved_product->price ) }}</strong>  </p>
			
			  </div>
			
			
			
			<div  class="col-sm-4"> <a  href="/destroy_save/{{$saved_items->id}}"> 	<button   class="btn btn-danger">  Remove item </button></a>

 <a  href="/cart/addItem/{{ $saved_items->product_id  }}/next">	<button  class="btn btn-success">  Add to cart </button>     </a>
 
  <p   style="margin-top: 40px" align="right">
  {{-- 	@if( $saved_product->pick_up_available == 'yes')
	  	
	  		<span  class=""  style="color: #9b9b9b">    Pick Up Available    </span>
  		    
  		    &nbsp;
  		    &nbsp;
  		   @endif --}}
  
  
  <a   style="color: green"  class="" href="/product/{{$saved_product->id }} ">    Details    </a> </p>
  
    </div>
		

		
	

			<div  class="col-sm-12"   style="width: 100%">  	<hr/> </div>
 
 

	
	
	 </div>
	  

@endforeach
	
	
		<div   class="col-sm-12">
<?php  
echo  $saved_item->links();  ?>
</div>

@endif
 </div> 



	</div>
