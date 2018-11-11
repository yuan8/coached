@extends('layouts.app_db_student')

@section('content')
@section('script')
<script type="text/javascript" src="{{asset('js/coach_editor.js?v=').time()}}"></script>
<script type="text/javascript">
	

	 $.fn.extend({
		yone: function(contex) {			
			return this.each(function(k,d) {
				// d.addEventListener('click',function(){
				// 	$(d).find('input[type=file]')[0].click();
				// });
				// var tgr_b=$(d).find('input[type=file]')[0];
					if(contex=='image-sigle'){
						// var f=$(ev.target)[0];
					this.addEventListener("change", function(ev){

						var t=$(ev.target).attr('target-render');
						var reader = new FileReader();
						console.log($(ev.target)[0]);
							reader.readAsDataURL($(ev.target)[0].files[0]);
							reader.onload = function(e) {
								$(t).attr('src',this.result);
							}
					});
				}
    		});
		}});


		$('#image-featured').yone('image-sigle');



		function generateVideo(from,target){
			var from=$(from).val();
			if(from!=""){
				dom=video_init_embed_from_url(from);
				if(dom){
					$(target).html(dom);
				}else{

				}

			}else{

			}
		}

		if("{{(old('featured_video'))?old('featured_video'):''}}"!=""){
			setTimeout(function(){
				generateVideo('#video_url_input','#video_embed_container');
				
			},200);

		}
		
</script>


@stop

<section class="content-header">
      <h4>
        CREATE ARTICLE 
        <small>{{Auth::User()->timezone}}</small>
      </h4>
</section>
<form action="{{route('db.c.post_video.store')}}" method="post" enctype='multipart/form-data' >
	@csrf
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
				<h3 class="title">Upload Futured Video</h3>
				</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12" id="video_embed_container" style="overflow: hidden;">
							</div>
						</div>
					</div>
					<div class="card-footer">
				  <div class="input-group col-md-12">
			      <input type="text" class="form-control " name="featured_video" required="" placeholder="URL Video (youtube)" value="{{old('featured_video')}}" id="video_url_input"> 
			      <span class="input-group-btn">
			        <button class="btn btn-info" type="button" onclick="generateVideo('#video_url_input','#video_embed_container')">Generate</button>
			      </span>
			    </div><!-- /input-group -->
				    <span class="invalid-feedback" role="alert">
							@if ($errors->has('featured_video'))
				       		 <strong>{{ $errors->first('featured_video') }}</strong>
						@endif
				    </span>
					</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
				<h3 class="title">Upload Futured Image</h3>
				</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<img id="thumb" style="margin-top:15px;height: auto; width:200px;">
							</div>
						</div>
					</div>
					<div class="card-footer">
				   <span class="" class="col-md-12">
				     <a   class="btn btn-info" style="color:#fff" onclick="$('#image-featured')[0].click()">
				       <i class="fa fa-picture-o"></i> Choose Image
					   <input type="file"  id="image-featured" name="featured_images" target-render="#thumb" accept="image/*" style="display:none;">
				     </a>
				   </span>
				    <span class="invalid-feedback" role="alert">
							@if ($errors->has('featured_images'))
				       		 <strong>{{ $errors->first('featured_images') }}</strong>
						@endif
				    </span>
					</div>
			</div>
		</div>
	</div>

	<div class="card">
		
			<!-- <input id="thumbnail" class="form-control" type="hidden" style="" "  required=""> -->
			  
			<div class="card-header">
				<div class="row no-padding-row">
					<div class="col-md-7">
						<div class="form-group">
							<label>Title</label>
							<input type="" class="form-control" name="title" required="" value="{{old('title')}}">
							 <span class="invalid-feedback" role="alert">
	                   			@if ($errors->has('title'))
	                           		 <strong>{{ $errors->first('title') }}</strong>
	                    		@endif
	                        </span>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<label>Category</label>
							<select class="form-control chosen-select" required="" name="category_id">
								@foreach(MP::getpostCategoryAll() as $category)
									<option value="{{$category->id}}" {{$category->id==old('category_id')?'selected':''}}>{{$category->name}}</option>
								@endforeach
							</select>
							<span class="invalid-feedback" role="alert">
	                   			@if ($errors->has('category_id'))
	                           		 <strong>{{ $errors->first('category_id') }}</strong>
	                    		@endif
	                        </span>
						</div>
					</div>
				</div>
			</div>



			<div class="card-body">
				<div class="row ">
					<div class="col-md-12">
						<div class="form-group">
							<label>Content</label>
							<textarea id="coach-editor-plugin" style="z-index:999;" name="content" required="">{{old('content')}}</textarea>

							<span class="invalid-feedback" role="alert">
	                   			@if ($errors->has('content'))
	                           		 <strong>{{ $errors->first('content') }}</strong>
	                    		@endif
	                        </span>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer">
                    <button type="submit" class="btn btn-warning">Create</button>
            </div>
		</div>
</form>

@stop