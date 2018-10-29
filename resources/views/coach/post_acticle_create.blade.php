@extends('layouts.app_db_student')

@section('content')

<section class="content-header">
      <h4>
        CREATE ARTICLE 
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
			 				<img id="holder" style="margin-top:15px;height: auto; width:100%;">
			 				
			 			</div>
			 		</div>
			 	</div>
			 	<div class="card-footer">
				   <span class="input-group-btn" class="col-md-12">
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

<script type="text/javascript">
	$('#lfm').filemanager('image');
</script>

<div class="container-fluid">
	<div class="card">
		<form action="{{route('db.c.post_article.store')}}" method="post">
			@csrf
			<input id="thumbnail" class="form-control" type="hidden" style="" name="featured_images[]"  required="">
			  
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
							<textarea id="article-ckeditor" name="content" required=""></textarea>
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
                    <button type="submit" class="btn wallet_promo_btn pull-right">Create</button>
            </div>
		</form>
	</div>
</div>

@stop