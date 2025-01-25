<?php    use App\saved_item; ?>

  <div  style="position: relative" class="card--content">
  
  
  
<p  align="right">   

 
  <?php if(session('client') ): ?>
<!---  check if already in the database before --->

<?php   $checking =  saved_item::where('product_id'  ,$product1->id )->where('email' , session('client')['id'] )->first();   ?>

<?php if(!isset($checking->id) ): ?>
<span  class="desktopmenu">
<span    style="background:orange; cursor: pointer"  class="badge"   id="saved<?php echo e($product1->id); ?>" >
 <span   style="color: rgba(255,255,255,1.00)" onClick="saved_send('/save_item/<?php echo e($product1->id); ?>'  , 'saved<?php echo e($product1->id); ?>')"  class="glyphicon glyphicon-heart">   </span> 
 </span>
 
 </span>
 
 <?php endif; ?>
 
   <?php endif; ?>  
   
     </p>
  
  <a  style="color: black  ; text-decoration: none"  href="/product/<?php echo e($product1->id); ?>"> 
    
    
     <div  class="des_text">
  <strong> <?php echo e($product1->name); ?></strong>
   
	  </div>

    <?php   //get  the
    
    $picture  =  json_decode($product1->picture ,  true);
    ?>
  
  <div      data-src="<?php echo e($picture[0]['new_name']); ?>"
    
    style=""  class="lazy each_image_display    each_image_display<?php echo e($product1->id); ?>">
   
   
    
   </div>
   
   
    <script>  
	 
$('.each_image_display<?php echo e($product1->id); ?>').load( $('.img_load_b<?php echo e($product1->id); ?>').hide()  );

</script>
   
   <div  class="des_text">
   <?php echo $product1->description; ?>

   
   </div>

 
  <hr   class="desktopmenu"  />
  
  
  
   
   
   	<p   style="display: inline-block" align="left">	<strong   class="price_size" style="" >&#x20A6;<?php echo e(number_format($product1->price)); ?></strong> </p>
	  		
	  		
	  	
	  			<?php if( $product1->coupon_price !=0): ?>
	  	<p  style="display: inline-block; "  align="right">	<strong    id="second_price" style="text-decoration: line-through  ; color:#9b9b9b  ">&#x20A6;<?php echo e(number_format($product1->coupon_price)); ?></strong> </p>
	  		<?php endif; ?>
	  	

   
   

   
  
  </a>
  
  
   <div  class=""  style="position: absolute ; bottom: 0px  ;left: 0px; width: 100%  ; overflow: hidden">
 <button    onClick='side_cart("/cart/addItem/<?php echo e($product1->id); ?>/static")'class=" btn cartbutton "> <strong>  Add To Cart </strong>  </button>
   
</div>
  
  </div>
  <?php /**PATH G:\websites\Zicodim\resources\views/layouts/container_product.blade.php ENDPATH**/ ?>