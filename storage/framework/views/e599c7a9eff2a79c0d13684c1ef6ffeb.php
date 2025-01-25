

<?php $__env->startSection('contenth'); ?>
<?php    
use App\icons;
$category = icons::paginate(20);
?>

<div>

<a  href="/iconses">  <button  class="btn btn-primary">  Add Portfolio  </button>  </a>

<h2>  List Porfolio </h2>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">view</th>
      
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
    <tr>
      <th scope="row"><?php echo e($count); ?></th>
      <td><?php echo e($categorys->real_name); ?></td>
     
      <td> <a   target="new"  href="<?php echo e(asset('slider/'.$categorys->picture)); ?>">     <?php echo e($categorys->real_name); ?>   </a></td>
     <td>
		 <a  onClick="return confirmAlert('Delete Image ? ' , this.href)"  href="/delete_icon/<?php echo e($categorys->id); ?>">  Delete  </a> 
		 
		     </td>
    </tr>

  <?php     $count++  ?>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  </tbody>
</table>

<?php echo e($category->links()); ?>	

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/list_icons.blade.php ENDPATH**/ ?>