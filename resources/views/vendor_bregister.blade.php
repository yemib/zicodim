
@extends('layouts.index')

@section('content')

<div   class="container">
	
	
	<div     id="space_up"  class="row">
	
	<div    class="breg_container"  style="background: rgba(255,255,255,1.00)">
		
	
	
	<div  class="col-sm-5"  style="overflow: auto">  
	
	
	<img    src="{{ asset('images/sell-on-aremu.png')  }}"/>
	
	</div>
	
	
	<div  class="col-sm-7">
		
	
	  <h1> Grow your business online </h1>
	  
	  
	  
	  <p> Do you want to reach the ends of the market world with your products/goods? If yes, then you have gotten to a platform to showcase them. At {{config('app.name')}}, we are dedicated to showcasing products/goods to the market world (End users).  </p>
	  
	  
	    <div  class="col-sm-6">
<a  href="/vendor register">  
<button   class="btn  button_reg  btn-success   cartbutton"> <h3> Register Now   </h3>  </button></a>



 </div>
  	  
  	  
  	  
  	  
	  	  <div  class="col-sm-6">
<a  href="/vendor_signin">  
<button   class="btn  button_reg  btn-success  cartbutton"> <h3> Sign In   </h3>  </button></a>



 </div>
	  
	  
	  
	</div>
	
	
	</div>
	
		
	</div>
	
	
</div>






@endsection