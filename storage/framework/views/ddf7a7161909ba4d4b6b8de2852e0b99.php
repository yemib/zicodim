<?php $__env->startSection('content'); ?>



<?php 


use App\article_content;

	
	if(isset($_GET['id'])) {
		
	
		
		$home_content  =article_content::where('id' , $_GET['id'])->orderBy('id', 'desc')->paginate(1); 
		
	} else{ 
	
		$home_content  =article_content::orderBy('id', 'desc')->paginate(1); 
	
	
	}
	
	// this is only for pagination period okay  

$home_pagination  =article_content::orderBy('id', 'desc')->paginate(1); 










$listy =article_content::inRandomOrder()->take(10)->get();

?>




<div  class="container"   id="space_up"  >



<div  class="row">

<div   class="col-sm-12   animated fadeInDownBig"   style="overflow: auto">





<?php $__currentLoopData = $home_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home_contents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




<h1 align="center"  class="text_color"><?php echo $home_contents->subject; ?></h1>




<?php echo $home_contents->message; ?>


	
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
	
	
	
	<br/>
	<br/>
	
	 <h2   class="text_color">  Topics    </h2>
	
	
	
	<?php $__currentLoopData = $listy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	
 	
<a  href="/posts?id=<?php echo e($list_topic->id); ?>">    <p><?php echo $list_topic->subject; ?> </p>  </a>
	
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
	
	
	
	
	
	
	
	
	
	
	
	<div   style="">  
	<?php echo e($home_pagination->links()); ?>

	
	</div>
	
	
	
	
	
	
</div>
	
	
	
	
	
	
</div>
	
	
	
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/posts.blade.php ENDPATH**/ ?>