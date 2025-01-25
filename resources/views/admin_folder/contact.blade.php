@extends('admin_dashboar')
@section('contenth')	


<?php   
use App\contact_detail;


$contact_details  = contact_detail::first();
 ?> 
	
	<div  align="center">
		<div   align="left" >
		
			
				<form  action="/contact_details"   method="post">
					
					{{ csrf_field()  }}  
					
					<p>
					
					<label>FACEBOOK LINK  </label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->facebook  }}@endif"  placeholder="FACEBOOK LINK" class="form-control" name="facebook"/>  </p>
					
					<p>
					<label>TWITTER LINK  </label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->twitter  }}@endif"  placeholder="TWITTER LINK" class="form-control"  name="twitter"/>
					</p>
					<p>
					<label>SUPPORT LINE</label>
					<input    value="@if(isset($contact_details->id)){{$contact_details->support  }}@endif" placeholder="SUPPORT LINE"  class="form-control" name="support"/>
							</p>
							
										<p>			<label>WHATAPP NUMBER</label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->whatapp  }}@endif"  placeholder="WHATAPP NUMBER"  class="form-control" name="whatapp"/>
					</p>
					
					
					<p>
					<label>INSTAGRAM</label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->instagram  }}@endif"  placeholder="INSTAGRAM"  class="form-control" name="instagram"/>
					</p>
					
							<p>
					<label>EMAIL ADDRESS</label>
					<input   value="@if(isset($contact_details->id)){{$contact_details->email  }}@endif"  placeholder="EMAIL ADDRESS"  class="form-control" name="email"/>
					</p>
					

					<p>
						<label>Office Address</label>
						
						<textarea  placeholder="Office Address" class="form-control"  name="address"> @if(isset($contact_details->id)){{$contact_details->address  }}@endif</textarea>
						
						</p>


					<p  style="display: none">
					<label>tawk code</label>
					
					<textarea  placeholder="tawk code" class="form-control"  name="tawk"> @if(isset($contact_details->id)){{$contact_details->tawk  }}@endif</textarea>
					
					</p>
					<input   class="btn btn-primary"  type="submit"   value="Submit"  />
			
					
				</form>	


		
			
		</div>
		
	</div>
	




@endsection