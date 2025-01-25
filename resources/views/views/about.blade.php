@extends('layouts.index')

@section('title')About Us @endsection

@section('content')



<?php   use App\page_content;

$home_content  =page_content::where('page' , 'about')->first(); 
?>




<div  class="container"   id="space_up"   style="margin-top: 150px" >



<div  class="row">

<div   class="col-sm-12   animated fadeInDownBig"   style="overflow: auto">

<h1 align="center"  class="text_color">{{config('app.name')}}</h1>

{!! $home_content->content  !!}

	
	
</div>
	
	
</div>
	
	
	
</div>




@endsection