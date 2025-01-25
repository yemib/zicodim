@extends('admin_dashboar')

@section('contenth')
<?php    
use App\icons;
$category = icons::paginate(20);
?>

<div>

<a  href="/iconses">  <button  class="btn btn-primary">  Add Portfolio  </button>  </a>

<h2>  List Porfolio </h2>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">view</th>
      
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->real_name  }}</td>
     
      <td> <a   target="new"  href="{{  asset('slider/'.$categorys->picture)  }}">     {{ $categorys->real_name  }}   </a></td>
     <td>
		 <a  onClick="return confirmAlert('Delete Image ? ' , this.href)"  href="/delete_icon/{{ $categorys->id  }}">  Delete  </a> 
		 
		     </td>
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>

{{  $category->links() }}	

</div>


@endsection