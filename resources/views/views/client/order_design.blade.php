<?php
use App\order_list;
use App\add_product;
use App\client;
use App\now_address;

?>          
            @foreach( $progress_order  as $progress_orders)
           
                   <br/>
                   <br/>
<div  class="container_normal   orders"  style="overflow: auto"  >



<div  class="col-sm-4">   
<p>
Order No: {{  $progress_orders->order_id  }}</p>

<div   class="cartimage"     style="background-image: url('{{ asset('products/'. $progress_orders->picture)  }}')" >  </div> 
  
 


  </div>
<div  class="col-sm-4"> 



    <p>Payment Method: {{  $progress_orders->pay }}

<br/>  
<?php    ?>

 <strong> &#x20A6;{{ number_format( $progress_orders->price  *  $progress_orders->quantity ) }} </strong>
 <br/>
 
 Quantity :  {{ $progress_orders->quantity  }}

<br/>
  Date: {{ $progress_orders->created_at  }}

  
    </p> 
    <?php  
	if( $type_table=='progressing' ){  ?>
	

 
      
<?php  }   ?>

 
   </div>
		
      
       <div  class="col-sm-3"> 
        <p> Delivery Address :  </p> 
         <?php
		   

		
		?>
      
       
        <div   style="width: 200px  ; height: 100px ; overflow: auto"> {!!  $progress_orders->delivery_address    !!}   </div>
        
        
        
       
       <p>  Delivery Charges :  <span>  &#x20A6; {{ $progress_orders->delivery_amount }}  </span> </p>
       
       
       
       
       <label  class="{{ $color  }}">  <?php   echo  $type_table   ?>   </label>
       </div>
        
         
			  </div>
          
          
          @endforeach