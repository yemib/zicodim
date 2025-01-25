@extends('admin_dashboar')

@section('contenth')


<a  href="/list_user">    <button  class="btn btn-primary"> Admin List </button>  </a>

<h2>Add Admin </h2>


<div  align="center">
<div  align="left"   style="padding: 20px  ; width: 80% ">
		
@include('layouts.error_code')


	<form   method="post"   action="@if(isset($edit_list))/update_user/{{  $edit_list->id }}    @else /add_user @endif"    enctype="multipart/form-data" >
		
		 {{ csrf_field() }}
		 <label>Name</label>
		<input  required  value="@if(isset($edit_list)){{ $edit_list->name }}@endif"  name="name"   class="form-control"  />
		
		
		<label>Username</label>
		<input   type=""  required  value="@if(isset($edit_list)){{ $edit_list->username }}@endif"   name="username"   class="form-control"  />
		
		
									
		<label> Password</label>
		<input    type=""   value="@if(isset($edit_list)){{ $edit_list->password }}@endif"  name="password"   class="form-control"  />			
		
			@if(isset($edit_list))
		
		<input  class="btn btn-primary"  type="Submit"  value="Update"  />
		
		@else
		<input  class="btn btn-primary"  type="Submit"  value="Save"  />
		
		@endif

		
	</form>
	</div>
	
</div>



@endsection