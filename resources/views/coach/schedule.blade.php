
@extends('layouts.app_db_student')

@section('search')
   
@stop

@section('script')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar-scheduler/1.9.4/scheduler.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar-scheduler/1.9.4/scheduler.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.21/moment-timezone-with-data-2012-2022.js"></script>
<style type="text/css">
	.fc-time-grid .fc-event,
	.fc-time-grid .fc-bgevent {
		width: calc(100% + 4px);
		margin-left: -2px;
		border-radius: 0px;
	}
</style>

<script type="text/javascript">
	<?php 
		$businessHours=Auth::user()->R_coach_coach_avaible_view;
	?>
	var select_goal=true;
	// s
	var businessHours=[];

	var businessHours_sourcse={!!$businessHours->toJson()!!};
	 for (var i = businessHours_sourcse.length - 1; i >= 0; i--) {	
	 	businessHours.push({
	 		dow:[businessHours_sourcse[i].dow],
	 		start:(businessHours_sourcse[i].start).substring(0,5),
	 		end:(businessHours_sourcse[i].end).substring(0,5)
	 	});
	 }




		$(function() { // document ready 
			$('#calendar-coach').fullCalendar({
				defaultView: 'agendaWeek',
				selectable: false,
				schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
				eventLimit: true, // allow "more" link when too many events
				allDaySlot: false,
				editable: false,
				height:"parent",
				selectOverlap:false
				,
				selectAllow: function(selectInfo) {
					var duration = moment.duration(selectInfo.end.diff(selectInfo.start));
					console.log(selectInfo.end);
					if((duration.asHours() <= 1)&&(select_goal)){
						return true;
					}else{
						return false;
					}

				},
				selectMinDistance: 0,
				header: {
					left: 'prev',
					center: 'title',
					right: 'next'
				},
				eventMouseover: function(event, jsEvent, view){},
				validRange: function(nowDate) {
					nowDate = nowDate.clone().add(-1, 'months');
					return {
						start: nowDate,
						end: nowDate.clone().add(2, 'months')
					};
				},
				dayRender:function( date, cell ) { 
					console.log(date.fotmat('dd.M.Y'));
				},
				@if(count($businessHours)>0)
				businessHours:businessHours,
				
				// 	dow: [0,1,2,3,4,5,6,7], // Monday - Friday
				// 	start: '08:00',
				// 	end: '12:00',
				// }, {
				// 	dow: [4, 5], // Monday - Friday (if adding lunch hours)
				// 	start: '13:00',
				// 	end: '17:00',
				// }],
				selectConstraint: "businessHours",
				@endif
				resources: [{
					id: 'b',
					title: '',
					eventColor: 'green'
				}, ],
				events: [{
						id: '2',
						resourceId: 'b',
						start: '2018-10-27T09:00:00',
						end: '2018-10-27T10:00:00'
					},
					{
						id: '3',
						resourceId: 'b',
						start: '2018-11-28T12:00:00',
						end: '2018-11-28T06:00:00'
					},
					{
						id: '4',
						resourceId: 'b',
						start: '2018-10-29T07:30:00',
						end: '2018-10-29T09:30:00'
					},
					{
						id: '5',
						resourceId: 'b',
						start: '2018-10-29T10:00:00',
						end: '2018-10-29T15:00:00'
					}
				],
				
			});
		});


</script>


@stop
@section('content')
<section class="content-header">
      <h4>
        Schedule 
        <small>{{Auth::User()->timezone}}</small>
      </h4>
</section>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
			<form action="{{route('db.c.schedule.availabel.store')}}" method="post">
				@csrf
				<div class="card-header">
					<h5>Create New Availability</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Day</label>
								<select class="form-control chosen-select" required="" name="day_code">
									<option value="0">Sunday</option>
									<option value="1">Monday</option>
									<option value="2">Tuesday</option>
									<option value="3">Wednesday</option>
									<option value="4">Thursday</option>
									<option value="5">Friday</option>
									<option value="6">Saturday</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Start (24 hours)</label>
								<input type="time" name="start" required="" value="" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>End (24 hours)</label>
								<input type="time" name="end" required="" value="" class="form-control">

							</div>
						</div>
					</div>
				</div>	
				<div class="card-footer">
					<button type="submit" class="btn btn-primary btn-sm">Create</button>
				</div>	
			</form>

			</div>
			
		</div>



		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5>Availability List</h5>
				</div>
            	<div class="card-body">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="table-responsive table-data" style="height:300px;min-height: auto; ">
			                    <table class="table" >
			                        <thead>
			                            <tr class="text-center">
			                               
			                                <td style="width:30%">Day</td>
			                                <td>Start</td>
			                                <td>End</td>
			                                <td></td>

			                            </tr>
			                        </thead>
			                        <tbody>
			                        	@foreach (Auth::user()->R_coach_coach_avaible as $key => $avaible)
			                        	<tr>
			                        		<td>
			                        			<div class="form-group">
			                        				<label>Day</label>
			                        				<select class="form-control chosen-select" name="day_code">
			                        						<option value="0" {{($avaible->day_code + 1)==1?'selected':''}}>Sunday</option>
															<option value="1" {{$avaible->day_code==1?'selected':''}}>Monday</option>
															<option value="2" {{$avaible->day_code==2?'selected':''}}>Tuesday</option>
															<option value="3" {{$avaible->day_code==3?'selected':''}}>Wednesday</option>
															<option value="4" {{$avaible->day_code==4?'selected':''}}>Thursday</option>
															<option value="5" {{$avaible->day_code==5?'selected':''}}>Friday</option>
															<option value="6" {{$avaible->day_code==6?'selected':''}}>Saturday</option>
			                        				</select>
			                        			</div>
			                        		</td>
			                        		<td>
			                        			<div class="form-group">
													<label>Start (24 hours)</label>
													<input type="time" name="start" required="" value="{{$avaible->start}}" class="form-control">
												</div>
			                        		</td>
			                        		<td>
			                        			<div class="form-group">
													<label>End (24 hours)</label>
													<input type="time" name="end" required="" value="{{$avaible->end}}" class="form-control">
												</div>
			                        		</td>
			                        	</tr>
			                        		
			                        	@endforeach
			                             
			                                                        
			                        </tbody>
			                    </table>
			                </div>
			                    
			                    </div>
			                </div>
			           </div>
		       </div>	
		</div>





		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5>Current Schedule</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12" style="min-height: 800px;">
							<div id="calendar-coach"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop	