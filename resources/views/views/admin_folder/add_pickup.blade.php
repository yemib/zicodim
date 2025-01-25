@extends('admin_dashboar')

@section('contenth')
<div  class="col-sm-7">

<a   href="/list_pickup">  <button  class="btn btn-primary">  List Pickup </button>  </a>

<h2>  Add Pickup Address  </h2>

<form   method="post"    action="@if(isset($edit_pickup))/update_edit/{{$edit_pickup->id}}  @endif">
	
	{{ csrf_field() }}
	
	<label> Address </label>
	
	<textarea  required    name="address"   class="form-control">@if(isset($edit_pickup)) {{$edit_pickup->address}}  @endif </textarea>
	
	<br/>
	
	<label>    Delivery Price  </label>
	<input  required title="make sure no space between the figure" value="@if(isset($edit_pickup)) {{$edit_pickup->price}}  @endif"     name="price"   class="form-control" />  
	
	<br/>
	
	<input    type="submit"    value="Save"     class="btn btn-success"/>
	
</form>

</div>



@endsection