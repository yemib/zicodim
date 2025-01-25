@extends('admin_dashboar')
@section('contenth')	


<?php   


use App\vendorper;


$contact_details  = vendorper::first();
 ?> 
	
	<div  align="center">
		<div   align="left" >
		
			
				<form  action="/vendor_percentage"   method="post">
					
					{{ csrf_field()  }}  
					
					<p>
					
					<label>PERCENTAGE  </label>
					
					<input  type=" "  style="width: 50%"   value="@if(isset($contact_details->id)) {{$contact_details->percentage  }}  @endif"  placeholder="VENDOR % DEDUCTION" class="form-control" name="percentage"/>  </p>
					
					</p>
					<input   class="btn btn-primary"  type="submit"   value="Submit"  />
			
					
				</form>	


		
			
		</div>
		
	</div>
	




@endsection