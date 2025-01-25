  <?php    use App\saved_item; ?>

  	@if(count($select)  > 0 )

	  	@foreach($select as $selects)
	  	
	  	<div  data-aos="fade-up"  class="my-sm-3"    style="" >
	  	
	  	<div style="position: relative"   id="product_container">
	  	
	  		<p  align="right">
	  		
	  		  @if(session('client') )
<!---  check if already in the database before --->

<?php   $checking =  saved_item::where('product_id'  ,$selects->id )->where('email' , session('client')['id'] )->first();   ?>

@if(!isset($checking->id)  )
<span  class="desktopmenu">
<span   style="background:orange; cursor: pointer"  class="badge"   id="saved{{ $selects->id }}" >
 <span   style="color: rgba(255,255,255,1.00)" onClick="saved_send('/save_item/{{ $selects->id }}'  , 'saved{{ $selects->id }}')"  class="glyphicon glyphicon-heart">   </span> 
 </span>
 </span>
 @endif
 
   @endif  
	  		 
	  		 </p>
	  		
	  		
	  		<a  style="text-decoration:none; color: 
	  		rgba(0,0,0,1.00)" href="/product/{{$selects->id}}">
	  		
	  		  <div  class="des_text">
  <strong> {{ $selects->name  }}</strong>
   
	  </div>

	  
	  <?php 
	  $image =  json_decode($selects->picture ,  true); 
	 
	 ?>
	  		<div    data-src="{{ asset($image[0]['new_name'])  }}"       class="lazy  each_image_display  each_image_display{{ $selects->id }}">
	  		
	  		
	  			
	  			
	  			
	  		</div>
	  		
  		      <script>  
	 
$('.each_image_display{{ $selects->id }}').load( $('.img_load_b{{ $selects->id }}').hide()  );

</script>
  		   
	  		   <div  class="des_text">
	  		  
   {!! $selects->description  !!}
   
   </div>
	  		
	 {{--  		<hr   class="desktopmenu" />
	  		
	  		
	  		<p   style="display: inline-block" align="left">	<strong   class="price_size" >  &#x20A6; {{ number_format($selects->price)  }}</strong> </p>
	  		
	  		
	  	
	  			@if( $selects->coupon_price !=0)
	  	<p  style="display: inline-block; "  align="right">	<strong    id="second_price" style="text-decoration: line-through  ; color:#9b9b9b  ">&#x20A6;{{ number_format($selects->coupon_price)  }}</strong> </p>
	  		@endif --}}
	  	
	  		
{{-- 	  			@if( $selects->pick_up_available == 'yes')
	  		<br/>
	  		<span  class="desktopmenu"  style="color: #9b9b9b">    Pick Up Available    </span>
  		   
  		   @endif
	  		 --}}

	  	
	  		 
	  		
	  		</a>
	  			
  			    <div  class=""  style="position: absolute ; bottom: 0px  ;left: 0px; width: 100%  ; overflow: hidden">
	  			   
 <button  onClick='side_cart("/cart/addItem/{{ $selects->id }}/static")'class=" btn cartbutton "> <strong>  Add To Cart </strong>  </button>
   
			</div>
	  			
	  		</div>
	  		
	  	</div>
	  	@endforeach
	  	
	  	@else
	  	
	  	<div  align="center"> 
	  	
	  	      
	  	<div   class="col-sm-6" style="margin-top: 30px">
	  	
	  	<div  style="background-color: rgba(255,255,255,1.00); border-radius: 10px ; padding: 100px">
	  	
	
	  	
			<h2>     	<svg height="50" viewBox="0 0 17 15" width="50" xmlns="http://www.w3.org/2000/svg" class="" name="cart">
  
  <path d="M15.814 12.856a2.144 2.144 0 1 0-4.287 0 2.144 2.144 0 0 0 4.287 0zm-2.791 0a.646.646 0 1 1 1.288 0 .646.646 0 0 1-1.286 0h-.002zm2.438-10.143V2.71a1.498 1.498 0 0 1 1.454 1.857l-1.022 4.14a1.872 1.872 0 0 1-1.818 1.424H6.482c-.867 0-1.62-.593-1.822-1.436L3.003 1.784a.374.374 0 0 0-.363-.286H.749A.749.749 0 0 1 .749 0h1.889c.866 0 1.62.594 1.822 1.436l1.656 6.912c.041.168.191.286.364.287h7.595a.374.374 0 0 0 .363-.285l1.023-4.14H9.74a.749.749 0 1 1 0-1.497h5.72zM6.403 15a2.144 2.144 0 1 1 0-4.287 2.144 2.144 0 0 1 0 4.287zm0-2.791v.001a.646.646 0 1 0 0-.002z" fill="orange" fill-rule="nonzero"></path>
  
  
  </svg>	No Product  </h2>
	  		
	  		
	  	</div>
	  	<br/>
	  	<br/>
	  	<br/>
	  		
	  				
	  	</div>
	  	
	  	</div>
	  	
	  	@endif