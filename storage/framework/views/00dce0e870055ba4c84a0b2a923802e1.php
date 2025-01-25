
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
   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php   
	  
	  $product  = add_product::find($categorys->product_id);
	  
	  $client  = client::where('id', $categorys->email)->first();
	  
	 
	  
	  
	  ?>
   
    <tr>
      <th scope="row"><?php echo e($count); ?></th>
      

      
      <th scope="row"><?php echo e($categorys->created_at); ?></th>
      
      
      <td><?php echo e($client->email); ?></td>
     
      
      <td><p><?php echo e($client->name); ?>    </p>  </td>
      
      <td><?php echo e($client->phone); ?></td>
      <td><?php echo e($product->name); ?></td>
 
      
      
      <td><?php echo e($categorys->quantity); ?></td>
      
      <?php     $total_price  = (  $categorys->quantity  *  $product->price   )  +   $categorys->delivery_amount    ?>
      
      <td>  <?php echo e(number_format($total_price )); ?>  </td>  
      
       
        <?php   
         $image  =  json_decode($product->picture   , true);
        
        ?>


        <td>  <div  data-src="<?php echo e($image[0]['new_name']); ?>"  class="lazy cartimage"   >  </div>  </td>
      
       <!---   $client->-->
       
     
       
      
 
           
             
               
      <td>   <a  target="_blank" href="/order_details/<?php echo e($categorys->id); ?>" class="btn btn-primary">  Details </a></td>

		<td>


    
		
		<?php if(session('admin')): ?>
	<a  onclick="return confirmAlert('Do you want to Complete the  Order ?'  , this.href)" href="/order_action/<?php echo e($categorys->id); ?>/<?php echo e($link_change); ?>">  <button  class="btn btn-primary">      <?php   echo($value_progress) ?>   </button> </a>
   
   <?php endif; ?>

     
       </td>
       
       
       <td>   </td>
       
       
        
       <td> <a  onclick="return confirmAlert('Do you want to Cancel the  Order ?'  , this.href)"  href="/order_action/<?php echo e($categorys->id); ?>/cancel">  <button  class="btn btn-danger">  Cancel </button>   </a>   </td>
       
 
    </tr>

  <?php     $count++  ?>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  </tbody>
</table><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/orders/table.blade.php ENDPATH**/ ?>