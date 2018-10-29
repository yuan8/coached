@extends('layouts.app_db_student')
@section('content')


@section('search')
     <input class="au-input au-input--xl" type="text" name="q" value="{{isset($_GET['q'])?$_GET['q']:''}}" placeholder="Search Article {{$category->name}}" />
@stop

@section('content')
<section class="content-header">
      <h1>
        Category {{$category->name}}
        <small>{{Auth::User()->timezone}}</small>
      </h1>
</section>

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

<div class="container-fluid">
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
					<?php
				        $f_i=$post->featured_images!='[]'?json_decode($post->featured_images):null;
				    ?>
				    <a href="{{route('a.db.post',['id'=>$post->id,'slug'=>$post->slug])}}" style="position: relative;">
				    	<i class="fa fa-play-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="" data-original-title="Video Content" style="position: absolute;top:10px; background: #eee; border-radius: 100%; left:10px; font-size: 70px;"></i>
				    @isset($f_i[0])
				    	<img class="card-img-top" src="{{asset($f_i[0]->url)}}" >
				    @endisset
				    </a>
				    <div class="card-body">
				        <h4 class="card-title mb-3">{{strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title}}</h4>
				        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
				            content.
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
					<?php
				        $f_i=$post->featured_images!='[]'?json_decode($post->featured_images):null;
				    ?>
				    <a href="{{route('a.db.post',['id'=>$post->id,'slug'=>$post->slug])}}" style="position: relative;">
				    	<i class="fa fa-play-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="" data-original-title="Video Content" style="position: absolute;top:10px; background: #eee; border-radius: 100%; left:10px; font-size: 70px;"></i>
				    @isset($f_i[0])
				    	<img class="card-img-top" src="{{asset($f_i[0]->url)}}" >
				    @endisset
				    </a>
				    <div class="card-body">
				        <h4 class="card-title mb-3">{{strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title}}</h4>
				        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
				            content.
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
					<?php
				        $f_i=$post->featured_images!='[]'?json_decode($post->featured_images):null;
				    ?>
				    <a href="{{route('a.db.post',['id'=>$post->id,'slug'=>$post->slug])}}" style="position: relative;">
				    	<i class="fa fa-play-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="" data-original-title="Video Content" style="position: absolute;top:10px; background: #eee; border-radius: 100%; left:10px; font-size: 70px;"></i>
				    @isset($f_i[0])
				    	<img class="card-img-top" src="{{asset($f_i[0]->url)}}" >
				    @endisset
				    </a>
				    <div class="card-body">
				        <h4 class="card-title mb-3">{{strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title}}</h4>
				        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
				            content.
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
</div>
@stop



