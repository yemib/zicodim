<?php
use App\order_list;
use App\add_product;
use App\client;
use App\now_address;

use App\contact_detail;


$contact_details  = contact_detail::first();

?>          
            <?php $__currentLoopData = $progress_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progress_orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
                   <br/>
                   <br/>
<div  class="container_normal   orders"  style="overflow: auto"  >



<div  class="col-sm-4">   
<p>
Order No: <?php echo e($progress_orders->order_id); ?></p>


  
 


  </div>
<div  class="col-sm-4"> 



    <p>
      
 
<?php    ?>



 Quantity :  <?php echo e($progress_orders->quantity); ?>


<br/>
  Date: <?php echo e($progress_orders->created_at); ?>

  <br/>

  <a   href="/order_details/<?php echo e($progress_orders->id); ?>"  class="btn  btn-sm btn-primary">  Details  </a>
    </p> 
    <?php  
	if( $type_table=='progressing' ){  ?>
	

 
      
<?php  }   ?>

 
   </div>
		
      
       <div  class="col-sm-3"> 
  <?php    $button = "https://" . $_SERVER['HTTP_HOST'] . "/order_details/" . $progress_orders->id; ?>

        <a target="_blank" class="btn btn-sm  btn-primary"
         href="https://wa.me/<?php echo e($contact_details->whatapp); ?>?text= <?php echo e($button); ?> check  my order details">
         Chat With Us <i class="fa fa-arrow-right ms-2"></i></a>

      
         <?php
		   

		
		?>
      
       
    
        
    
       
       
       <br/>
       Status :
       <br/>
       <label  class="<?php echo e($color); ?>">  <?php   echo  $type_table   ?>   </label>


       </div>
        
         
			  </div>
          
          
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH G:\websites\Zicodim\resources\views/client/order_design.blade.php ENDPATH**/ ?>