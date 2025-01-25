
@extends('layouts.index')

@section('content')

<div  class="container">
<div  class="row"  id="space_up"  >	


	<div   class=""  align="center">   
	 
	  <div>
	    <div>
	      <div ng-controller="RegisterController as registerVm">
	        <h2>Create a Seller Account</h2>
	        <h4>Start selling on {{config('app.name')}} today</h4>
          </div>
        </div>
      </div>
      
      
      <div    align="left"  class="col-sm-6"  style="padding: 10px">
      
     
      <form  method="post"   action="">
    
      	 {{ csrf_field() }}
      	
      	<label>Store Name  </label>
      	<input    required  class="form-control"  placeholder="Store Name"  name="store_name"   />
      	<br/>
     	 
     	 
      <label>Description </label>
      	<textarea  class="form-control" name="description"></textarea>
      	<br/>
      	
      	<label> Email </label>
      	<input  type="email"  required placeholder="Email" class="form-control"  name="email"   />
      	<br/>
      	
      	<label> Password</label>
      	<input    type="password" required  class="form-control"  name="password"   />
      	<br/>
      	
      	    
	 
	 </div>
	
	<div  align="left"  class="col-sm-6">
   
   <label> Title </label>
      	
      	<input placeholder="Title" class="form-control"  name="title"   />
      	
      	<br/>
      	
      	
      	<label>First Name</label>
      	<input    required placeholder="First Name" class="form-control"  name="first_name"   />
      	<br/>
      	
      	<label> Last Name  </label>
      	<input  required  placeholder="Last Name" class="form-control"  name="last_name"   />
      	<br/>
      	<label>Phone Number </label>
      	<input  required  placeholder="Phone Number"  class="form-control"  name="phone"   />
      	<br/>
      	
      	
      	<label> Street Address </label>
      	<input   required  placeholder="Street Address" class="form-control"  name="str_add"   />
      	<br/>
      	
      	<div  class="col-sm-12"> 
      	<div       class="col-sm-3">  <label> State </label>
      	<input  required  placeholder="State"  class="form-control"  name="state"   />
      	</div>
      	<div   class="col-sm-3">  	<label>  LGA </label>
      	<input  required   placeholder="LGA" class="form-control"  name="lga"   />
      	</div>
      	<div   class="col-sm-3"><label> CITY </label>
      	<input   required  placeholder="CITY" class="form-control"  name="city"   /></div>
      	
      	
      	
      	<div  class="col-sm-6"> 
      	<br/>
      	  <input   type="submit"    class="form-control  btn btn-success  each_button  "  value="Submit" /></div>
       	
  
       </form>
     
        	
        	
         	<div  class="col-sm-7"> 
      	<br/>
     	  Already have an account  ?
     	<a href="/vendor_signin">
      	<strong>  <input   type="button"    class="form-control  btn btn-success  each_button  "  value="Login" /></strong>   </a></div>
      
     	  <br/>
     	
      	  </div>
      	
      	
      	
      	
      	
      	
		

	   </div>
	
	
	</div>
	
	
</div>
</div>
</div>
<div   style="height: 10px" >  </div>


@endsection