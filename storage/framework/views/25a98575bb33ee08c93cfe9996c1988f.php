               
                   <form   onSubmit="$('#submitr').attr('type' , 'text'); $('#submitr').val('Loading...') " method="POST" action="<?php echo e(route('pay')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                   
                </div>
            </p>
            <input type="hidden" name="email" value="<?php echo e(session('client')['id']); ?>"> 
            
            <input type="hidden" name="orderID" value="345">
            
            <input type="hidden" name="amount" class="gtpay_tranx_amt"   value="<?php    echo   ($price * 100)  ?>"> 
            
            
            <input type="hidden" name="quantity" value="3">
            
            <input type="hidden" name="currency" value="USD">
            
            
            
            
            <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
            
            <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
            
            <input type="hidden" name="key" value="<?php echo e(config('paystack.secretKey')); ?>"> 
            <?php echo e(csrf_field()); ?> 

             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 


            <p>
            
            <h2> <input     style="font-weight: bolder"  
               type="submit"   value="Send Order"  
                 class="btn btn-success cartbutton"  id="submitr" />
                </h2>
             
         
              
        
            </p>
          </div>
        </div>
</form><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/payapi.blade.php ENDPATH**/ ?>