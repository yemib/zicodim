

<?php $__env->startSection('contenth'); ?>
<p>  <a href="/add_product"   class="btn btn-primary"> Add Product  </a>   </p>



<h2>   <?php if(isset($vendor_list)): ?>  Vendor Product List    <?php else: ?> List Product   <?php endif; ?>  </h2>
<?php    
use App\add_product;

if(session('admin')){  
	
	
	if(isset($vendor_list)) {
		
		$category = add_product::where('email', '!='  ,'admin')->orderBy('id' , 'desc')->paginate(20); 
		
	}else{
		$category = add_product::where('email','admin')->orderBy('id' , 'desc')->paginate(20); 
		
	}





}else{
	
	if(session('vendor')){
		$category = add_product::where('email',session('vendor'))->orderBy('id' , 'desc')->paginate(20);
	}
}





?>

<div>



<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Coupon Price</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Photo</th>
   <!--   <th scope="col">Vendor Name</th>  -->
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
      
          <th scope="col"><?php if(isset($vendor_list)): ?> Vendor Email  <?php endif; ?>   </th>
      
      <th scope="col"><?php if(isset($vendor_list)): ?> SignIn To Vendor   <?php endif; ?>   </th>
      
      
      <th scope="col"><?php if(session('admin')): ?>  Change State   <?php endif; ?>   </th>
      
      
    <th scope="col"  class="text-danger">Delete</th>
      
      
      
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
    <tr>
      <th scope="row"><?php echo e($count); ?></th>
      <td><?php echo e($categorys->name); ?></td>
     
      
      <td><?php echo e($categorys->quantity); ?></td>
      <td><?php echo e($categorys->price); ?></td>
      <td><?php echo e($categorys->coupon_price); ?></td>
      <td>   <?php echo $categorys->description; ?>  </td>
      <?php  $cat = App\add_category::find($categorys->category); ?>
      
      <td><div  class="des_text"> <?php if(isset($cat->id)): ?>  <?php echo e($cat->name); ?>  <?php endif; ?></div> </td>
      
      <td>
        <?php   $picture  =  json_decode($categorys->picture  , true) ;
        
        
        
        ?>


        <a  href="<?php echo e($picture[0]['new_name']); ?>">  <div  class="lazy  cartimage"   data-src="<?php echo e($picture[0]['new_name']); ?>"    >  </div> </a> </td>
    <!--  <td><?php echo e($categorys->vendor_name); ?></td>  -->
     
      <td><?php echo e($categorys->status); ?></td>
		<td>  <a  class="btn btn-primary"  href="/edit_product/<?php echo e($categorys->id); ?>">      Edit  </a>   </td>
		
		
		
		    <td scope="col"><?php if(isset($vendor_list)): ?> <?php echo e($categorys->email); ?>  <?php endif; ?>   </td>
      
      <td scope="col"><?php if(isset($vendor_list)): ?>  <a  href="/vendor/signin/<?php echo e($categorys->email); ?>">  Signin    </a>   <?php endif; ?>   </td>
		
		
   <td>  <span  id="buton_container<?php echo e($categorys->id); ?>">  <?php if(session('admin')): ?> <?php if($categorys->status =='public'): ?> 
   
   
   <button    class="btn  cartbutton"  onClick="change_state('/made_private/<?php echo e($categorys->id); ?>' , 'buton_container<?php echo e($categorys->id); ?>')"  > Private  </button>  <?php else: ?>    
   
     <button   onClick="change_state('/made_public/<?php echo e($categorys->id); ?>' , 'buton_container<?php echo e($categorys->id); ?>')" class="btn  cartbutton"> Public  </button>
   
    
      
       
       
       <?php endif; ?> <?php endif; ?>  
       </span>  </td>
   
   <td>  <a onClick="return confirmAlert('Delete Product (<?php echo e($categorys->name); ?>) ?'  , this.href)"  class="btn btn-danger" href="/delete_product/<?php echo e($categorys->id); ?>">Delete</a>  </td>
   
   
    </tr>

  <?php     $count++  ?>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
  </tbody>
</table>

<?php echo e($category->links()); ?>	

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/admin_folder/list_product.blade.php ENDPATH**/ ?>