@extends('admin_dashboar')

@section('contenth')
<?php     
use App\user_admin;
$category = user_admin::paginate(40);

?>

<div>
	
<a  href="/add_user">	<button  class="btn btn-primary">  Add Admin  </button> </a>
	<h2>Admin List   </h2>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php  
	  $count = 1 ;
	  $second_display = 1 ;
	  ?>
  
  
  
   @foreach($category as $categorys)
   @if($second_display  > 1)
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->name  }}</td>

      
      <td>{{ $categorys->username  }}</td>
      
      <td>{{ $categorys->password  }}</td>
      
    
     
		<td><a  href="/edit_user/{{ $categorys->id  }}">  Edit </a>  |  <a onClick="return confirmAlert('Delete User ? ' , this.href)"  href="/delete_user/{{ $categorys->id  }}">Delete</a>   </td>
    </tr>
    <?php   $count++ ; ?>
@endif
  <?php  
	  
	 $second_display ++ 
	  
	  ?>
  
  @endforeach

  </tbody>
</table>
{{$category->links()}}
</div>

@endsection