@extends('layouts.app_db_student')

@section('content')

  <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap text-center">
                <h2 class="title-1 ">FIND YOUR COACH</h2>
                <!-- <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add item</button> -->
            </div>
        </div>
    </div>

   
    <!-- ================FIND COACH AREA =================-->


    <div class="row update_blog_inner">
            @foreach(MP::getPostCategoryAll() as $category)
                <div class="col-md-4 col-xs-6 margin-b-7">
                    <div class="up_blog_item">
                        <div class="blog_img">
                            <img src="{{asset($category->thumb)}}" alt="" />
                        </div>
                        <div class="up_blog_text">
                            <a href="{{route('a.db.category',['id'=>$category->id,'slug'=>$category->slug])}}">
                             <h4 style="text-align: center;">{{$category->name}}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12">
                 <div class="find_coach"><a class="find_coach_btn" href="">FIND YOUR COACHED</a></div>
                
            </div>
    </div>

    <!-- ================End FIND COACH AREA =================-->
    

@stop