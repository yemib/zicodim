@extends('admin_dashboar')

@section('contenth')
<?php    
use App\vendor_list;
$category = vendor_list::paginate(20);
?>

<div>
<h2> Vendor  List  </h2>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Store Name</th>
      <th scope="col">Store Url</th>
      <th scope="col">Description</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Title</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone </th>
      <th scope="col">Street </th>
      <th scope="col">State </th>
      <th scope="col">LGA </th>
      <th scope="col">City </th>
      <th scope="col">Action </th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->store_name  }}</td>
     
      
      <td>{{ $categorys->store_url  }}</td>
      <td>{{ $categorys->description  }}</td>
      <td>{{ $categorys->email   }}</td>
      <td>{{ $categorys->password  }}</td>
      <td>{{ $categorys->title  }}</td>
      <td>{{ $categorys->first_name  }}</td>
      <td>{{ $categorys->last_name  }}</td>
      <td>{{ $categorys->phone  }}</td>
      <td>{{ $categorys->str_add  }}</td>
      <td>{{ $categorys->state   }}</td>
      <td>{{ $categorys->lga    }}</td>
      <td>{{ $categorys->city    }}</td>
      
		<td>
      <a  href="/delete_vendor/{{ $categorys->id  }}">Delete</a>   </td>
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>

{{  $category->links() }}	

</div>


@endsection