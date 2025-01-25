@extends('admin_dashboar')
@section('contenth')	

<div>
<?php  
use App\page_content;
$update_pages  =page_content::where('page' , $pages)->first();   ?>
	@if(isset($success))
	
 <p   class="alert-success">	Successfull 
 
  <hr/>
    </p>
	
	@endif
	
</div>


	<div   style="width: 80%"  class="">
	
	 <h3>     {{  $pages  }}   Page   Content </h3>
	 
	 <br/>
	 
		<form   method="post"   action="/pages/{{$pages}}"  >
		
			{{ csrf_field() }}
		
			
			<textarea  id="article-ckeditor" class="form-control"    name="content"  >{{   $update_pages->content}}
			</textarea>
			
			<br/>
			<input  class="btn btn-success"   type="submit"   value="Save" />
			
		</form>
		
		
		
	</div>
	



@endsection