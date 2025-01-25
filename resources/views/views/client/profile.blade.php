
@extends('client')

<?php   

use App\client;

$client  = client::where('id',  session('client')['id'] )->first();


?>

@section('client_extension')

	<div  class="acct_info">
	
		<h3>Account information</h3>
		
			<div  class="col-sm-6">
				
				<form   method="post"  action="/profile_edit"  > 
				
			
				
				{{ csrf_field() }}
					
			<p>	
			<label> First name  </label>
				
			<input    value="{{$client->first_name}}" class="form-control"  name="first_name"/>
				
				</p>
				
				
				<p>
					<label> Email Address  </label>
				<input   value="{{$client->email}}"    readonly class="form-control"  name="email"/>
				
				</p>
				
			
				
			
			</div>
			
			
			<div  class="col-sm-6">
						
			<p>	<label> Last name  </label>
				
				<input value="{{$client->last_name}}"  class="form-control"  name="last_name"/>
				</p>
				
				
				
			
				
				
			</div>
		
			
			<div  class="col-sm-6">
						
			<p>	<label> Address  </label>
				
				<input value="{{$client->home_address}}"  class="form-control"  name="home_address"/>
				</p>
				
				
				
			
				
				
			</div>
		
		
		
			<div  class="col-sm-6">
						
			<p>	<label>State  </label>
				
				<input value="{{$client->state}}"  class="form-control"  name="state"/>
				</p>
				
				
				
			
				
				
			</div>
		
		
			<div  class="col-sm-6">
						
			<p>	<label>Country  </label>
				
				<input value="{{$client->country}}"  class="form-control"  name="country"/>
				</p>
				
				
				
			
				
				
			</div>
		
		
	
		
		
		

		
		
			<div  class="col-sm-6">
						
			<p>	<label>Phone Number </label>
				
				<input value="{{$client->phone}}"  class="form-control"  name="phone"/>
				</p>
				
				
				
			
				
				
			</div>
			
			<div  class="col-sm-6">
						
			<p>	
				
				<input value="Update"  class="btn btn-primary"    type="submit" />
				</p>
				
				
			</div>
		
		
		</form>
		
		
		
			</div>

@endsection



