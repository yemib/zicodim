@extends('admin_dashboar')

@section('contenth')
<?php    
use App\pickup;




if(session('admin')){
	
$category = pickup::where('email', session('admin') )->paginate(50);	
	
}else{
	
	if(session('vendor')){  
	$category = pickup::where('email', session('vendor') )->paginate(50);  }
}



?>

<div>

<a  href="/add_pickup">  <button  class="btn btn-primary">  Add Pickup </button>  </a>

<h2>   Pickup  Addresses  </h2>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Address</th>
      
      <th scope="col">Price</th>
    
      
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->address  }}</td>
      <td>{{ $categorys->price }}</td>
     
    
     <td>
		<a   href="/edit_pickup/{{ $categorys->id }}">   Edit  </a>  | <a  onClick="return confirmAlert('Delete Address ({{ $categorys->address  }}) ?'  , this.href)"  href="/delete_pickup/{{ $categorys->id  }}">  Delete  </a>    
		 
		     </td>
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>

{{  $category->links() }}	

</div>


@endsection