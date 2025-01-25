@extends('admin_dashboar')
@section('contenth')	


<?php 

use App\logo; 

$logo = logo::first();

?>


<div  class="">



	
	<h2>  Change  Logo  </h2>
	
<form    id="upload_slider"   method="post"   action="/logo"   enctype="multipart/form-data">
	
	{{ csrf_field() }}
		
<input  style="display: none"  onChange="upoad_file(event,'upload_slider','progress_id' , 'message_id', 'picture' , '/logo' , 'addind_content')"     id="picture"   type="file"   name="picture"   />
		
<label  class="btn btn-primary"    for="picture">CHANGE  LOGO   </label>
		
		
</form>

	
</div>

<div  id="progress_id">   </div>

<div  id="message_id">   </div>



<div   class=""   style="" id="addind_content"> <img   height="100"   width="100"   src="{{ asset('slider/'.$logo->picture )   }}" />   </div>





@endsection



