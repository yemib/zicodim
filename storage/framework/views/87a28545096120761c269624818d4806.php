

<?php $__env->startSection('contenth'); ?>
<?php     
use App\user_admin;
$category = user_admin::paginate(40);

?>

<div>
	
<a  href="/add_user">	<button  class="btn btn-primary">  Add Admin  </button> </a>
	<h2>Admin List   </h2>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php  
	  $count = 1 ;
	  $second_display = 1 ;
	  ?>
  
  
  
   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($second_display  > 1): ?>
    <tr>
      <th scope="row"><?php echo e($count); ?></th>
      <td><?php echo e($categorys->name); ?></td>

      
      <td><?php echo e($categorys->username); ?></td>
      
      <td><?php echo e($categorys->password); ?></td>
      
    
     
		<td><a  href="/edit_user/<?php echo e($categorys->id); ?>">  Edit </a>  |  <a onClick="return confirmAlert('Delete User ? ' , this.href)"  href="/delete_user/<?php echo e($categorys->id); ?>">Delete</a>   </td>
    </tr>
    <?php   $count++ ; ?>
<?php endif; ?>
  <?php  
	  
	 $second_display ++ 
	  
	  ?>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
<?php echo e($category->links()); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/admin_folder/list_user.blade.php ENDPATH**/ ?>