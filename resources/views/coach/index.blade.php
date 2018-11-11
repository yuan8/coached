
@extends('layouts.app_db_student')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h5 class="">WELCOMING BACK COACH!</h5>
                <!-- <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add item</button> -->
            </div>
        </div>
    </div>

    <!--================FIND COACH AREA =================-->


    <section class="update_blog_area" id="blog">
        <div class="container">
            <div class="row update_blog_inner">

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="mx-auto d-block dashboard-icon" src="images/icon/user.svg" alt="Card image cap">
                                <h5 class="text-sm-center mt-2 mb-1 dasboard-title">STUDENT</h5>
                                <h2 class="text-sm-center mt-2 mb-1">3</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="mx-auto d-block dashboard-icon" src="images/icon/article.svg" alt="Card image cap">
                                <h5 class="text-sm-center mt-2 mb-1 dashboard-title">ARTICLE</h5>
                                <h2 class="text-sm-center mt-2 mb-1">3</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="mx-auto d-block dashboard-icon" src="images/icon/rate.svg" alt="Card image cap">
                                <h5 class="text-sm-center mt-2 mb-1 dashboard-title">RATE</h5>
                                <h2 class="text-sm-center mt-2 mb-1">3</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="mx-auto d-block dashboard-icon" src="images/icon/reader.svg" alt="Card image cap">
                                <h5 class="text-sm-center mt-2 mb-1 dashboard-title">READER</h5>
                                <h2 class="text-sm-center mt-2 mb-1">3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End FIND COACH AREA =================-->
</div>	

@stop