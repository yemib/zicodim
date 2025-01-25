               
                   <form   onSubmit="$('#submitr').attr('type' , 'text'); $('#submitr').val('Loading...') " method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                   
                </div>
            </p>
            <input type="hidden" name="email" value="{{ session('client')['id'] }}"> {{-- required --}}
            
            <input type="hidden" name="orderID" value="345">
            
            <input type="hidden" name="amount" class="gtpay_tranx_amt"   value="<?php    echo   ($price * 100)  ?>"> {{-- required in kobo --}}
            
            
            <input type="hidden" name="quantity" value="3">
            
            <input type="hidden" name="currency" value="USD">
            
            
            
            
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


            <p>
            
            <h2> <input     style="font-weight: bolder"  
               type="submit"   value="Send Order"  
                 class="btn btn-success cartbutton"  id="submitr" />
                </h2>
             
         
              
        
            </p>
          </div>
        </div>
</form>