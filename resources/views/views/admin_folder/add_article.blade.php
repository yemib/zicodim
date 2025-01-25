@extends('admin_dashboar')
@section('contenth')
<a   href="/article"> <button  class="btn btn-primary">   List Post  </button> </a>
<h2>Add Post </h2>
<?php 
use App\article_content;

if(isset($id)){ 

$edit_list = article_content::find($id);  }


?>

<div  align="center">
<div  align="left"   style="padding: 2px ">
		


<?php
	
if(isset($id)){
		
		$link_to = '/article/'.$id;
		
	}else{
	$link_to = '/article';
	
}
	
	
	?>

	<form   method="post"   action="<?php echo($link_to)   ?>"    enctype="multipart/form-data" >
		
		 {{ csrf_field() }}
		 
		 @include('admin_folder/tools')
		 <label>TOPIC</label>
		 
		 
		<textarea   style="display:none"  id="topic_text" required  value=""  name="subject"   class="form-control"  >@if(isset($id)) {!! $edit_list->subject !!} @endif</textarea>
		
		
		<div   onDblClick="$('.tool_container').hide(500)"   onClick="$('.tool_container').show(500)"   style="height: 50px ; width: 60%" contenteditable="true"  class="textarea_article"   id="topic_div">
		@if(isset($id)) {!! $edit_list->subject !!}   @endif
		    </div>
		
		<br/>
		<br/>
		
		
		
		@if(isset($id))   
		
		 <input  name="_method"    value="PUT"   type="hidden" />
		  
		    @endif
		
		
		
	
		
		@include('admin_folder/tools')
		
		
		
			<h1> Content   </h1>
		
		<div  onDblClick="$('.tool_container').hide(500)"   onClick="$('.tool_container').show(500)" id="el"  contenteditable="true"     class="textarea_article preview"> @if(isset($id)) {!! $edit_list->message !!} @endif  </div>
		
		
		<textarea   style="display: none"  required id="tex" class=""  name="message">@if(isset($id)) {!! $edit_list->message !!} @endif</textarea>
		
		
<input  style="display: none"  type="file"   name="picture"     id="file-article"    class="file-article"   />  
	
		
		
		<br/>
		
		
		@if(isset($id))  
		<div style="position: relative ; z-index: 20000000000000000000" align="right">
		
		<input   onClick="acceptm('el' , 'tex'); acceptm('topic_div' , 'topic_text')"  onMouseOver="acceptm('el' , 'tex');acceptm('topic_div' , 'topic_text')"  class="btn btn-primary"  type="Submit"  value="Update"  />  </div>
		@else
		<div  style="position: relative ; z-index: 20000000000000"  align="right">
		<input   onClick="acceptm('el' , 'tex');acceptm('topic_div' , 'topic_text')"  onMouseOver="acceptm('el' , 'tex');acceptm('topic_div' , 'topic_text')"  class="btn btn-success"  type="Submit"  value="Save"  />
		
		</div>
		
		@endif
	</form>
	</div>
	
</div>



@endsection