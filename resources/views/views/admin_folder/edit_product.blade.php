@extends('admin_dashboar')

@section('contenth')
@include('admin_folder.upload_style')
<?php 
use App\add_category;
$parent = add_category::all();

?>



	
<div  align="center">
<div  align="left"   style="padding: 20px  ; width: 80% ">


<p>  <a href="/list_product"   class="btn btn-primary"> List Product  </a>   </p>

<h2>  Edit Product  </h2>


	
	<form   id="Form1"  method="post"   action="/edit_product/{{  $edit_list->id   }}"    enctype="multipart/form-data" >
		
		 {{ csrf_field() }}
		 <label>Name</label>
		<input  required  value="@if(isset($edit_list)) {{ $edit_list->name }} @endif"  name="name"   class="form-control"  />
		
		
		<label>Quantity</label>
		<input   required  value="@if(isset($edit_list)) {{ $edit_list->quantity }} @endif"   name="quantity"   class="form-control"  />
		
			
				
						<label> Coupon Price</label>
		<input   required  value="@if(isset($edit_list)) {{ $edit_list->price }} @endif"  name="price"   class="form-control"  />			
		
			
				
						<label> Price</label>
		<input   required  value="@if(isset($edit_list)) {{ $edit_list->coupon_price }} @endif"  name="coupon_price"   class="form-control"  />			
		
			
				
	  <label>Description</label>
			
		<textarea    @if(session('admin'))id="article-ckeditor"  @endif required name="description"  class="form-control"  >@if(isset($edit_list)) {{ $edit_list->description }} @endif  </textarea>	
		
		<br/>
		
	<label>Warranty</label>
			
		<textarea  @if(session('admin'))id="article-ckeditor"  @endif  name="warranty"  class="form-control"  >@if(isset($edit_list)) {{ $edit_list->warranty }} @endif  </textarea>	
		
		<br/>
		
	<label>Return Policy</label>
			
		<textarea  @if(session('admin'))id="article-ckeditor"  @endif  name="policy"  class="form-control"  >@if(isset($edit_list)) {{ $edit_list->policy }} @endif  </textarea>	
		
		<br/>

		
		<label>Shipping Instruction</label>
			
		<textarea  @if(session('admin'))id="article-ckeditor"  @endif  name="shipping"  class="form-control"  >@if(isset($edit_list)) {{ $edit_list->shipping }} @endif</textarea>	



		<?php
                  
		$label  =  "Upload  Image";
		$name  = "pictures";

		global  $data  ;

		$data  =   $edit_list->picture; 

		imagecontainer($label,  $name,  $multiple =  true, 1 , $required = " ");
		?>

		
   <div  class="col-sm-12"> 		
		
  
		
		<label>  <strong>Category</strong>  </label>
		
		<select    name="category"   class="form-control"  >
		
		<?php  $get_cat  =  App\add_category::find($edit_list->category); ?>
			
		@if(isset( $get_cat->id))   <option  value="{{ $get_cat->id}}">  {{  $get_cat->name }}  </option> @endif
				
				@foreach ($parent as $parent)

		<option  value="{{  $parent->id }} ">  	{{  $parent->name }}  </option>
					
					
		@endforeach	
			
			
		</select>
			
		
		
		<br/>
		
		
		@if(session('admin'))
		
 <label  class="btn btn-sm btn-primary" for="checkpublic">  		
	<input id="checkpublic"  <?php   if($edit_list->status=='public') { echo('checked ');  } ?>  
	   type="checkbox"  name="status"    value="public"/>  &nbsp; <span style="display: inline-block; margin-top:12px ">  Make Public  </span> </label>
		
		@endif
		
		
		
		
		<br/>
		
		
		<input  <?php   if($edit_list->pick_up_available=='yes') { echo('checked ');  } ?>     type="hidden"  name="pickup"    value="yes"/> <!-- Pick Up Available  -->
		
		
		
		<br/>
		
		 
	


	
	


			
{{-- <input    onChange=" upoad_file(event,'upload_form','progress_id' , 'message_id', 'file-input' , 
'/update_product_image/{{ $edit_list->id }}', 'addind_content')"   
style="display: none"  type="file"   name="picture"     id="file-input"     />   --}}

		  
	{{--     <div    id="preview"
		
		style="  @if(isset($edit_list)) background-image:url('  {{ asset ( 'products/'.$edit_list->picture )}}') @endif" 
			class="img_container">   </div>
	    
	    
	    <p   id="progress_id">   </p>
	    <p   id="message_id">   </p>
	    
		
		<label        for="file-input"  class="btn btn-primary">  Change Image   </label> --}}
		<div id="uploadingform1">
	<input    class="btn btn-primary"  type="Submit"  value="Save"  />

		</div>
   </div>
	</form>
	</div>
	
</div>


   
@include('admin_folder.upload_script')
@endsection