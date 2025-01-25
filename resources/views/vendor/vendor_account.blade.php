@extends('admin_dashboar')

@section('contenth')


<?php
use App\account_detail;

// 

$account_detail  = account_detail::where('vendor',  session('vendor'))->first();



?>
<div  class="col-sm-6">
	<form  method="post"   action="@if(isset($account_detail->id))/update_account  @else /account_detail @endif"    >
	
	
	{{csrf_field() }}
		
		<label> Account Name  </label>   
		
		
		<input  required  value="@if(isset($account_detail->id) ) {{$account_detail->account_name }}    @endif"   name="account_name" type="text"   class="form-control"  placeholder="Account Name">
		
		
		
	<label>	Bank Name  </label> 
		
		<input  required  value="@if(isset($account_detail->id)) {{$account_detail->bank_name }}  @endif"   name="bank_name" type="text"   class="form-control"  placeholder="Bank Name">
		
		
		
	<label>	Bank Account Number   </label> 
		
	<input required  value="@if(isset($account_detail->id) ) {{$account_detail->account_number }}    @endif"     name="account_number" type=""   class="form-control"  placeholder="Bank Account Number">
	
			
		<br/>
		
		
		
		<button class="btn btn-primary"> @if(isset($account_detail->id))  Update   @else Save   @endif    </button>
		
		
		
	</form>
	
	
	
	<div style="display: none"  class="password_provide">
	
	<br/>
	<br/>
	
	<label   class="text-info"> Provide Password Before You Can Change Your  Bank Details   </label>
	
		<form   action="checkpassword" method="post"> 
		
		{{csrf_field() }}
	
		<input  class="form-control"    type="password"   name="password"/>
			<br/>

	
	
	<button  class="btn btn-primary">  Submit </button>
		</form>
		
		
		
		@if(isset($response)) 
		
		<script>   
		alert("{{$response}}" ); 
			
			
			if('{{$response}}' == 'Password Not Correct'){ 
				
			$('.password_provide').fadeIn();
			
			}
		</script>
		  
	      
		      @endif
		
	</div>
	
	
</div>




@endsection