@extends('layouts.app_db_student')
@section('ex_head')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.js"></script>
	<style type="text/css">
		hr{
			border-color: #337ab7;
		}
		.comment,.container-comment,.container-reply{
			border-color: #204d74;
			padding-bottom: 7px;
		}
		.container-reply{
			margin-top: 7px;
		}
		.comment-form{
			padding:35px;
		}

		.container-reply{
			border-color: #fd5c03;
		}
	</style>
@endsection

@section('script')
<script type="text/javascript">
	$('#sticky_side_1').sticky({topSpacing:100,bottomSpacing:100});
	$('#sticky_side_2').sticky({topSpacing:100});
</script>
@stop
@section('content')


<div class="row" style=" display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; flex-wrap: wrap;">
	<div class="col-md-3" style="margin-left: -15px; margin-right: 15px; margin-top: -40px; background: #f1f1f1; padding-top: 40px;   display: flex; flex-direction: column;">
		<div class="row">
			<div class="col-md-12" id="sticky_side_1">
				<div class="card" style="background-color: transparent; border:none;">
					<div class="card-header" style="background-color: transparent;">
                    <i class="fa fa-user"></i>
		                    <strong class="card-title pl-2">{{$post->rel_from_user->username}}</strong>
		                </div>
					<div class="card-body" style="background-color: transparent;">
						<div class="row">
							<div class="col-md-12 text-center">
								<img src="{{asset($post->rel_from_user->avatar)}}" style="border-radius: 100%; max-width:90px;">
								  <h5 class="text-sm-center mt-2 mb-1">{{$post->rel_from_user->first_name}} {{$post->rel_from_user->last_name}}</h5>
			                        <div class="location text-sm-center">
			                            <i class="fa fa-map-marker"></i> {{ isset($post->rel_from_user->Rcountry->name)?$post->rel_from_user->Rcountry->name.',':'Country not Detected'}} {{isset($post->rel_from_user->Rstate->name)?$post->rel_from_user->Rstate->name:''}}</div>
									</div>
						</div>
					</div>
					<div class="card-footer" style="background-color: transparent;">
						<div class="row">
							<div class="col-md-12 text-center">
								<a href="" class="btn btn-warning col-md-6 col-md-offset-3">Profile Coach</a>
								
							</div>
						</div>
					</div>
					
				</div>
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 10px;">
					@foreach(MP::getPostCategoryAll() as $category)
						<a href="{{route('a.db.category',['id'=>$category->id,'slug'=>$category->slug])}}" class="label {{$category->id==$post->category_id?'label-primary':'label-default'}}" style="line-height:2">{{$category->name}}</a>
					@endforeach
				</div>
				<div class="col-md-12" >
					<div class="row">
					@foreach(MP::next_post_from_coach($post->user_id,$post->id,2) as $post_side)
						<div class="col-md-12">
							<div class="card">
							<div style="max-height: 200px; overflow: hidden;">
							@isset($post_side->featured_images)
						    	<img class="card-img-top" src="{{asset($post_side->featured_images)}}" >
						    @endisset
						    </div>
							<div class="card-body">

							<h6 class="card-title mb-3"><i>{{strlen($post_side->title) > 50 ? substr($post_side->title,0,50)."..." : $post_side->title}}</i></h6>
							
								
								
							</div>
							<div class="card-footer">
								<h4>
								
								<h6 class="title">{{$post_side->rel_from_user->username}}
									<span style="line-height: 2">
									<label class="label label-primary" style="font-size: 10px;">{{$post_side->rel_from_category->name}}</label>
									</span>
								</h6>
										
							</h4>
							<small style="font-size: 10px;">{{\Carbon\Carbon::parse(MP::getTime($post_side->update_at))->format('d.m.y h:m A')}}</small>
							</div>
						</div>
						</div>

						

					@endforeach
					</div>
				</div>
			</div>

			</div>
			
				
		</div>


		
	</div>
	<div class="col-md-5 " style=" display: flex; flex-direction: column; margin-left: 25px;">
		
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-capitalize"><i>{{$post->title}}</i></h2>
				<h5 class="">
					<!-- <img src="{{asset($post->rel_from_user->avatar)}}" style="border-radius: 100%; max-width:40px;"> -->
					<!-- <a href="" class="username-link">{{$post->rel_from_user->username}}</a> -->
					<span><label class="label label-primary">{{$post->rel_from_category->name}}</label></span>

					<span><small>{{\Carbon\Carbon::parse(MP::getTime($post->update_at))->format('d.m.y h:m A')}}</small></span>
				</h5>
				
				
				<!-- <hr style="background: #070a42; border: 1px solid #777"> -->
				<br>
				@isset($post->featured_images)
			    	<img class="card-img-top" src="{{asset($post->featured_images)}}" >
			    @endisset
				<br>
				<br>
				<div class="row">
					<div class="col-md-12">
						<!-- <div class="card">
							<div class="card-body"> -->
								{!! nl2br($post->content)!!}
						
								
							</div>
						<!-- </div>
					</div> -->
				</div>
			</div>
		</div>
		<div class="container-comment">
		  	<div class="comment">
		  	<img class="img-responsive img-circle img-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="{{Auth::user()->role==2?'Coach':'Student'}}"  src="{{asset(Auth::user()->avatar)}}" alt="Alt Text">
		    <!-- .img-push is used to add margin to elements next to floating images -->
		       <div class="img-push">
		       		<h4><a href="">ocokkoko</a> <span>22.04.12 04:00 AM</span></h4>
		        	<p>jkjksksjkj</p>
		        	<div>
		        		<span><a href="javascript:void(0)" data-toggle="collapse" data-target="#reply-comment-1"> 1 Reply</a></span>
		        		<div class="container-reply collapse" id="reply-comment-1">
		        			<div class="comment-reply">
		        				 <img class="img-responsive img-circle img-sm" src="{{asset(Auth::user()->avatar)}}" alt="Alt Text" data-toggle="tooltip" data-placement="right" title="" data-original-title="{{Auth::user()->role==2?'Coach':'Student'}}" >
			               			 <!-- .img-push is used to add margin to elements next to floating images -->
			                		<div class="img-push">
			                			<h4><a href="">ocokkoko</a>  <span>22.04.12 04:00 AM</span></h4>
		        						<p>jkjksksjkj</p>
			                		</div>				                				
		        			</div>
		        			<div  method="post" class="comment-form">
			                <img class="img-responsive img-circle img-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="{{Auth::user()->role==2?'Coach':'Student'}}"  src="{{asset(Auth::user()->avatar)}}" alt="Alt Text">
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

		<div  method="post" class="comment-form">
		    <img class="img-responsive img-circle img-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="{{Auth::user()->role==2?'Coach':'Student'}}" src="{{asset(Auth::user()->avatar)}}" alt="Alt Text">
		    <!-- .img-push is used to add margin to elements next to floating images -->
		    <div class="img-push">
		  <textarea type="text" class="form-control input-sm" placeholder="Press enter to post comment"></textarea>
		</div>
		</div>


	</div>

	<div class="col-md-3" style="display: flex; flex-direction: column;">
		<div class="row">
			<div class="col-md-8 " id="sticky_side_2" style="margin-top: 110px;">
					<a href="http://twitter.com/share?text={{$post->title}}&url={{route('p_share_post',['id',$post->id,'slug'=>$post->slug])}} &hashtags={{$post->rel_from_category->name}}">
						<img src="{{asset('asset_local/facebook.png')}}" class="icon-share facebook">
					</a>
					<br>
					<br>

					<a href="http://twitter.com/share?text={{$post->title}}&url={{route('p_share_post',['id',$post->id,'slug'=>$post->slug])}} &hashtags={{$post->rel_from_category->name}}">
						<img src="{{asset('asset_local/twitter.png')}}" class="icon-share twitter">
					</a>
					<br>
					
					<br>
					<a href="http://twitter.com/share?text={{$post->title}}&url={{route('p_share_post',['id',$post->id,'slug'=>$post->slug])}} &hashtags={{$post->rel_from_category->name}}">
						<img src="{{asset('asset_local/whatsapp.png')}}" class="icon-share whatsapp">
					</a>
			</div>
		</div>
	</div>
</div>




@stop