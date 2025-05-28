<?php $__env->startComponent('mail::message'); ?>
# <?php echo e($heading); ?>


<?php echo $message; ?>



<?php if(isset($button)): ?>

<?php $__env->startComponent('mail::button', ['url' =>$button_url]); ?>
<?php echo e($button); ?>

<?php echo $__env->renderComponent(); ?>

<?php endif; ?>

<?php echo e(config('App.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/mail/sign_blade.blade.php ENDPATH**/ ?>