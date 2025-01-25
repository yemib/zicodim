@extends('admin_dashboar')
@section('contenth')	


<?php 

use App\banner1; 

$logo = banner1::first();

?>


<div  class="">



	
	<h2>  Change  banner1  </h2>
	
<form    id="upload_slider"   method="post"   action="/logo"   enctype="multipart/form-data">
	
	{{ csrf_field() }}
		
<input  style="display: none"  onChange="upoad_file(event,'upload_slider','progress_id' , 'message_id', 'picture' , '/banner1' , 'addind_content')"     id="picture"   type="file"   name="picture"   />
		
<label  class="btn btn-primary"    for="picture">CHANGE  BANNER  </label>
		
		
</form>

	
</div>

<div  id="progress_id">   </div>

<div  id="message_id">   </div>



<div   class=""   style="" id="addind_content"> <img   height="100"   width="100"   src="{{ asset('slider/'.$logo->picture )   }}" />   </div>



<p>
<br/>
<br/>

<button  class="btn btn-primary">   Hide Banner  </button>


</p>



@endsection



