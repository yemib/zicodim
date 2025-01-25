@extends('layouts.index')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <div style="margin-top: 150px ;">

        <div class="navbar-header  navbar-left" title="Admin menu">


            <button style="background: rgba(139,110,110,1.00); float: left" type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#tutorNavbar1">
                <span style="color: white"> Admin Menu</span>
                <span class="sr-only">Toggle navigation</span>
                <span style="color: black" class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>


        </div>

        <div style="margin-bottom: 30px; max-width: 100%; padding: 0px;margin-left: 0px ; margin-right: 0px ; "
           >

            <div class="row" style="width: 100%;">



                <div class="col-sm-2  collapse navbar-collapse" id="tutorNavbar1"
                    style="background: {{ config('app.color') }}  ; color: rgba(255,255,255,1.00)">

                    <?php    function groupbutton($name , $drop1 , $drop2 , $addr1  , $addr2){    ?>

                    <div class="btn-group" role="group">
                        <button id="btnDropOne1" type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ $name }} <span
                                class="caret"></span></button>
                        <ul class="dropdown-menu" aria-labelledby="btnDropOne1">

                            <li><a href="{{ $addr1 }}">{{ $drop1 }}</a></li>

                            <li><a href="{{ $addr2 }}">{{ $drop2 }}</a></li>

                        </ul>
                    </div>

                    <?php   } ?>


                    <div class="btn-group-vertical" style="width: 100%" role="group" aria-label="Vertical button group">

                        <!---  admin menu--->

                        @if (session('admin'))
                            @include('admin_folder.admin_menu')
                        @endif

                        @if (session('vendor'))
                            @include('vendor.vendor_menu')
                        @endif


                    </div>




                </div>






                <div class="col-sm-10" style=" overflow: auto; ">



                    @yield('contenth')


                </div>



            </div>

        </div>

    </div>


    @include('admin_folder.script_function')


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
@endsection
