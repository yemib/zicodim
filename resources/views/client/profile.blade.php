
@extends('client')

<?php   

use App\client;

$client  = client::where('id',  session('client')['id'])->first();


?>

@section('client_extension')

	<div  class="acct_info">
	
		<h3>Account information</h3>
		
			<div  class="col-sm-6">
				
				<form   method="post"  action="/profile_edit"  > 
				
			
				
				{{ csrf_field() }}
					
			<p>	
			<label> Name  </label>
				
			<input    value="{{$client->name}}" class="form-control"  name="name"/>
				
				</p>
				
				
				<p>
					<label> Email Address  </label>
				<input   value="{{$client->email}}"    readonly class="form-control"  name="email"/>
				
				</p>
				
			
				
			
			</div>
			
			
	
		
			
			<div  class="col-sm-6">
						
			<p>	<label> Address  </label>
				
				<input value="{{$client->home_address}}"  class="form-control"  name="home_address"/>
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



