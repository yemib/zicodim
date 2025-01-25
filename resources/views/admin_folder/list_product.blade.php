@extends('admin_dashboar')

@section('contenth')
<p>  <a href="/add_product"   class="btn btn-primary"> Add Product  </a>   </p>



<h2>   @if(isset($vendor_list))  Vendor Product List    @else List Product   @endif  </h2>
<?php    
use App\add_product;

if(session('admin')){  
	
	
	if(isset($vendor_list)) {
		
		$category = add_product::where('email', '!='  ,'admin')->orderBy('id' , 'desc')->paginate(20); 
		
	}else{
		$category = add_product::where('email','admin')->orderBy('id' , 'desc')->paginate(20); 
		
	}





}else{
	
	if(session('vendor')){
		$category = add_product::where('email',session('vendor'))->orderBy('id' , 'desc')->paginate(20);
	}
}





?>

<div>



<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
   {{--    <th scope="col">Quantity</th>
      <th scope="col">Coupon Price</th>
      <th scope="col">Price</th> --}}
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Photo</th>
   <!--   <th scope="col">Vendor Name</th>  -->
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
      
          <th scope="col">@if(isset($vendor_list)) Vendor Email  @endif   </th>
      
      <th scope="col">@if(isset($vendor_list)) SignIn To Vendor   @endif   </th>
      
      
      <th scope="col">@if(session('admin'))  Change State   @endif   </th>
      
      
    <th scope="col"  class="text-danger">Delete</th>
      
      
      
    </tr>
  </thead>
  <tbody>

  <?php  $count = 1  ?>
   @foreach($category as $categorys)
   
    <tr>
      <th scope="row">{{   $count }}</th>
      <td>{{ $categorys->name  }}</td>
     
      
 {{--      <td>{{ $categorys->quantity  }}</td>
      <td>{{ $categorys->price  }}</td>
      <td>{{ $categorys->coupon_price  }}</td> --}}
      <td>   {!! $categorys->description  !!}  </td>
      <?php  $cat = App\add_category::find($categorys->category); ?>
      
      <td><div  class="des_text"> @if(isset($cat->id))  {{ $cat->name  }}  @endif</div> </td>
      
      <td>
        <?php   $picture  =  json_decode($categorys->picture  , true) ;
        
        
        
        ?>


        <a  href="{{$picture[0]['new_name']}}">  <div  class="lazy  cartimage"   data-src="{{$picture[0]['new_name']}}"    >  </div> </a> </td>
    <!--  <td>{{ $categorys->vendor_name }}</td>  -->
     
      <td>{{ $categorys->status }}</td>
		<td>  <a  class="btn btn-primary"  href="/edit_product/{{ $categorys->id  }}">      Edit  </a>   </td>
		
		
		
		    <td scope="col">@if(isset($vendor_list)) {{ $categorys->email  }}  @endif   </td>
      
      <td scope="col">@if(isset($vendor_list))  <a  href="/vendor/signin/{{ $categorys->email }}">  Signin    </a>   @endif   </td>
		
		
   <td>  <span  id="buton_container{{ $categorys->id }}">  @if(session('admin')) @if($categorys->status =='public') 
   
   
   <button    class="btn  cartbutton"  onClick="change_state('/made_private/{{ $categorys->id}}' , 'buton_container{{ $categorys->id }}')"  > Private  </button>  @else    
   
     <button   onClick="change_state('/made_public/{{ $categorys->id}}' , 'buton_container{{ $categorys->id }}')" class="btn  cartbutton"> Public  </button>
   
    
      
       
       
       @endif @endif  
       </span>  </td>
   
   <td>  <a onClick="return confirmAlert('Delete Product ({{ $categorys->name  }}) ?'  , this.href)"  class="btn btn-danger" href="/delete_product/{{ $categorys->id  }}">Delete</a>  </td>
   
   
    </tr>

  <?php     $count++  ?>
  
  @endforeach
  
  
  </tbody>
</table>

{{  $category->links() }}	

</div>


@endsection