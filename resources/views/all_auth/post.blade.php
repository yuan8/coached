@extends('layouts.app_db_student')
@section('content')

	<div class="container-fluid">
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="card">
	    			<div class="card-header">
						<div class="row">
							<div class="col-md-1">
								<img src="{{asset($post->rel_from_user->avatar)}}" style="border-radius: 100%;">
							</div>
							<div class="col-md-6">
								<h3 class="title"><a href="" class="username-link">{{$post->rel_from_user->username}}</a></h3>
								<small>{{\Carbon\Carbon::parse(MP::getTime($post->update_at))->format('d.m.y h:m A')}}</small>
								<br>
								<label class="label label-primary">{{$post->rel_from_category->name}}</label>
							</div>
						</div>
					</div>
	    			<?php
				        $f_i=$post->featured_images!='[]'?json_decode($post->featured_images):null;
				    ?>
				   <div style="overflow: hidden;">
				    @isset($f_i[0])
				    	<img class="card-img-top" src="{{asset($f_i[0]->url)}}" >
				    @endisset
				    </div>
	    			<div class="card-body">
	    				<h3>{{$post->title}}</h3>
	    				<br>
	    				<p>{!! nl2br($post->content)!!}</p>
	    			</div>
	    			<div style="float:left;">
	    				  <div class="container-comment">
	    				  	<div class="comment">
	    				  	<img class="img-responsive img-circle img-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="jssjkjjjkj"  src="{{asset(Auth::user()->avatar)}}" alt="Alt Text">
			                <!-- .img-push is used to add margin to elements next to floating images -->
				               <div class="img-push">
				               		<h4><a href="">ocokkoko</a> <span>22.04.12 04:00 AM</span></h4>
				                	<p>jkjksksjkj</p>
				                	<div>
				                		<span><a href="" data-toggle="collapse" data-target="#reply-comment-1"> 1 Reply</a></span>
				                		<div class="container-reply collapse" id="reply-comment-1">
				                			<div class="comment-reply">
				                				 <img class="img-responsive img-circle img-sm" src="{{asset(Auth::user()->avatar)}}" alt="Alt Text" data-toggle="tooltip" data-placement="right" title="" data-original-title="jssjkjjjkj" >
							               			 <!-- .img-push is used to add margin to elements next to floating images -->
							                		<div class="img-push">
							                			<h4><a href="">ocokkoko</a>  <span>22.04.12 04:00 AM</span></h4>
				                						<p>jkjksksjkj</p>
							                		</div>				                				
				                			</div>
				                			<div  method="post" class="comment-form">
							                <img class="img-responsive img-circle img-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="jssjkjjjkj"  src="{{asset(Auth::user()->avatar)}}" alt="Alt Text">
							                <!-- .img-push is used to add margin to elements next to floating images -->
							                <div class="img-push">
						                  <textarea type="text" class="form-control input-sm" placeholder="Press enter to post comment reply"></textarea>
						                </div>
						              </div>
				                		</div>

				                	</div>
				               <di>
	    				  	</div>
	    				  </div>
	    				
	    			</div>
	    			<div class="card-footer">
	    				<div  method="post" class="comment-form">
			                <img class="img-responsive img-circle img-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="jssjkjjjkj" src="{{asset(Auth::user()->avatar)}}" alt="Alt Text">
			                <!-- .img-push is used to add margin to elements next to floating images -->
			                <div class="img-push">
		                  <textarea type="text" class="form-control input-sm" placeholder="Press enter to post comment"></textarea>
		                </div>
		              </div>
	    			</div>
	    		</div>
	    	</div>
	    </div>


	   
	</div>

@stop