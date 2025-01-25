@extends('admin_dashboar')

@section('contenth')
<p> 
 
   <a href="/article/create"   class="btn btn-primary"> Add Article  </a> 
   
     &nbsp;
     &nbsp;
     &nbsp;
   <a href="/article"   class="btn btn-primary"> Articles  </a>  

 
  
    </p>



<h2>       </h2>
<?php    
use App\article_content;

if(session('admin')){  
	
		
		$category =article_content::find($id); 
	
}else{
	
	
}





?>

<div>

 
<h2>   {!!  $category->subject  !!}  </h2>



	
	{!!  $category->message   !!}
	
<br/>
 
   
		<a  href="/article/{{ $category->id }}/edit">     <button  class="btn btn-primary">    Edit </button>  </a>
        
  
         &nbsp;
         &nbsp;
         &nbsp;
         &nbsp;
         
         
        <form  style="display: inline"  method="post"    action="/article/{{ $category->id }}">

        <?php    echo(csrf_field()) ?>
        
        <button  class="btn btn-danger">    Delete </button>
          
        
          
          <input    name="_method"    value="delete"   type="hidden" />
           </form>     
    
 







</div>



@endsection