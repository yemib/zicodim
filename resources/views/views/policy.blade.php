@extends('layouts.index')

@section('title')Privacy Policy @endsection
@section('content')



<?php   use App\page_content;

$home_content  =page_content::where('page' , 'privacy')->first(); 
?>




<div  class="container"   id="space_up"   style="margin-top: 150px"  >



<div  class="row">

<div   class="col-sm-12"   style="overflow: auto">

{!! $home_content->content  !!}

	
	
</div>
	
	
</div>
	
	
	
</div>




@endsection