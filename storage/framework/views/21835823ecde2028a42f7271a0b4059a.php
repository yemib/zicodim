

<?php $__env->startSection('content'); ?>
<?php   

use App\slider;
use App\add_product;
use App\page_content;
use App\vendor_list;

?>
<?php 

// select the email from the vendor registran database 
$vendor_list = vendor_list::where('store_name' , $Inmail )->first();


$select =add_product::where('email' , $vendor_list->email )->Orderby('id' , 'asc')->paginate(20) ;

$name =add_product::where('email' , $vendor_list->email )->Orderby('id' , 'asc')->first() ;
	
	
	;?>
<div  class="container"  id="space_up">
	
	<div   class="row">
	
	<h3> <?php echo e($name->vendor_name); ?>   Store  </h3>
	
	<div   class="container_of_each" style=""> 
	  


    <div  style="z-index: 300000"  class="col-sm-12"> 
    
    <?php echo $__env->make('layouts.category_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
          </div>
          



		<div  class="col-sm-12"> <?php echo e($select->links()); ?> </div>

</div>
</div>
</div>
	
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/individual.blade.php ENDPATH**/ ?>