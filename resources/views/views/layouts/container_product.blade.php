<?php    use App\saved_item; ?>

  <div  style="position: relative" class="card--content">
  
  
  
<p  align="right">   

 
  @if(session('client') )
<!---  check if already in the database before --->

<?php   $checking =  saved_item::where('product_id'  ,$product1->id )->where('email' , session('client')['id'] )->first();   ?>

@if(!isset($checking->id) )
<span  class="desktopmenu">
<span    style="background:orange; cursor: pointer"  class="badge"   id="saved{{ $product1->id }}" >
 <span   style="color: rgba(255,255,255,1.00)" onClick="saved_send('/save_item/{{ $product1->id }}'  , 'saved{{ $product1->id }}')"  class="glyphicon glyphicon-heart">   </span> 
 </span>
 
 </span>
 
 @endif
 
   @endif  
   
     </p>
  
  <a  style="color: black  ; text-decoration: none"  href="/product/{{$product1->id}}"> 
    
    
     <div  class="des_text">
  <strong> {{ $product1->name  }}</strong>
   
	  </div>

    <?php   //get  the
    
    $picture  =  json_decode($product1->picture ,  true);
    ?>
  
  <div      data-src="{{     $picture[0]['new_name'] }}"
    
    style=""  class="lazy each_image_display    each_image_display{{ $product1->id }}">
   
   
    
   </div>
   
   
    <script>  
	 
$('.each_image_display{{ $product1->id }}').load( $('.img_load_b{{ $product1->id }}').hide()  );

</script>
   
   <div  class="des_text">
   {!! $product1->description  !!}
   
   </div>

 
  <hr   class="desktopmenu"  />
  
  
  
   
   
   	<p   style="display: inline-block" align="left">	<strong   class="price_size" style="" >&#x20A6;{{ number_format($product1->price)  }}</strong> </p>
	  		
	  		
	  	
	  			@if( $product1->coupon_price !=0)
	  	<p  style="display: inline-block; "  align="right">	<strong    id="second_price" style="text-decoration: line-through  ; color:#9b9b9b  ">&#x20A6;{{ number_format($product1->coupon_price)  }}</strong> </p>
	  		@endif
	  	

   
   

   
  
  </a>
  
  
   <div  class=""  style="position: absolute ; bottom: 0px  ;left: 0px; width: 100%  ; overflow: hidden">
 <button    onClick='side_cart("/cart/addItem/{{ $product1->id }}/static")'class=" btn cartbutton "> <strong>  Add To Cart </strong>  </button>
   
</div>
  
  </div>
  