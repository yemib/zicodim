@extends('admin_dashboar')

@section('contenth')



<div>
	
	<form  method="post"   action="" >  
	{{  crsf_field() }}
	
	
	<input class="form-control"      name="name"/>
	
 <input class="form-control"   name="email"/>
	 
	 
	 
	 <input class="form-control"   name="password"/>
	 
	 
	
	 
	 
	 <input    type="submit"   value="Save" />
   
   
	   </form>
</div>





@section  