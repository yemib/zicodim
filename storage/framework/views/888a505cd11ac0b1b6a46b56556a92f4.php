

<?php $__env->startSection('contenth'); ?>


<div>

<a  class="btn btn-primary"  href="/add_category">Add Category </a>

	
	<h2> Category List  </h2>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">status</th>
      <!--<th scope="col">Category</th> -->
      <!--<th scope="col">Sub Category</th>-->
      <th scope="col">Picture</th>
      <th scope="col">Action</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
    <tr>
      <th scope="row"><?php echo e($count); ?></th>
      <td><?php echo e($categorys->name); ?></td>
      <td>status</td>
      
      <!---
      <td><?php echo e($categorys->parent); ?></td>
      
      <td><?php echo e($categorys->sub_parent); ?></td>
      
      ---->
      
      
      <td><a  href="<?php echo e(asset('category2/'.$categorys->picture)); ?>">  <?php echo e($categorys->picture_real_name); ?>  </a>  </td>
      
     
		<td><a  class="btn btn-primary"  href="/edit_category/<?php echo e($categorys->id); ?>">  Edit  </a>      </td>
   
   
   <td> <a   onClick="return confirmAlert('Delete category(<?php echo e($categorys->name); ?>)' , this.href)"  class="btn btn-danger" href="/delete_category/<?php echo e($categorys->id); ?>">Delete</a>   </td>
    </tr>

  <?php     $count++  ?>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  </tbody>
</table>
<?php echo e($category->links()); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/list_category.blade.php ENDPATH**/ ?>