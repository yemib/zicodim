@extends('admin_dashboar')
@section('contenth')	

<div  class="">


<a  href="/list_icons">  <button   class="btn btn-primary">  List Portfolio  </button>  </a>
	
	<h2>  Add  Portfolio  Images  </h2>
	
<form    id="upload_slider"   method="post"   action="/slider_store"   enctype="multipart/form-data">
	
	{{ csrf_field() }}
		
<input  style="display: none"  onChange="upoad_file(event,'upload_slider','progress_id' , 'message_id', 'picture' , '/icon_store' , 'addind_content')"     id="picture"   type="file"   name="picture"   />
		
<label  class="btn btn-primary"    for="picture"> UPLOAD PICTURE   </label>
		
</form>

	
</div>

<div  id="progress_id">   </div>
<div  id="message_id">   </div>
<div  id="addind_content">   </div>
@endsection



