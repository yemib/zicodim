@if(!session('client'))
<script>  
window.location='/'
</script>
@endif
@extends('layouts.index')

@section('content')
<div   class="container"  style="margin-top: 150px">

<div  class="row" >

<div  class=""  id="space_up"  >   

	
<div  id="client_extra_bar"  style="background: rgba(255,255,255,1.00)"  class="col-sm-3">
	
	
	<div>
	<p>
	<h3>	<strong>My Profile</strong>   </h3>
	
	
 <a  href="/account_profile">  	Account Information  </a>
	
	<br/>
	<br/>
		<a  href="/client_saved">	Saved Items </a>
	</p>	
<hr/>
	
	<p>
	<h3><a  href="/my_order">  	<strong>My Orders</strong>   </a></h3>
	
	
	<br/>

		
	</p>
			
	
	
		
	</div>
	
	
	
	
</div>



	
		<div  class="col-sm-9">
		
	
		
		@yield('client_extension')
		
			
		</div>	
		
		</div>
		
<div  class="col-sm-12"> 
	<br/>
	<br/>
	</div>
		
		
		
			
</div>
	
	
	
</div>




@endsection