@extends('layouts.app_db_student')

@section('content')
@section('script')
<script type="text/javascript" src="{{asset('js/coach_editor.js?v=').time()}}"></script>

<script type="text/javascript">
	
	$('#lfm').filemanager('image');
</script>
@stop
<section class="content-header">
      <h4>
        EDIT ARTICLE 
        <small>{{Auth::User()->timezone}}</small>
      </h4>
</section>
<div class="container-fluid">
<div class="card">
		<div class="card-header">
			<h3 class="title">Upload Futured Image</h3>
		</div>
		 	<div class="card-body">
		 		<div class="row">
		 			<div class="col-md-12">
		 				  <?php
                            $f_i=$post->featured_images!='[]'?json_decode($post->featured_images):null;
                        	?>
                        @isset($f_i[0])
                        <img id="holder" src="{{asset($f_i[0]->url)}}" style="margin-top:15px;height: auto; width:100%;">
                        @else
		 				<img id="holder" style="margin-top:15px;height: auto; width:100%;">
		 				@endif
		 				
		 			</div>
		 		</div>
		 	</div>
		 	<div class="card-footer">
			   <span  class="">
			     	<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-info" style="color:#fff">
			       <i class="fa fa-picture-o"></i> Choose Image
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


<div class="container-fluid">
	<div class="card">
		<form action="{{route('db.c.post_article.store')}}" method="post">
			@csrf
			<input id="thumbnail" class="form-control" type="hidden" style="" value="{{isset($f_i[0])?asset($f_i[0]->url):''}}" name="featured_images[]" required="">
			  
			<div class="card-header">
				<div class="row no-padding-row">
					<div class="col-md-7">
						<div class="form-group">
							<label>Title</label>
							<input type="" class="form-control" name="title" required="" value="{{$post->title}}">
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
									<option value="{{$category->id}}" {{$category->id==$post->category_id?'selected':''}}>{{$category->name}}</option>
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
							<textarea id="coach-editor-plugin" name="content" required="">{{$post->content}}</textarea>
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
                    <button type="submit" class="btn btn-warning pull-right">Update</button>
            </div>
		</form>
	</div>
</div>

@stop