
<?php 
use App\order_list;
use App\add_product;
use App\client;
use App\now_address;

?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      
      <th scope="col">  Order id </th>
      
      <th scope="col">Client email  </th>
      
      <th scope="col">Client name  </th>
      
      <th scope="col">Client phone  </th>
      
      <th scope="col"> product name    </th>
      
      
      <th scope="col"> product category   </th>
      
      <th scope="col">quantity  </th>
      
      <th scope="col">Total Price  (&#x20A6;) </th>
      
      <th scope="col"> pay on </th>
      
      <th scope="col"> 	state  </th>
      
       <th scope="col"> product picture   </th>
       
    
       
       
       <th scope="col"> Delivery Address  </th>
       
       
       
       <th scope="col"> Shipping Amount  </th>
       
      
  
      <th scope="col">Action</th>
      
      <th scope="col">   </th>
      
      <th scope="col"> <span  class="text-danger">  Cancel   </span>  </th>
      
      
      
 
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   <?php   
	  
	  $product  = add_product::find($categorys->product_id);
	  
	  $client  = client::where('email', $categorys->email)->first();
	  
	 
	  
	  
	  ?>
   
    <tr>
      <th scope="row">{{   $count }}</th>
      

      
      <th scope="row">{{   $categorys->created_at  }}</th>
      
      <td>{{ $categorys->order_id  }}</td>
      <td>{{ $categorys->email  }}</td>
     
      
      <td><p>{{ $client->first_name  }}  &nbsp; {{ $client->last_name  }}  </p>  </td>
      
      <td>{{ $client->phone  }}</td>
      <td>{{ $product->name  }}</td>
      <td>{{ $product->category  }}</td>
      
      
      <td>{{ $categorys->quantity  }}</td>
      
      <?php     $total_price  = (  $categorys->quantity  *  $product->price   )  +   $categorys->delivery_amount    ?>
      
      <td>  {{  number_format($total_price )  }}  </td>  
      
        <td>{{ $categorys->pay }}</td>
       
         <td>{{ $categorys->state }}</td>
       
        
        <td>  <div  data-src="{{ asset('products/'.$product->picture )  }}"  class="lazy cartimage"   >  </div>  </td>
      
       <!---   $client->-->
       
     
       
       <td>
       
       <div  style="width: 100%; height: 100px ; overflow: auto">   {!! $categorys->delivery_address   !!}   </div>
        
         
           </td>
                 
 
           
             
               
                   
            <td>
       
       <div  style="width: 100px; height: 100px ; overflow: auto">   {{  number_format ( $categorys->delivery_amount )   }}   </div>
        
         
           </td>

		<td>
		
		@if(session('admin'))
	<a href="/order_action/{{ $categorys->id  }}/{{ $link_change  }}">  <button  class="btn btn-primary">      <?php   echo($value_progress) ?>   </button> </a>
   
   @endif

     
       </td>
       
       
       <td> <a  href="/print_invoice/{{ $categorys->id  }}">  <button  class="btn btn-success">  Print Invoice </button>   </a>   </td>
       
       
        
       <td> <a  href="/order_action/{{ $categorys->id  }}/cancel">  <button  class="btn btn-danger">  Cancel </button>   </a>   </td>
       
 
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>