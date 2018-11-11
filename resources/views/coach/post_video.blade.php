

@extends('layouts.app_db_student')

@section('search')
     <input class="au-input au-input--xl" type="text" name="q" value="{{isset($_GET['q'])?$_GET['q']:''}}" placeholder="Search Article" />
     <input type="hidden" name="status" value="{{isset($_GET['status'])?$_GET['status']:''}}">
     <input type="hidden" name="category" value="{{isset($_GET['category'])?$_GET['category']:''}}">
@stop

@section('content')
<section class="content-header">
      <h4>
        VIDEO LIST
        <small>{{Auth::User()->timezone}}</small>
      </h4>
</section>


<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <!-- <h3 class="title-5 m-b-35"></h3> -->
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <form action="{{route('db.c.post_article')}}" method="get" id="search_from_filter_form">
                        <input type="hidden" name="q" value="{{isset($_GET['q'])?$_GET['q']:''}}">
                    <div class=" rs-select2--light rs-select2--md">
                    	<div class="form-group">
                    		<select class="form-control chosen-select" name="status" onchange="$('#search_from_filter_form').submit()">
                    			<option value="" {{isset($_GET['status'])?($_GET['status']==''?'selected':''):''}}>All Status</option>
                    			<option value="1" {{isset($_GET['status'])?($_GET['status']==1?'selected':''):''}}>Waiting</option>
                    			<option value="2" {{isset($_GET['status'])?($_GET['status']==2?'selected':''):''}}>Publish</option>
                                <option value="3" {{isset($_GET['status'])?($_GET['status']==3?'selected':''):''}}>Reject</option>

                    		</select>
	                    </div>
                    </div>

                    <div class=" rs-select2--light rs-select2--md">
                    	<div class="form-group">
                    		<select class="form-control chosen-select" name="category" onchange="$('#search_from_filter_form').submit()">
                    			<option value="">All Category</option>
                                @foreach(MP::getPostCategoryAll() as $category)
                                <option value="{{$category->id}}" {{isset($_GET['category'])?($_GET['category']==$category->id?'selected':''):''}}>{{$category->name}}</option>
                                @endforeach
                    		</select>
	                    </div>
                    </div>
                    </form>

                    <!-- <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2 select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true">
                            <option selected="selected">Today</option>
                            <option value="">3 Days</option>
                            <option value="">1 Week</option>
                            <option value="">1 Month</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 76px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-v4-container"><span class="select2-selection__rendered" id="select2-time-v4-container" title="Today">Today</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <div class="dropDownSelect2"></div>
                    </div> -->
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-primary" href="{{route('db.c.post_video.create')}}">
                        <i class="zmdi zmdi-plus"></i> NEW</a>
                </div>
            </div>

            

            <!-- END DATA TABLE -->
        </div>

       <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <td>
                                </td>
                                <td>Title</td>
                                <td>Status</td>
                                <td>Category</td>

                                <td class="text-center">Comment</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($posts as $post)

                            <tr class="text-center">
                                <td class=" " >
                             
                                @isset($post->featured_images)
                                <img src="{{asset($post->featured_images)}}" style="width: 60px;">
                                @endisset
                                </td>
                                <td>
                                    <div class="table-data__info">
                                        <h6>{{strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title}}</h6>
                                        <span>
                                            <a href="#">{{\Carbon\Carbon::parse(MP::getTime($post->update_at))->format('d.m.y h:m A')}}</a>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    @if($post->status==1)
                                    <span class="role user">Waiting</span>
                                    @elseif($post->status==2)
                                    <span class="role member">Publish</span>
                                    @else
                                    <span class="role admin">Reject</span>
                                    @endif
                                </td>
                                <td style="font-size:12px;">{{$post->rel_from_category->name}}</td>

                                <td class="text-center">
                                   22
                                </td>
                                <td>
                                    <a href="{{route('db.c.post_article.detail',['id'=>$post->id])}}" class="more " data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i style="color: white" class="zmdi zmdi-edit"></i>
                                    </a>
                                     <a class="more " data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
                                        <i style="color: white" class="zmdi zmdi-delete"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                    {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
       </div>

    </div>
</div>

@stop	