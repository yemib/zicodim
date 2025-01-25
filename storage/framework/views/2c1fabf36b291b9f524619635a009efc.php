

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin_folder.upload_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php 
// selection here will base on sign in and   
use App\cart_list;
use App\add_product;

$checking_cart=0;
?>


<?php if(session('client')): ?>
<?php   
$checking_cart  = cart_list::where('email' ,session('client')['id'] )->get() ;
?>
<?php else: ?>
<?php if(isset($_COOKIE['session_id'])): ?>
<!---   this is to check cookie -->
<?php   
$checking_cart  = cart_list::where('session_id' ,$_COOKIE['session_id'] )->get() ;
?>
<?php endif; ?>
<?php endif; ?>



<div class="container  mycontainer" style="margin-top: 150px">


    <div style="" id="space_up" class="row">


        <?php if(count($checking_cart) == 0): ?>

        <script>
            window.location = '/'

        </script>

        <?php endif; ?>


        <?php if(count($checking_cart) > 0 ): ?>

        <div class="col-sm-9">




            <?php echo $__env->make('cart.cart_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>




        <div style="padding: 3px" class="col-sm-3">

            <?php echo $__env->make('cart.summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <a href="/checkout/complete-order"> <button class="btn btn-success  cartbutton"><strong>Continue to Checkout</strong> </button> </a>




        </div>

        <?php endif; ?>
    </div>



    <?php echo $__env->make('cart.saved_item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>


</div>


<?php echo $__env->make('admin_folder.upload_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/cart/cart.blade.php ENDPATH**/ ?>