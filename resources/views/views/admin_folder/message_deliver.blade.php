@extends('admin_dashboar')
@section('contenth')	

<div>
<?php  
use App\message_deliver;
$update_pages  =message_deliver::first();   ?>
	@if(isset($success))
	
 <p   class="alert-success">	Successfull 
 
  <hr/>
    </p>
	
	@endif
	
</div>


	<div   style="width: 80%"  class="">
	
	 <h3>   Messages  </h3>
	 
	 <br/>
	 
		<form   method="post"   action=""  >
		
			{{ csrf_field() }}
			
		<label>  Order Created Message    </label>
			
			
			<textarea  id="" class="form-control"    name="content"  >{{   $update_pages->created_order  }}</textarea>
			
			<br/>
		
						
			<label>  Order Complete  Message    </label>
			
			<textarea  id="" class="form-control"    name="content"  >{{   $update_pages->complete_order  }}</textarea>
					<br/>		
															
			<label>  Order Cancel  Message    </label>
			
			<textarea  id="" class="form-control"    name="content"  >{{   $update_pages->cancel_order  }}</textarea>
			
			<br/>
			<input  class="btn btn-success"   type="submit"   value="Save" />
			
		</form>
		
		
		
	</div>
	



@endsection