@extends('admin_dashboar')
@section('contenth')	


<?php 

use App\font; 

$logo = font::first();

?>


<div  class="">



	
	<h2>  Change  Font </h2>
	
<form    id="upload_slider"   method="post"   action="/font_change"   enctype="multipart/form-data">
	
	{{ csrf_field() }}
	
	
			
<label  class=""    for="picture"> UPLOAD CHANGE  FONT   </label>
	
		
<input   required  class="form-control" style="display: block"      id="picture"   type="file"   name="name"   />
	
	

	
	<br/>
	<br/>
	<br/>
	
	<button  class="btn btn-primary">  Save  </button>
		
		
</form>

	
</div>

<div  id="progress_id">   </div>

<div  id="message_id">   </div>



<div   class=""   style="" id=""> 
  <strong>{{ $logo->real_name }}</strong>
      </div>





@endsection



