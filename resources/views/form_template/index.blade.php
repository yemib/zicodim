
<link   src="{{ asset('css/bootstrap.css') }}"    rel="stylesheet"       />

<form   action="{{URL('res')}}"   method="POST">

<input type = "hidden" name = "_token" value = "uA4jibRPvExCBdLVOkKCf8uN9ulFzofSgb2c0qpZ">
<input   type=""  name="title" />
<textarea   name="body">          </textarea>






<button> submit  </button>







</form>




 <?php
         echo Form::open(['action'  => 'my_controller@store' , 'method'  =>  'POST' ]);
            echo Form::text('title',' ' , ['class' => 'form-control']);
            echo '<br/>';
            
            echo Form::textarea('body', ''  , ['class' => 'form-control'  , "id" => "article-editor"]);
            echo '<br/>';
     
     
            echo Form::file('image');
            echo '<br/>';
            
            echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
            echo '<br/>';
            
            echo Form::submit('Click Me!');
         echo Form::close();
      ?> 

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js">  </script>
<script>


CKEDITOR.replace('article-editor');
</script>