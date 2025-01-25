@extends('admin_dashboar')

@section('contenth')


<div>

<a  class="btn btn-primary"  href="/add_category">Add Category </a>

	
	<h2> Category List  </h2>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">status</th>
      <!--<th scope="col">Category</th> -->
      <!--<th scope="col">Sub Category</th>-->
      <th scope="col">Picture</th>
      <th scope="col">Action</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->name  }}</td>
      <td>status</td>
      
      <!---
      <td>{{ $categorys->parent  }}</td>
      
      <td>{{ $categorys->sub_parent  }}</td>
      
      ---->
      
      
      <td><a  href="{{ asset('category2/'.$categorys->picture) }}">  {{ $categorys->picture_real_name  }}  </a>  </td>
      
     
		<td><a  class="btn btn-primary"  href="/edit_category/{{ $categorys->id  }}">  Edit  </a>      </td>
   
   
   <td> <a   onClick="return confirmAlert('Delete category({{$categorys->name}})' , this.href)"  class="btn btn-danger" href="/delete_category/{{ $categorys->id  }}">Delete</a>   </td>
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>
{{$category->links()}}
</div>


@endsection