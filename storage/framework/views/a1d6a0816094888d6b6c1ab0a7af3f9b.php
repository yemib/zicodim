


<?php   
use App\order_list;
use App\add_product;
use App\client;

$client  = client::where('email',  session('client')['id'])->first();

$progress_order = order_list::where('state' , 'progress')->where('email' , session('client')['id'])->orderBy('id', 'desc')->paginate(50);





?>

<?php $__env->startSection('client_extension'); ?>

	<div  class="acct_info">
	
		<h3>Orders </h3>
		
		
		 <div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
         
          <li role="presentation" class="active"><a href="#home1" data-toggle="tab" role="tab" aria-controls="tab1">Progress Orders</a></li>
          
          
          <li role="presentation"><a href="#paneTwo1" data-toggle="tab" role="tab" aria-controls="tab2">Completed Orders</a></li> 
          
           
             <li role="presentation"><a href="#paneTwo2" data-toggle="tab" role="tab" aria-controls="tab2">Canceled Orders</a></li>
          
          
     
          
          
        </ul>
        <div id="tabContent1" class="tab-content">
         
          <div role="tabpanel" class="tab-pane fade in active" id="home1">
          
          <?php 
			  $color  = 'btn-success';
			  $type_table = 'progressing';
			  
			  ?>
       
           <?php echo $__env->make('client.order_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             <?php if(count ($progress_order )  == 0): ?>
            <h5> No Progress Order  </h5>
            
            <?php endif; ?>
          
           </div>
          
          <div role="tabpanel" class="tab-pane fade" id="paneTwo1">
           
         <?php 
			  $progress_order = order_list::where('state' , 'complete')->where('email' , session('client')['id'])->orderBy('id', 'asc')->paginate(50);
			  
			  $color  = 'btn-success';
			  $type_table = 'completed';
			  
			  ?>
       
           <?php echo $__env->make('client.order_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
           <?php if(count ($progress_order )  == 0): ?>
            <h5> No Completed Order  </h5>
            
            <?php endif; ?>
            
          </div>
          
          
          <div role="tabpanel" class="tab-pane fade" id="paneTwo2">
           
           
                  
         <?php 
			  $progress_order = order_list::where('state' , 'cancel')->where('email' , session('client')['id'])->orderBy('id', 'asc')->paginate(50);
			  
			  $color  = 'btn-danger';
			  $type_table = 'Cancelled';
			  
			  ?>
       
           <?php echo $__env->make('client.order_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
            
           <?php if(count ($progress_order )  == 0): ?>
            <h5> No Cancelled Order  </h5>
            
            <?php endif; ?>
            
          </div>
          
       
          
          
          
        </div>
      </div>
		
		
		
			</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/client/orders.blade.php ENDPATH**/ ?>