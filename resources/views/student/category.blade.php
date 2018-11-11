@extends('layouts.app_db_student')
@section('content')


@section('search')
     <input class="au-input au-input--xl" type="text" name="q" value="{{isset($_GET['q'])?$_GET['q']:''}}" placeholder="Search Article {{$category->name}}" />
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap text-center">
            <h2 class="title-1 ">Category {{$category->name}} <small>{{Auth::User()->timezone}}</small></h2>

            <!-- <button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>add item</button> -->
        </div>
    </div>
</div>


<?php

$post_1=[];
$post_2=[];
$post_3=[];
$index_content=1;
foreach ($posts as $key => $post) {
	if($index_content==1){
		$post_1[]=$post;
	}elseif ($index_content==2) {
		$post_2[]=$post;
	}else{
		$post_3[]=$post;
	}
	$index_content+=1;
	if($index_content>3){
		$index_content=1;
	}
}

?>

    <div class="row">
    		<div class="col-md-4">
    		@foreach($post_1 as $post)
    			<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-2">
								<img src="{{asset($post->rel_from_user->avatar)}}" style="border-radius: 100%;">
							</div>
							<div class="col-md-6">
								<h5 class="title">{{$post->rel_from_user->username}}</h5>
								<small>{{\Carbon\Carbon::parse(MP::getTime($post->update_at))->format('d.m.y h:m A')}}</small>
								<br>
								<label class="label label-primary">{{$post->rel_from_category->name}}</label>
							</div>
						</div>
					</div>
				
				    <a href="{{route('a.db.post',['id'=>$post->id,'slug'=>$post->slug])}}" style="position: relative;">
				    	@if($post->type==1)
				    	<i class="fa fa-play-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="" data-original-title="Video Content" style="position: absolute;top:10px; background: #eee; border-radius: 100%; left:10px; font-size: 70px;"></i>
				    	@endif
				      @isset($post->featured_images)
				    	<img class="card-img-top" src="{{asset($post->featured_images)}}" >
				    @endisset
				    </a>
				    <div class="card-body">
				        <h4 class="card-title mb-3">{{strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title}}</h4>
				        <p class="card-text">{{MP::plain_content_text($post->content,200)}}
				        </p>
				    </div>
				    <div class="card-footer">
				    	<div class="row">
				    		<div class="col-md-12 text-center">
				    			<i class="fa fa-comments" aria-hidden="true"></i> 24
				    		</div>
				    	</div>
				    </div>
				</div>
    		
    		@endforeach 
        	</div>
        	<div class="col-md-4">
        	@foreach($post_2 as $post)
        		<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-2">
								<img src="{{asset($post->rel_from_user->avatar)}}" style="border-radius: 100%;">
							</div>
							<div class="col-md-6">
								<h5 class="title">{{$post->rel_from_user->username}}</h5>
								<small>{{\Carbon\Carbon::parse(MP::getTime($post->update_at))->format('d.m.y h:m A')}}</small>
								<br>
								<label class="label label-primary">{{$post->rel_from_category->name}}</label>
							</div>
						</div>
					</div>
					
				    <a href="{{route('a.db.post',['id'=>$post->id,'slug'=>$post->slug])}}" style="position: relative;">
				    	@if($post->type==1)
				    	<i class="fa fa-play-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="" data-original-title="Video Content" style="position: absolute;top:10px; background: #eee; border-radius: 100%; left:10px; font-size: 70px;"></i>
				    	@endif
				    @isset($post->featured_images)
				    	<img class="card-img-top" src="{{asset($post->featured_images)}}" >
				    @endisset
				    </a>
				    <div class="card-body">
				        <h4 class="card-title mb-3">{{strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title}}</h4>
				        <p class="card-text">{{MP::plain_content_text($post->content,200)}}
				        </p>
				    </div>
				    <div class="card-footer">
				    	<div class="row">
				    		<div class="col-md-12 text-center">
				    			<i class="fa fa-comments" aria-hidden="true"></i> 24
				    		</div>
				    	</div>
				    </div>
				</div>

    		
    		@endforeach 
	            
        	</div>
        	<div class="col-md-4">
        	@foreach($post_3 as $post)
    			<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-2">
								<img src="{{asset($post->rel_from_user->avatar)}}" style="border-radius: 100%;">
							</div>
							<div class="col-md-6">
								<h5 class="title">{{$post->rel_from_user->username}}</h5>
								<small>{{\Carbon\Carbon::parse(MP::getTime($post->update_at))->format('d.m.y h:m A')}}</small>
								<br>
								<label class="label label-primary">{{$post->rel_from_category->name}}</label>
							</div>
						</div>
					</div>
					
				    <a href="{{route('a.db.post',['id'=>$post->id,'slug'=>$post->slug])}}" style="position: relative;">
				    	@if($post->type==1)
				    	<i class="fa fa-play-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="" data-original-title="Video Content" style="position: absolute;top:10px; background: #eee; border-radius: 100%; left:10px; font-size: 70px;"></i>
				    	@endif
				    @isset($post->featured_images)
				    	<img class="card-img-top" src="{{asset($post->featured_images)}}" >
				    @endisset
				    </a>
				    <div class="card-body">
				        <h4 class="card-title mb-3">{{strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title}}</h4>
				        <p class="card-text">{{MP::plain_content_text($post->content,200)}}
				        </p>
				    </div>
				    <div class="card-footer">
				    	<div class="row">
				    		<div class="col-md-12 text-center">
				    			<i class="fa fa-comments" aria-hidden="true"></i> 24
				    		</div>
				    	</div>
				    </div>
				</div>
    		@endforeach 
	            
        	</div>
    </div>
@stop



