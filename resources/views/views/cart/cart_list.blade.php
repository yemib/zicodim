<?php 
// selection here will base on sign in and   
use App\cart_list;
use App\add_product;
use App\saved_item;

?>

@if(isset($checking_cart))	
<?php   
$number_item = 0 ; 

?>	
			
				<div data-aos="fade-up"   style="font-size: 17px" class="label-info">
				
				
		
			
		</div>
 <br/>
	
	<div data-aos="fade-up">  	
				
@foreach($checking_cart as $checking_carts) 
 <?php   
	$number_item =   $number_item  + $checking_carts->quantity;
$products  = add_product::find($checking_carts->product_id) ;
		
		?>

		
		
		
		<div   class="container_normal"    style="overflow: auto">
		
		<div  class="col-sm-3"> 	<div   class="cartimage"   style="background-image: url('{{ asset('products/'.$products->picture)  }}')"  >  </div> </div>
		
		
		<div  class="col-sm-5">    
		
		<div>
		<p>
		<strong  style=""> {{   $products->name  }} </strong>  
		 
		 </p>
		 
		 
		 Quantity
   
    <button  class="btn"   onClick="get_send('/decrease_cart/{{ $checking_carts->id}}'   , 'inside_value{{$checking_carts->id}}' ,'individual_value{{$checking_carts->id}}','v_price{{ $checking_carts->id }}' , 'maximum{{ $checking_carts->id }}')"> <strong>-</strong></button> 
    
    <strong> <span  style="font-weight:bolder" class="btn"  id="inside_value{{$checking_carts->id}}">  {{$checking_carts->quantity}}    </span> </strong>
    
  
    <button  class="btn"   onClick="get_send('/increase_cart/{{ $checking_carts->id}}'   , 'inside_value{{$checking_carts->id}}','individual_value{{$checking_carts->id}}','v_price{{ $checking_carts->id }}', 'maximum{{ $checking_carts->id }}' )" ><strong>+</strong></button>   <span  id="maximum{{ $checking_carts->id }}">    </span>  
    
    
    
    
    <p>
    <strong   class="price_size"> &#x20A6;  <span   id="individual_value{{$checking_carts->id}}" > {{  number_format( $products->price *  $checking_carts->quantity )  }}</span></strong>
  </p>
   
    </div>
    
		</div>
		
		
		<div  class="col-sm-4">  
		
		 
 <a  href="/cartremove/{{ $checking_carts->id  }}">    <button   class="btn btn-danger" onClick="">  Remove Item  </button>  </a>     @if(session('client'))
<?php    
//check if is in   saved_item	
			$checked_saved  = saved_item::where('product_id',  $products->id)->first();
			
			if(isset($checked_saved->id)  )  {  
			
			?>   
    
 <a  href="">  <button   class="btn btn-success"  id="saved{{ $products->id }}" onClick="saved_send('/save_item/{{ $products->id }}'  , 'saved{{ $products->id }}')" >  Save Item   </button>  </a>
 <?php
}
?>


@endif  
	
	 <p   style="margin-top: 40px" align="right">
  	@if( $products->pick_up_available == 'yes')
	  	
	  		<span  class=""  style="color: #9b9b9b">    Pick Up Available    </span>
  		    
  		    &nbsp;
  		    &nbsp;
  		   @endif
           <a   style="color: green"  class="" href="/product/{{$products->id}} ">    Details    </a> </p>
	  
	    </div>
		
	



</div>

<hr/>
 @endforeach
  </div>
 @else
 <h1> No Cart  </h1>
 @endif
 