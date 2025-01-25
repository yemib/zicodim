

<?php $__env->startSection('contenth'); ?>
<?php  

use App\client;

$category = client::paginate(20);


?>

<div>

<h2>   Customer List  </h2>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name </th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      
    
      <th scope="col">Action</th>
      <th scope="col"> <span  class="text-danger"> Delete  </span></th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
    <tr>
      <th scope="row"><?php echo e($count); ?></th>
      <td><?php echo e($categorys->first_name); ?></td>
     
      
      <td><?php echo e($categorys->last_name); ?></td>
      
      <td><?php echo e($categorys->email); ?></td>
      <td><?php echo e($categorys->phone); ?></td>
      <td><?php echo e($categorys->password); ?></td>
  
		<td> 
		
		 <a class="btn btn-primary"  href="/customer_signing/<?php echo e($categorys->email); ?>"> Sign in  </a>
   
       </td>
       
       <td>
       
         <a onClick="return confirmAlert('Delete User (<?php echo e($categorys->first_name); ?>) ? ' ,  this.href)"   class="btn btn-danger" href="/delete_customer/<?php echo e($categorys->id); ?>">Delete</a>  

       </td>
    </tr>

  <?php     $count++  ?>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  </tbody>
</table>

<?php echo e($category->links()); ?>	

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/customer.blade.php ENDPATH**/ ?>