@extends('layouts.app')
@section('content')
<section class="banner_nine_area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="b_nine_text">
                    @if(!Auth::user())
                    <h3>GET STARTED NOW!</h3>
                    <p class="second_text_banner">Experience the new generation of education</p>
                    <a class="find_coach_btn" href="{{route('register.coached')}}">BE A COACH</a>
                    <a class="coach_btn_blue" href="{{route('register')}}">BE A STUDENT</a>
                    @endif
                </div>
            </div>
            <!-- <div class="col-md-5">
                <div class="b_nine_image">
                    <img src="{{asset('img/banner/banner-n-mobile.png')}}" alt="">
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--================Slider Area =================-->

<!--================FIND COACH AREA =================-->
<section class="update_blog_area" id="blog">
    <div class="container">
        <h2 class="single_title_center">START LEARNING</h2>
        <div class="row update_blog_inner">

            @foreach(MP::getPostCategoryAll() as $category)
            <div class="col-md-4 col-xs-6">
                <div class="up_blog_item">
                    <div class="blog_img"><img src="{{asset($category->thumb)}}" alt=""></div>
                    <div class="up_blog_text">
                        <a href="{{route('p.category.index',['id'=>$category->id,'slug'=>$category->slug ])}}"><h4 style="text-align: center;">{{$category->name}}</h4></a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
        <DIV>
            
        </DIV>
        <div class="find_coach">
            <a class="find_coach_btn" href="">FIND YOUR COACHED</a>
        </div>
    </div>
</section>


@stop