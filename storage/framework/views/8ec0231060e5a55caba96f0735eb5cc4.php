

<?php $__env->startSection('title'); ?> Login <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

	<div class="with-sidebar-wrapper"   style="margin-top: 150px">
		
		<section id="content-section-2" >
		



<div  class="container" >

	<div    class="row">
		
		
<div >


<div  align="left"  class="col-sm-6"> <h3  class="text_color"> Login  </h3>  </div>
<div  align="right"   class="col-sm-6"> <h3> </h3>   </div>
 <hr/> 
<div  class="col-sm-12"   style="">  <hr/>  </div>


<div   style="padding: 20px"  >




<div   class="col-sm-6  login_desktop_margin"    style="margin: auto">

<form   method="post"   action="/login/client"  >

<?php echo e(csrf_field()); ?>


<p  align="left">
	Email Address 
<br/>

	<input  required   class="form-control"   name="email"/>
	
	</p>
	<br/>
	<div  align="left">
<div  align="left"  class="col-sm-6">Phone Number</div>

	
	<input  required  type="text"  class="form-control"   name="phone"/> 

	</div>
	
	
	<p>
		<br/>
		<br/>
		<br/>
		

	
	<input  style="background: #33b27b"   class=" btn  btn-success  form-control"  type="submit"  value="Login"/>	</p>
	
		</form>
		
		
<?php echo $__env->make('forget_password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
	
		
			
	<div  id=""   style="" class="signup_container_here">
	
	<a  href="/signup">
	<p    class="signup_press"  style="" align="left">
	
	<strong>Don't have an account? Sign Up</strong>
	
	</p>
	</a>
			
	</div>
	
		
			</div>	
</div>
	
	<!--- place the signup buuton here--->

	</div>
	
		
		
	</div>
	
</div>
		</section>
</div>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/login_sign_phone.blade.php ENDPATH**/ ?>