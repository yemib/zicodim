<?php
use App\order_list;
use App\add_product;
use App\client;
use App\now_address;

use App\contact_detail;


$contact_details  = contact_detail::first();

?>          
            @foreach( $progress_order  as $progress_orders)
           
                   <br/>
                   <br/>
<div  class="container_normal   orders"  style="overflow: auto"  >



<div  class="col-sm-4">   
<p>
Order No: {{  $progress_orders->order_id  }}</p>

{{-- <div   class="cartimage"     style="background-image: url('{{ asset('products/'. $progress_orders->picture)  }}')" >   </div> --}}
  
 


  </div>
<div  class="col-sm-4"> 



    <p>
      
{{--       Payment Method: {{  $progress_orders->pay }}

<br/>  --}} 
<?php    ?>

{{--  <strong> &#x20A6;{{ number_format( $progress_orders->price  *  $progress_orders->quantity ) }} </strong> --}}
{{--  <br/>
  --}}
 Quantity :  {{ $progress_orders->quantity  }}

<br/>
  Date: {{ $progress_orders->created_at  }}
  <br/>

  <a   href="/order_details/{{ $progress_orders->id  }}"  class="btn  btn-sm btn-primary">  Details  </a>
    </p> 
    <?php  
	if( $type_table=='progressing' ){  ?>
	

 
      
<?php  }   ?>

 
   </div>
		
      
       <div  class="col-sm-3"> 
  <?php    $button = "https://" . $_SERVER['HTTP_HOST'] . "/order_details/" . $progress_orders->id; ?>

        <a target="_blank" class="btn btn-sm  btn-primary"
         href="https://wa.me/{{ $contact_details->whatapp  }}?text= {{  $button }} check  my order details">
         Chat With Us <i class="fa fa-arrow-right ms-2"></i></a>

      {{--   <p> Delivery Address :  </p>  --}}
         <?php
		   

		
		?>
      
       
    {{--     <div   style="width: 200px  ; height: 100px ; overflow: auto"> {!!  $progress_orders->delivery_address    !!}   </div>
        
         --}}
        
    {{--    
       <p>  Delivery Charges :  <span>  &#x20A6; {{ $progress_orders->delivery_amount }}  </span> </p>
        --}}
       
       
       <br/>
       Status :
       <br/>
       <label  class="{{ $color  }}">  <?php   echo  $type_table   ?>   </label>


       </div>
        
         
			  </div>
          
          
          @endforeach