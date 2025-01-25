@extends('layouts.index')

@section('title')
Home
@endsection

@section('content')
<?php
    
    use App\slider;
    use App\add_product;
    use App\page_content;
    use App\banner1;
    use App\banner2;
    use App\icons;
    use App\add_category;
    
    $icons = icons::all();
    $home_content = page_content::where('page', 'home')->first();
    
    $slidder = slider::orderby('id', 'desc')->paginate(20);
    $banner1 = banner1::first();
    $banner2 = banner2::first();
   
    
    ?>




<!-- Sidebar With Content Section-->
<div class="with-sidebar-wrapper"  style="margin-top: 100px">

  


			<section id="content-section-3">

				<div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" id="love" style="background-color: #ffffff; padding-top: 30px; padding-bottom: 30px; ">


					<div class="container">
						@include('search_bar')
						<div class="clear"></div>


						<?php  
				
				$get_all_cat  =  App\add_category::inRandomOrder()->get() ;  
				
				foreach($get_all_cat as $cat_get){  
				
					//run to 5 products on each category 
					
						$random_product1 =add_product::where('status','public')->where('category' , $cat_get->id )->inRandomOrder()->take(4)->get() ;
							
					if(count($random_product1)  >=  2) { 		
						?>



						<div class="totalbusiness-item totalbusiness-content-item">



							<h2 style="text-align: center;"><span class="spread-title-red">{{$cat_get->name}}</span> &nbsp; &nbsp; &nbsp; @if(count($random_product1) >= 4) <a style="font-size: 20px" href="/category/{{$cat_get->id }}" class="">view all</a> @endif</h2>



						</div>




						<section class="card">

							@foreach ($random_product1 as $product1)
							@include('layouts.container_product')
							@endforeach


						</section>



						<div class="clear"></div>



						<?php } } ?>





						<div class="clear"> </div>
{{-- 
						<div class="totalbusiness-item totalbusiness-content-item">



							<h2 style="text-align: center;"><span class="spread-title-red"> </span> &nbsp;

								<a style="font-size: 20px" href="/shop" class="btn btn-sm btn-primary">view all</a>

							</h2>



						</div> --}}





					</div>
				</div>

				<div class="clear"></div>
			</section>











</div>
<!-- Below Sidebar Section-->
@endsection
