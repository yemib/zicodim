
@extends('layouts.index')

@section('content')
<div class="with-sidebar-wrapper">
		
		<section id="content-section-2" >


<div  class="container"   id="space_up"  style="margin-top: 200px; ">  
<div  class="row"  >

<div  class="col-sm-6  "  style="margin: auto !important ">
	
	
	
		@if(session('error'))
	
	<label  class="text-danger  bg-danger"> {{session('error')}}   </label>
	@endif
	
	
	<h2> Admin Log In </h2>
	<form   method="post"  action=""  >
	
	
	{{csrf_field()}}
	

	
		<p>
		<label> Username  </label>
		<input   type=""   name="username"   class="form-control"/></p>
		
		
		<p>
		<label> password  </label>
		<input   type="password"   name="password"   class="form-control"/>  </p>
		
		
		<br/>
		
		
		<input   type="submit"  value="LogIn"   class="btn cartbutton"/>
		
		
		<br/>
		
	
		
	</form>
	
</div>
	
	
</div>


</div>


	</section>

</div>



@endsection