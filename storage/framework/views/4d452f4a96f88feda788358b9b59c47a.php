


<?php   

use App\client;
use App\order_address;
use App\now_address;
use App\pickup;

$address  = now_address::where('email',  session('client')['id'])->first();


if(isset($address->id) ){ 
$pickup =  pickup::find($address->pickup_id); }

?>

<?php $__env->startSection('client_extension'); ?>

	<div  class="acct_info">
		
	<?php echo $__env->make('cart.saved_item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
		
			</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/client/saved_item.blade.php ENDPATH**/ ?>