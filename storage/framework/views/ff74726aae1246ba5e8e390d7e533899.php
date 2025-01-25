

<?php $__env->startSection('contenth'); ?>
<?php    
use App\order_list;
use App\add_product;
use App\client;



if( session('admin')){  
	
$category = order_list::where('state' , 'progress')->orderBy('id', 'desc')->paginate(20);

}else{
	
	if(session('vendor')){
		
		$category = order_list::where('state' , 'progress')->where('vendor_email', session('vendor'))->orderBy('id', 'desc')->paginate(20);
	}
	
}



$value_progress  = 'Complete' ;

$link_change = "complete";


?>

<div>

<h2> Progress Order List  </h2>

<?php echo $__env->make('admin_folder.orders.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo e($category->links()); ?>	

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/admin_folder/orders/order_progress.blade.php ENDPATH**/ ?>