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
<title> <?php echo e($product->name); ?>  <?php echo e($order_list->order_id); ?>      </title>



<?php $__env->startSection('content'); ?>



 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/print.css')); ?>"  media="print" />


<div  class="container"   id="space_up"   style="font-size: 20px;  margin-top: 150px" >



<div  class="row">
<div   style="color: black">

<button   class="btn btn-primary"   onClick="window.history.back();">  Back </button>
<br/>
<br/>

<button   class="btn btn-primary"   onClick="window.print()">  Print </button>



<div>
<!--	
<h2>  <img   src="<?php echo e(asset('slider/'.$logo->picture)); ?>"    width="50"   height="50"   style="border-radius:100%" />    <?php echo e(config('app.name')); ?>      </h2>  --->


<table border="1"  class="table table-striped table-dark">
  <tbody>
   
   
    <tr   scope="row">
     
     
      
      <td> 
       Date : <?php echo e($order_list->	created_at); ?> <br/>
        
          Order Id  :   <?php echo e($order_list->order_id); ?> 
         </td>
         
         <td> </td>
    </tr>
    
    <tr>
		<td>  
    <h3  style="text-decoration: underline"> Bill To   </h3> 
    
    
    <p>
    	Name  :<?php echo e($client->first_name); ?>  &nbsp;&nbsp;   <?php echo e($client->last_name); ?>

    	<br/>
    	
    	Phone No: <?php echo e($client->phone); ?>

    	<br/>
    	
    	Country  :<?php echo e($client->country); ?>

    	
    	<br/>
    	
    	Email Address : <?php echo e($client->email); ?>

    	
    	<br/>
    	
    	
    
    	
    </p>
     
      
        </td>
      <td>
      
        <h3 style="text-decoration: underline"> Delivered To  </h3>
        
        <p>
        
 <?php echo e($order_list->delivery_address); ?>       	
        	
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
<img   src="<?php echo e($image[0]['new_name']); ?>"    style="width: 100px ; height:100px"  height="100"   width="100" />

<br/>

	Product Name:  <?php echo e($product->name); ?>  
	<br/>
	Quantity : <?php echo e($order_list->quantity); ?> 
	</p>
	</td>
	
	<td  scope="rows"> 
	
	<p> 
	 
	<br/>
	Subtotal Price =  &#x20A6; <?php echo e(number_format( $order_list->price  )); ?> 
	
	<br/>
	Delivery Charges  = &#x20A6;<?php echo e(number_format( $order_list->delivery_amount  )); ?>

	
	<br/>
	
	
	Total  Price    = &#x20A6; <?php echo e(number_format( $order_list->price  + $order_list->delivery_amount  )); ?> 
	
	</p>
	
	
	</td>
	
	
	
</tr>
		</tbody>
	</table>
		
	<h3>  	State  :   <?php echo e($order_list->state); ?> </h3>
</div>
</div>
	</div>
	</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/print.blade.php ENDPATH**/ ?>