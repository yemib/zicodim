  <?php    use App\saved_item; ?>

  	<?php if(count($select)  > 0 ): ?>

	  	<?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  	
	  	<div  data-aos="fade-up"  class="my-sm-3"    style="" >
	  	
	  	<div style="position: relative"   id="product_container">
	  	
	  		<p  align="right">
	  		
	  		  <?php if(session('client') ): ?>
<!---  check if already in the database before --->

<?php   $checking =  saved_item::where('product_id'  ,$selects->id )->where('email' , session('client')['id'] )->first();   ?>

<?php if(!isset($checking->id)  ): ?>
<span  class="desktopmenu">
<span   style="background:orange; cursor: pointer"  class="badge"   id="saved<?php echo e($selects->id); ?>" >
 <span   style="color: rgba(255,255,255,1.00)" onClick="saved_send('/save_item/<?php echo e($selects->id); ?>'  , 'saved<?php echo e($selects->id); ?>')"  class="glyphicon glyphicon-heart">   </span> 
 </span>
 </span>
 <?php endif; ?>
 
   <?php endif; ?>  
	  		 
	  		 </p>
	  		
	  		
	  		<a  style="text-decoration:none; color: 
	  		rgba(0,0,0,1.00)" href="/product/<?php echo e($selects->id); ?>">
	  		
	  		  <div  class="des_text">
  <strong> <?php echo e($selects->name); ?></strong>
   
	  </div>

	  
	  <?php 
	  $image =  json_decode($selects->picture ,  true); 
	 
	 ?>
	  		<div    data-src="<?php echo e(asset($image[0]['new_name'])); ?>"       class="lazy  each_image_display  each_image_display<?php echo e($selects->id); ?>">
	  		
	  		
	  			
	  			
	  			
	  		</div>
	  		
  		      <script>  
	 
$('.each_image_display<?php echo e($selects->id); ?>').load( $('.img_load_b<?php echo e($selects->id); ?>').hide()  );

</script>
  		   
	  		   <div  class="des_text">
	  		  
   <?php echo $selects->description; ?>

   
   </div>
	  		
	 
	  	
	  		


	  	
	  		 
	  		
	  		</a>
	  			
  			    <div  class=""  style="position: absolute ; bottom: 0px  ;left: 0px; width: 100%  ; overflow: hidden">
	  			   
 <button  onClick='side_cart("/cart/addItem/<?php echo e($selects->id); ?>/static")'class=" btn cartbutton "> <strong>  Add To Cart </strong>  </button>
   
			</div>
	  			
	  		</div>
	  		
	  	</div>
	  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  	
	  	<?php else: ?>
	  	
	  	<div  align="center"> 
	  	
	  	      
	  	<div   class="col-sm-6" style="margin-top: 30px">
	  	
	  	<div  style="background-color: rgba(255,255,255,1.00); border-radius: 10px ; padding: 100px">
	  	
	
	  	
			<h2>     	<svg height="50" viewBox="0 0 17 15" width="50" xmlns="http://www.w3.org/2000/svg" class="" name="cart">
  
  <path d="M15.814 12.856a2.144 2.144 0 1 0-4.287 0 2.144 2.144 0 0 0 4.287 0zm-2.791 0a.646.646 0 1 1 1.288 0 .646.646 0 0 1-1.286 0h-.002zm2.438-10.143V2.71a1.498 1.498 0 0 1 1.454 1.857l-1.022 4.14a1.872 1.872 0 0 1-1.818 1.424H6.482c-.867 0-1.62-.593-1.822-1.436L3.003 1.784a.374.374 0 0 0-.363-.286H.749A.749.749 0 0 1 .749 0h1.889c.866 0 1.62.594 1.822 1.436l1.656 6.912c.041.168.191.286.364.287h7.595a.374.374 0 0 0 .363-.285l1.023-4.14H9.74a.749.749 0 1 1 0-1.497h5.72zM6.403 15a2.144 2.144 0 1 1 0-4.287 2.144 2.144 0 0 1 0 4.287zm0-2.791v.001a.646.646 0 1 0 0-.002z" fill="orange" fill-rule="nonzero"></path>
  
  
  </svg>	No Product  </h2>
	  		
	  		
	  	</div>
	  	<br/>
	  	<br/>
	  	<br/>
	  		
	  				
	  	</div>
	  	
	  	</div>
	  	
	  	<?php endif; ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/layouts/category_product.blade.php ENDPATH**/ ?>