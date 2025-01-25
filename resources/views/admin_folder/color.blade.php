@extends('admin_dashboar')
@section('contenth')	


<?php   
use App\color;


$contact_details  = color::first();
 ?> 
	
	<div  align="center">
		<div   align="left" >
		
			
				<form  action="/color"   method="post"> 
					
					{{ csrf_field()  }}  
					
					<p>
					
					<label>Background Color 1  </label>
					<input  style="width: 50%"  type="color"   value="@if(isset($contact_details->id)){{$contact_details->name1  }}@endif"  class="form-control" name="name1"/> 	
					
					   
					    
					      </p>
					
					
					
					
					
					
					<p>
					
					
					<label>Background Color  2  </label>
					<input    style="width: 50%"  type="color" value="@if(isset($contact_details->id)){{$contact_details->name2 }}@endif"   class="form-control"  name="name2"/>
					
					
					
					
					<label> Footer Color 1  </label>
					<input  style="width: 50%"  type="color"   value="@if(isset($contact_details->id)){{$contact_details->textcolor1  }}@endif"  class="form-control" name="textcolor1"/> 
					
					 
								
					<label>Footer Color  2  </label>
					<input    style="width: 50%"  type="color" value="@if(isset($contact_details->id)){{$contact_details->textcolor2 }}@endif"   class="form-control"  name="textcolor2"/>
					
					
					
					</p>
					
					
					
					<input   class="btn btn-primary"  type="submit"   value="Save"  />
			
					
				</form>	


		
			
		</div>
		
	</div>
	




@endsection