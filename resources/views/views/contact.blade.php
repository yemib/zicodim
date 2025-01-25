@extends('layouts.index')

@section('content')



<?php   use App\page_content;

$home_content  =page_content::where('page' , 'contact')->first(); 
?>




<div  class="container"   id="space_up"  >



<div  class="row">

<div   class="col-sm-12">
{!! $home_content->content  !!}

	


		
				
</div>
	
	
</div>
	
	
	
</div>




@endsection