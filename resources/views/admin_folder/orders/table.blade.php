
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
      
  
      
      <th scope="col">Client email  </th>
      
      <th scope="col">Client name  </th>
      
      <th scope="col">Client phone  </th>
      
      <th scope="col"> product name    </th>
      
      
   
      
      <th scope="col">quantity  </th>
      
      <th scope="col">Total Price  (&#x20A6;) </th>
      

      

      
       <th scope="col"> product picture   </th>
       
    
       

      
  
      <th scope="col">Action</th>
      <th scope="col">   </th>
      
      <th scope="col">   </th>
      
      <th scope="col"> <span  class="text-danger">  Cancel   </span>  </th>
      
      
      
 
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   <?php   
	  
	  $product  = add_product::find($categorys->product_id);
	  
	  $client  = client::where('id', $categorys->email)->first();
	  
	 
	  
	  
	  ?>
   
    <tr>
      <th scope="row">{{   $count }}</th>
      

      
      <th scope="row">{{   $categorys->created_at  }}</th>
      
      
      <td>{{ $client->email  }}</td>
     
      
      <td><p>{{ $client->name  }}    </p>  </td>
      
      <td>{{ $client->phone  }}</td>
      <td>{{ $product->name  }}</td>
 
      
      
      <td>{{ $categorys->quantity  }}</td>
      
      <?php     $total_price  = (  $categorys->quantity  *  $product->price   )  +   $categorys->delivery_amount    ?>
      
      <td>  {{  number_format($total_price )  }}  </td>  
      
       
        <?php   
         $image  =  json_decode($product->picture   , true);
        
        ?>


        <td>  <div  data-src="{{ $image[0]['new_name']  }}"  class="lazy cartimage"   >  </div>  </td>
      
       <!---   $client->-->
       
     
       
      
 
           
             
               
      <td>   <a  target="_blank" href="/order_details/{{ $categorys->id   }}" class="btn btn-primary">  Details </a></td>

		<td>


    
		
		@if(session('admin'))
	<a  onclick="return confirmAlert('Do you want to Complete the  Order ?'  , this.href)" href="/order_action/{{ $categorys->id  }}/{{ $link_change  }}">  <button  class="btn btn-primary">      <?php   echo($value_progress) ?>   </button> </a>
   
   @endif

     
       </td>
       
       
       <td> {{-- <a  href="/print_invoice/{{ $categorys->id  }}">  <button  class="btn btn-success">  Print Invoice </button>   </a>  --}}  </td>
       
       
        
       <td> <a  onclick="return confirmAlert('Do you want to Cancel the  Order ?'  , this.href)"  href="/order_action/{{ $categorys->id  }}/cancel">  <button  class="btn btn-danger">  Cancel </button>   </a>   </td>
       
 
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>