
@extends('layouts.index')

@section('content')

<div  class="container"   id="space_up">  
<div  class="row">

<div  class="col-sm-6  col-xs-offset-2">
	
	
	
		@if(session('error'))
	
	<label  class="text-danger  bg-danger"> {{session('error')}}   </label>
	@endif
	
	
	<h2> Vendor Log In </h2>
	<form   method="post"  action=""  >
	
	
	{{csrf_field()}}
	

	
		<p>
		<label> Username  </label>
		<input   type="email"   name="username"   class="form-control"/></p>
		
		
		<p>
		<label> password  </label>
		<input   type="password"   name="password"   class="form-control"/>  </p>
		
		
		<br/>
		
		
		<input   type="submit"   value="Log In"   class="btn cartbutton"/>
		
		
		<br/>
		
		
		
	</form>
	
	
	
			
		
	
		  <p class="lead"> <span   onClick="$('.resetp').toggle(1000)"  style="cursor: pointer"> Forgot Password ? Reset  </span> </p>
   

 <div  class="resetp"  style="display: none">
             
  <form action="login.php"   method="POST">

<div class="form-group "  >
                <label class="sr-only" for="emailreset">E-mail Address: </label>
            
            <input id="emailreset"   type="text" name="emailreset"   placeholder="Email Address"    class="form-control" />
            
           </div>
           





<input  class="btn btn-success" type="submit" name="ForgotPassword" value=" Request Reset" />


<span   onClick="$('.resetp').hide(300)"  class="btn btn-danger" id="cancel" style="cursor: pointer">CANCEL</span>



</form>
      
   </div>   
		 
			  
			  	
	
	

	
</div>
	
	
</div>


</div>






@endsection