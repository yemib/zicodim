@extends('layouts.index')
<?php  $cat  = App\add_category::find($category); ?>

@section('title'){{  $cat->name  }}@endsection

@section('content')

<!--- top  -->


<div class="with-sidebar-wrapper"  style="margin-top: 150px">
		
		<section id="content-section-2" >
		
		@include('search_bar')



@if(isset($cat->id))
<div   class="top_category  text_color"  id="product_up">  

 <h3>  {{  $cat->name  }} </h3>
 
 
   </div>


@endif

<div   class="container"  style="width: 100%">

	<div   class="row"   style="">
	
	
	  
	  
	  <div  id="filter"  class="col-sm-2">
	  	
	  <h3>Selected Filters </h3>
	  
	  <p> <strong>Price</strong> </p>
	  
	  <p><a   href="/category/{{$category}}/desc" class="btn cartbutton"> High   To Low  </a> </p>
	  <br/>
	  <br/>
		  <p> <a   href="/category/{{$category}}/asc" class=" btn cartbutton">Low  To High  </a> </p>
	 
	  
	  	
	  </div>
	  
	  
	  <div  class="col-sm-10"   style=" padding: 0px">
	  
	@include('layouts.category_product')
  	
  		<div   style=""  class="col-sm-12">	{{ $select->links()  }}  </div>
	  
	   
	  </div>
	  
	  
	  
	  
	  
	
	</div>	
	
	
	
	
	
</div>


	</section>
	
</div>

@endsection