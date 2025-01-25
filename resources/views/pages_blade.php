@extends('layouts.index')


@section('content')
<?php  

use App\pages;



$select_from  = pages::Where('page', $page)->first();

?>

<div   class="container">  

<div   class="row"> 
         
         
      {{ $select_from->content    }}
      
      
        </div> 

      </div>








@endsection