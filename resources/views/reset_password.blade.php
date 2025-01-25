@extends('layouts.index')

@section('content')



<div  id="space_up"   style="margin-top: 150px">

<div   class="container">
	
	<div   class="row">  
	<div   align="left"  >  
	<div    id="signup_container">

<form action="" method="POST">

{{    csrf_field()  }}


  <p>
  
 <label> E-mail Address  </label>
  
  
  <input  required   placeholder="Email Address"  class="form-control"  name="email"  />
  </p>
  <p>
   <br />
    
   <label> New Password  </label>
    
     
       <input   required class="form-control" type="password" name="password" size="20" />
  </p>
  
  <p>
    
   <label> Confirm Password   </label>
    
    
    <input   required  class="form-control" type="password" name="confirmpassword" size="20" />
    <br />
    
    
    <input type="hidden" name="q" value="{{ $q }}" />
    
    
    <input  class="btn btn-success" type="submit" name="ResetPasswordForm" value=" Reset Password " />
    
    
  </p>
</form>


</div>
</div>
</div>
</div>

</div>

@endsection