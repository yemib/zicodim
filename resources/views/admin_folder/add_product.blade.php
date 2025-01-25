@extends('admin_dashboar')

@section('contenth')


@include('admin_folder.upload_style')

<h2>Add Product </h2>

<?php
    use App\add_category;
    $parent = add_category::all();
    
    ?>

<div align="center">
    <div align="left" style="padding: 20px  ; width: 80% ">

        @include('layouts.error_code')


   <!--   id="Form1" --->
        <form  method="post" action="/add_product" enctype="multipart/form-data">

            {{ csrf_field() }}
            <label>Name</label>
            <input required value="@if (isset($edit_list)) {{ $edit_list->name }} @endif" name="name"
                class="form-control" />


            <label>Description</label>

            <textarea @if (session('admin')) id="article-ckeditor" @endif required name="description"
                class="form-control">
                    @if (isset($edit_list))
{{ $edit_list->description }}
@endif
                </textarea>

{{-- 
            <div style="display: none">
                <label>Quantity</label>
                <input type="number" value="@if (isset($edit_list)) {{ $edit_list->quantity }} @endif" name="quantity"
                    class="form-control" />

                <label>Coupon Price </label>




                <input type="" value="@if (isset($edit_list)) {{ $edit_list->price }} @endif" name="price"
                    class="form-control" />




                <label> Price </label>

                <input type="" value="" name="coupon_price" class="form-control" />








                <label>Warranty</label>

                <textarea @if (session('admin')) id="article-ckeditor" @endif name="warranty" class="form-control">
					@if (isset($edit_list))
{{ $edit_list->description }}
@endif
			   </textarea>


                <label>Return Policy</label>

                <textarea @if (session('admin')) id="article-ckeditor" @endif name="policy" class="form-control">
					@if (isset($edit_list))
{{ $edit_list->description }}
@endif
			</textarea>




                <label>Shipping Instruction</label>

                <textarea @if (session('admin')) id="article-ckeditor" @endif name="shipping" class="form-control">
				@if (isset($edit_list))
{{ $edit_list->shipping }}
@endif
			</textarea>


            </div>
 --}}



            {{-- <input multiple style="display: none" type="file" name="picture[]" id="file-input" /> --}}


            {{-- <div id="preview"
                style="  @if (isset($edit_list)) background-image:url('  {{ asset('products/' . $edit_list->picture) }}') @endif "
                class="img_container">

            </div> --}}


            <?php
                
                $label = 'Upload  Image';
                $name = 'pictures';
                
                imagecontainer($label, $name, $multiple = true, 1);
                ?>







            <div class="col-sm-12">


                <label> <strong>Category</strong> </label>

                <select name="category" class="form-control">


                    @if (isset($edit_list))
                    <?php // check for the id period
                            
                            $categ = App\add_category::find($edit_list->category);
                            ?>
                    <option value="{{ $categ->id }}"> {{ $categ->name }} </option>
                    @endif

                    @foreach ($parent as $parent)
                    <option value="{{ $parent->id }}"> {{ $parent->name }} </option>
                    @endforeach


                </select>






                <br />


                <input type="hidden" name="pickup" value="yes" />
                <!--Pick Up Available -->

                <br />


                @if (session('admin'))
                <input id="public_status" type="checkbox" name="status" value="public" /> <label for="public_status">
                    &nbsp; Make Public </label>
                @endif
                <br />


                <h3 class="text-danger">
                    @if (isset($errors))
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                    @endif


                    @if (session('error_upload'))
                    {{ session('error_upload') }}
                    @endif
                </h3>



                <div id="uploadingform1">
                    <input id="" class="btn btn-primary" type="Submit" value="Save" />

                </div>

            </div>


        </form>
    </div>

</div>

@include('admin_folder.upload_script')
@endsection