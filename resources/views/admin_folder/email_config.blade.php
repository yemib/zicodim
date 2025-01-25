@extends('admin_dashboar')
@section('contenth')	


<?php   
use App\email_config;


$contact_details  = email_config::first();
 ?> 
	
	<div  align="center">
		<div   align="left" >
		<h3>   Email Configuration </h3>
		
			
				<form  action=""   method="post">
				
				
				
					
					{{ csrf_field()  }}  
					
					<p>
					
					<label>Host  </label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->host  }}@endif"  placeholder="HOST" class="form-control" name="host"/>  </p>
					
					<p>
					<label>PORT  </label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->port  }}@endif"  placeholder="PORT" class="form-control"  name="port"/>
					</p>
					
					<p>
					<label>EMAIL</label>
					<input    value="@if(isset($contact_details->id)){{$contact_details->email  }}@endif" placeholder="Email"  class="form-control" name="email"/>
							</p>
							
									
										<p>			<label>PASSWORD</label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->password  }}@endif"  placeholder="PASSWORD"  class="form-control" name="password"  type=" "/>
					</p>
					
					
					<input   class="btn btn-primary"  type="submit"   value="Submit"  />
			
					
				</form>	


		
			
		</div>
		
	</div>
	




@endsection