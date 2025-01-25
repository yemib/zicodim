		
		
	
		  <p class="lead"> <span   onClick="$('.resetp').toggle(1000)"  style="cursor: pointer"> Forgot Login Details ? Reset  </span> </p>
   

 <div  class="resetp"  style="display: none">
           
            <!---    ---->
          
          <!--onSubmit="change_password_email(event,'/recover_password', 'recover_passwordtt','but_change')"     -->
            
             
  <form   id="recover_passwordtt"  onSubmit="change_password_email(event,'/recover_password', 'recover_passwordtt','but_change')"    action="/recover_password"   method="POST">


<?php echo e(csrf_field()); ?>



<div class="form-group "  >
                <label class="sr-only" for="emailreset">E-mail Address Or Phone Number: </label>
            
            
        
            <input   required id="emailreset"   type="text" name="email"   placeholder="Email Address Or Phone Number"    class="form-control" />
            
           </div>
           





<input    id="but_change"   class="btn btn-success" type="submit" name="ForgotPassword" value="Request Reset" />


<span   onClick="$('.resetp').hide(300)"  class="btn btn-danger" id="cancel" style="cursor: pointer">CANCEL</span>

<p  > <strong   id="display_output"> </strong> </p>


</form>
      
   </div>   
		 
			  
			  	
	
	
<?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/forget_password.blade.php ENDPATH**/ ?>