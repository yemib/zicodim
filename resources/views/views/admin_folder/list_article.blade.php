@extends('admin_dashboar')

@section('contenth')
<p>  <a href="/article/create"   class="btn btn-primary"> Add Article  </a>   </p>



<h2>     Articles    </h2>
<?php    
use App\article_content;

if(session('admin')){  
	
		
		$category =article_content::orderBy('id','desc')->paginate(1); 
	
}else{
	
	
}
?>

<div>
 @foreach($category as $categorys)  
 
<h2  align="center">   {!!  $categorys->subject  !!}  </h2>



	{!!  $categorys->message   !!}
		
		
		
<div   class="col-sm-12">
		<a  href="/article/{{ $categorys->id }}/edit">     <button  class="btn btn-primary">    Edit </button>  </a>
       
       &nbsp;
       &nbsp;
       &nbsp;
      
        
         
        <form   style="display: inline" method="post"    action="/article/{{ $categorys->id }}">

        <?php    echo(csrf_field()) ?>
        
        <button  class="btn btn-danger">    Delete </button>
          
        
          
          <input    name="_method"    value="delete"   type="hidden" />
           </form>     
    
 
 </div>
 
 @endforeach 






</div>

{{  $category->links() }}	

@endsection