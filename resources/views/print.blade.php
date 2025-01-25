<?php   

use App\order_list;   
use App\add_product;   
use App\client; 
use App\logo; 

$order_list = order_list::find($id);
$product = add_product::find($order_list->product_id);
$client = client::where('id' , $order_list->email)->first();
$logo = logo::first();
?>
<title> {{ $product->name   }}  {{ $order_list->order_id}}      </title>
@extends('layouts.index')


@section('content')



 <link rel="stylesheet" type="text/css" href="{{ asset('css/print.css')  }}"  media="print" />


<div  class="container"   id="space_up"   style="font-size: 20px;  margin-top: 150px" >



<div  class="row">
<div   style="color: black">

<button   class="btn btn-primary"   onClick="window.history.back();">  Back </button>
<br/>
<br/>

<button   class="btn btn-primary"   onClick="window.print()">  Print </button>



<div>
<!--	
<h2>  <img   src="{{  asset('slider/'.$logo->picture) }}"    width="50"   height="50"   style="border-radius:100%" />    {{config('app.name')}}      </h2>  --->


<table border="1"  class="table table-striped table-dark">
  <tbody>
   
   
    <tr   scope="row">
     
     
      
      <td> 
       Date : {{ $order_list->	created_at }} <br/>
        
          Order Id  :   {{ $order_list->order_id}} 
         </td>
         
         <td> </td>
    </tr>
    
    <tr>
		<td>  
    <h3  style="text-decoration: underline"> Bill To   </h3> 
    
    
    <p>
    	Name  :{{ $client->first_name }}  &nbsp;&nbsp;   {{ $client->last_name   }}
    	<br/>
    	
    	Phone No: {{ $client->phone   }}
    	<br/>
    	
    	Country  :{{ $client->country  }}
    	
    	<br/>
    	
    	Email Address : {{ $client->email   }}
    	
    	<br/>
    	
    	
    
    	
    </p>
     
      
        </td>
      <td>
      
        <h3 style="text-decoration: underline"> Delivered To  </h3>
        
        <p>
        
 {{ $order_list->delivery_address  }}       	
        	
        </p>
        
      
          </td>
    </tr>
    
    
    
  </tbody>
</table>

	<br/>
	
	<h3  align="center">  Product Description</h3>
	
	<table border="1"  class="table table-striped table-dark">
  <tbody>
	
	<tr>
	<td>
<p>


	<?php  
	$image  =	json_decode($product->picture , true) ;
		?>
<img   src="{{$image[0]['new_name']  }}"    style="width: 100px ; height:100px"  height="100"   width="100" />

<br/>

	Product Name:  {{ $product->name }}  
	<br/>
	Quantity : {{  $order_list->quantity  }} 
	</p>
	</td>
	
	<td  scope="rows"> 
	
	<p> 
	 
	<br/>
	Subtotal Price =  &#x20A6; {{ number_format( $order_list->price  )}} 
	
	<br/>
	Delivery Charges  = &#x20A6;{{ number_format( $order_list->delivery_amount  )}}
	
	<br/>
	
	
	Total  Price    = &#x20A6; {{ number_format( $order_list->price  + $order_list->delivery_amount  )}} 
	
	</p>
	
	
	</td>
	
	
	
</tr>
		</tbody>
	</table>
		
	<h3>  	State  :   {{  $order_list->state  }} </h3>
</div>
</div>
	</div>
	</div>



@endsection