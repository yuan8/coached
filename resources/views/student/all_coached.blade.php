
@extends('layouts.app_db_student')

@section('content')
<div class="container-fluid">
    <div class="row">
    	@foreach($coaches as $coach)
    	<div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user"></i>
                    <strong class="card-title pl-2">{{$coach->username}}</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                    	<div class="col-md-4" style="border-right:1px solid #777;">
                    		<div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" src="{{asset($coach->avatar)}}" alt="Card image cap" style="width:30%;">
                        <h5 class="text-sm-center mt-2 mb-1">{{$coach->first_name}} {{$coach->last_name}}</h5>
                        <div class="location text-sm-center">
                            <i class="fa fa-map-marker"></i> {{ isset($coach->Rcountry->name)?$coach->Rcountry->name.',':'Country not Detected'}} {{isset($coach->Rstate->name)?$coach->Rstate->name:''}}</div>
                    </div>
                    <hr>
                    <div class="card-text text-sm-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Silver 20/19">
                      <!--   <a href="#">
                            <i class="fa fa-facebook pr-1"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter pr-1"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-linkedin pr-1"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-pinterest pr-1"></i>
                        </a> -->
                         <i class="fa fa-star" style="color: #f8c207;"></i>
                        <i class="fa fa-star" style="color: #f8c207;"></i>
                        <i class="fa fa-star" style="color: #f8c207;"></i>
                        <i class="fa fa-star" style="color: #f8c207;"></i>
                        <i class="fa fa-star"></i>
                    </div>

                    <hr>
                    <div class="card-text text-sm-center" >
                     	12 Artiles | 14 Videos
                       
                    </div>
                    </div>
                    <!-- end -->
                    <div class="col-md-8">
                    <ul class="nav nav-tabs">
					    <li class="">
					    	<a  class="btn btn-xs btn-blog btn-default active show" data-toggle="tab" href="#menu-{{$coach->id}}-coach_description">Description</a></li>
					    <li>
                            <a data-toggle="tab" href="#menu-{{$coach->id}}-coach_availabelity" class="btn btn-xs btn-blog btn-default">Availabelity</a></li>
					    <li>
                            <a data-toggle="tab" href="#menu-{{$coach->id}}-videos" class="btn btn-xs btn-blog btn-default">Video</a>
                        </li>
                       

					  
					  </ul>

					 	<div class="col-md-12">
					 		 <div class="tab-content">
					    <div id="menu-{{$coach->id}}-coach_description" class="tab-pane fade in active show">
					      <p>

                          </p>
					    </div>
					    <div id="menu-{{$coach->id}}-coach_availabelity" class="tab-pane fade">
					      <h3>Menu 1</h3>
					      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					    </div>
					    <div id="menu-{{$coach->id}}-video" class="tab-pane fade">
					      <p class="text-center">No Data</p>
					    </div>
					  </div>
					 	</div>
                    </div>
                    </div>
                </div>

                <div class="card-footer" style="display: inline;">
                	<span style="float: left;"><a href="" class="btn btn-warning btn-sm">Go {{$coach->username}} Profile</a></span>
                    <span style="float: right;"><h5>{{isset($coach->R_coach_range_price)?'Rp.'.number_format($coach->R_coach_range_price->min_price,2,",",".").' - ':''}} {{number_format($coach->R_coach_range_price->max_price,2,",",".")}}</h5></span>
                </div>
            </div>
        </div>


    	@endforeach
    </div>
     
    {{$coaches->links()}}

</div>
       


@stop