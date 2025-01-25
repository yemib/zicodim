@extends('admin_dashboar')

@section('contenth')
<?php    
use App\add_product;
$category = add_product::paginate(20);
?>

<div  style="overflow: auto">



<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Photo</th>
  <!--    <th scope="col">Vendor Name</th>  -->
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->name  }}</td>
     
      
      <td>{{ $categorys->quantity  }}</td>
      <td>{{ $categorys->price  }}</td>
      <td>{{ $categorys->description  }}</td>
      <td>{{ $categorys->category  }}</td>
      <td>{{ $categorys->picture  }}</td>
     <!-- <td></td>  -->
      <td></td>
		<td>  <a  href="/edit_product/{{ $categorys->id  }}">      Edit  </a>  |  <a  onClick="return  confirmAlert('Delete order ?' , this.href)"  href="/delete_product/{{ $categorys->id  }}">Delete</a>   </td>
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>

{{  $category->links() }}	

</div>


@endsection