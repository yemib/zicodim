
   

   @extends('layouts.index')

@section('content')
   
   <div class="container "   id="space_up"  style="margin-top: 150px">
   
   
   @include('search_bar')
   <div class="clear"></div>
   
    @if(isset($select))
       
        <h3> Total Result  :  {{ count($select)}} </h3>
   
@else
  
    @endif 
    
    
    <div  class="col-sm-12"> 
    
    @include('layouts.category_product')
          </div>
          
          
          <div  style=""  class="col-sm-12"></div>
          
    <br/>
    
    	  @include('pagination.default', ['paginator' => $select])
    
</div>




@endsection