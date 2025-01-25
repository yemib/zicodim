@extends('layouts.index')

@section('title')Portfolio @endsection

@section('content')



<?php   
use App\page_content;
use App\icons;
use App\slider;

$home_content  =page_content::where('page' , 'about')->first(); 



$porfolios   =  icons::orderby('id', 'desc')->paginate(9);
?>




    <div class="totalbusiness-content">
        <!-- Above Sidebar Section-->
        <div class="above-sidebar-wrapper">
            <section id="content-section-1">
                <div class="totalbusiness-full-size-wrapper gdlr-show-all no-skin" style="padding-bottom: 0px;  background-color: #ffffff; ">
                    <div class="totalbusiness-image-frame-item totalbusiness-item" style="margin-bottom: 0px;">
                        <div class="totalbusiness-frame totalbusiness-link-type-none frame-type-none">
                            <div class="totalbusiness-image-link-shortcode">
                                <img
                                    src="/header/397771404.png"
                                    alt=""
                                    width="1560"
                                    height="450"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </section>
        </div>
        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <section id="content-section-2">
                <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" style="background-color: {{ config('app.color2') }}; padding-top: 20px; padding-bottom: 5px; ">
                    <div class="container">
                        <div class="totalbusiness-item totalbusiness-content-item" style="margin-bottom: 0px;">
                            <h2 class="home-title">
                                <span style="color: white;"> {{ config('app.name') }}  PORFOLIO</span>
                            </h2>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <section id="content-section-3">
                <div class="totalbusiness-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 30px; padding-bottom: 0px; ">
                    <div class="container">
                        <div class="blog-item-wrapper">
                            <div class="blog-item-holder">
                                <div class="totalbusiness-isotope" data-type="blog" data-layout="fitRows">
                                    <div class="clear"></div>

                                    @foreach($porfolios   as  $portfolio)
                                    <div class="four columns">
                                        <div class="totalbusiness-item totalbusiness-blog-grid totalbusiness-skin-box">
                                            <div class="totalbusiness-ux totalbusiness-blog-grid-ux">
                                                <article id="post-2068" class="post-2068 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
                                                    <div class="totalbusiness-standard-style">
                                                        <div class="totalbusiness-blog-thumbnail">
                                                            <a  target="_new" href="/slider/{{  $portfolio->picture }}">
                                                                <img
                                                                    src="/slider/{{  $portfolio->picture }}"
                                                                    alt="{{ config('app.name') }}"
                                                                    width="399"
                                                                    height="300"
                                                                >
                                                            </a>
                                                        </div>
                                                        <div class="totalbusiness-blog-grid-content">
                                                            <header class="post-header">
                                                                <div class="totalbusiness-blog-info">
                                                                    <div class="blog-info blog-date totalbusiness-skin-info">
                                                                        <span class="totalbusiness-sep">/</span>
                                                                        <a  target="_new" href="/slider/{{  $portfolio->picture }}"> 04 Mar 2022</a>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <h3 class="totalbusiness-blog-title">
                                                                    <a href="/slider/{{  $portfolio->picture }}">View</a>
                                                                </h3>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                    <div class="clear"></div>


                                    {{ $porfolios->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
        </div>
        <!-- Below Sidebar Section-->
    </div>
    <!-- totalbusiness-content -->
    <div class="clear"></div>





@endsection