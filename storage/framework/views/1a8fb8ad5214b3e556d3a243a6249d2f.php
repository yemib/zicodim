

<?php $__env->startSection('contenth'); ?>

<h3> Canceled Order List  </h3>

<?php    
use App\order_list;
use App\add_product;
use App\client;



if( session('admin')){  
	
$category = order_list::where('state' , 'cancel')->orderBy('id', 'asc')->paginate(20);

}else{
	
	if(session('vendor')){
		
		$category = order_list::where('state' , 'cancel')->where('vendor_email', session('vendor'))->orderBy('id', 'asc')->paginate(20);
	}
	
}



$value_progress  = 'Progress' ;

$link_change = "progress";
$cancel_code = "cancel";


?>

<div>

<?php echo $__env->make('admin_folder.orders.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo e($category->links()); ?>	

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/admin_folder/orders/order_cancel.blade.php ENDPATH**/ ?>