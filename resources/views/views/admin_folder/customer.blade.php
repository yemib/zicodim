@extends('admin_dashboar')

@section('contenth')
<?php  

use App\client;

$category = client::paginate(20);


?>

<div>

<h2>   Customer List  </h2>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name </th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      
    
      <th scope="col">Action</th>
      <th scope="col"> <span  class="text-danger"> Delete  </span></th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->first_name   }}</td>
     
      
      <td>{{ $categorys->last_name  }}</td>
      
      <td>{{ $categorys->email   }}</td>
      <td>{{ $categorys->phone   }}</td>
      <td>{{ $categorys->password  }}</td>
  
		<td> 
		
		 <a class="btn btn-primary"  href="/customer_signing/{{  $categorys->email }}"> Sign in  </a>
   
       </td>
       
       <td>
       
         <a onClick="return confirmAlert('Delete User ({{$categorys->first_name}}) ? ' ,  this.href)"   class="btn btn-danger" href="/delete_customer/{{ $categorys->id  }}">Delete</a>  

       </td>
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>

{{  $category->links() }}	

</div>


@endsection