@extends('layouts.index')

@section('content')



<?php 


use App\article_content;

	
	if(isset($_GET['id'])) {
		
	
		
		$home_content  =article_content::where('id' , $_GET['id'])->orderBy('id', 'desc')->paginate(1); 
		
	} else{ 
	
		$home_content  =article_content::orderBy('id', 'desc')->paginate(1); 
	
	
	}
	
	// this is only for pagination period okay  

$home_pagination  =article_content::orderBy('id', 'desc')->paginate(1); 










$listy =article_content::inRandomOrder()->take(10)->get();

?>




<div  class="container"   id="space_up"  >



<div  class="row">

<div   class="col-sm-12   animated fadeInDownBig"   style="overflow: auto">





@foreach($home_content  as $home_contents)




<h1 align="center"  class="text_color">{!!   $home_contents->subject  !!}</h1>




{!! $home_contents->message  !!}

	
	
	@endforeach
	
	
	
	
	<br/>
	<br/>
	
	 <h2   class="text_color">  Topics    </h2>
	
	
	
	@foreach($listy as $list_topic)
	
	
 	
<a  href="/posts?id={{ $list_topic->id }}">    <p>{!!  $list_topic->subject      !!} </p>  </a>
	
	
	@endforeach
	
	
	
	
	
	
	
	
	
	
	
	
	<div   style="">  
	{{$home_pagination->links() }}
	
	</div>
	
	
	
	
	
	
</div>
	
	
	
	
	
	
</div>
	
	
	
</div>




@endsection