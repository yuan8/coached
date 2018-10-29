

@extends('layouts.app_db_student')

@section('search')
   

@section('content')
<section class="content-header">
      <h4>
        Price 
        <small>{{Auth::User()->timezone}}</small>
      </h4>
</section>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form action="{{route('db.c.price.store')}}" method="post">
					@csrf
				<div class="card-header">
					<h4>Create New Price</h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Hours</label>
								<select class="form-control chosen-select" required="" name="hours">
									<option value="30">0.5 (30 minutes)</option>
									<option value="60">1 (60 minutes)</option>
									<option value="90">1.5 (90 minutes)</option>
									<option value="120">2 (120 minutes)</option>
									<option value="150">2.5 (150 minutes)</option>
									<option value="180">3 (180 minutes)</option>
									<option value="210">3.5 (210 minutes)</option>
									<option value="240">4 (240 minutes)</option>
									<option value="270">4.5 (270 minutes)</option>
									<option value="300">5 (300 minutes)</option>
									<option value="330">5.5 (330 minutes)</option>
									<option value="360">6 (360 minutes)</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Price (IDR)</label>
								<input type="number" name="price" required="" value="0" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" placeholder="" name="description" required=""></textarea>
							</div>
						</div>
					</div>
				</div>	
				<div class="card-footer">
					<button class="btn btn-primary btn-sm">Create</button>
				</div>	
				</form>		
			</div>
			
		</div>


		<div class="col-md-12">
			<div class="card">
            	<div class="card-body">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="table-responsive table-data">
			                    <table class="table">
			                        <thead>
			                            <tr class="">
			                               
			                                <td style="width: 25%">Hours</td>
			                                <td style="width: 30%">Price</td>
			                                <td style="width: 30%">Description</td>
			                                <td></td>

			                            </tr>
			                        </thead>
			                        <tbody>
			                        	@foreach($prices as $price)
			                        	<tr class="">
			                        	<form action="{{route('db.c.price.update',['id'=>$price->id])}}" method="post">
			                        		@csrf
			                        		@method('PUT')
			                        		<td>
			                        			<p>{{$price->in_minutes/60}} Hours</p>
			                        			<select class="form-control chosen-select" required="" name="hours">
			                        				@for($var=1;$var < 13; $var++)
													<option value="{{$var/2*60}}" {{$price->in_minutes==($var/2*60)?'selected':''}}>{{$var/2}} Hours ({{$var/2*60}}m)</option>
													@endfor
													
												</select>
			                        	
			                        		</td>
			                        		<td>
			                        			<p>Rp. {{ number_format($price->price,2,",",".")}}</p>
			                        			<input type="number" class="form-control" name="price" value="{{$price->price}}" required="">

			                        		</td>
			                        		<td>
			                        			<p>Description</p>
			                        			<textarea class="form-control" required="" name="description" style="font-size: 12px;">{{$price->description}}</textarea>
			                        		</td>
			                        		<td>
		                                    <button type="submit" class="more " data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
		                                        <i style="color: white" class="zmdi zmdi-edit"></i>
		                                    </button>
		                                     <a class="more " data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
		                                        <i style="color: white" class="zmdi zmdi-delete"></i>
		                                    </a>
                                    
			                        		</td>


			                        	</form>
			                        	</tr>

			                        	@endforeach
			                             
			                                                        
				                    </table>
				                </div>
			                    
			                    </div>
			                </div>
			           </div>
		       </div>	
		</div>




	</div>
</div>

@stop	