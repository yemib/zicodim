
<link   src="{{ asset('css/bootstrap.css') }}"    rel="stylesheet"       />



<?php    
         echo Form::open(['action' => ['my_controller@update' , $post->id], 'method' =>'POST'  ]);   ?>



<input   type=""  value="{{$post->title}}"  name="title" />

<textarea   name="body">   {{$post->body}}       </textarea>



<?php
 echo Form::hidden('_method' , 'PUT');

?>

<button> submit  </button>

<?php  
   echo Form::close();

?>


<?php    
         echo Form::open(['action' => ['my_controller@destroy' , $post->id], 'method' =>'POST'  ]);   ?>


<button >  Delete  </button>

<?php
 echo Form::hidden('_method' , 'DELETE');

?>


<?php  
   echo Form::close();

?>








 