
@extends('layouts.app_student')


@section('content')
<div class="container">
    <div class="login-wrap register-form">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{asset('asset_db_student/images/icon/logo.png')}}" alt="CoolAdmin">
                </a>
            </div>
            <div class="login-form">
                <form action="{{isset($for_coach)?route('register.coached.store'):route('register.store')}}" method="post">
                	@csrf
                	<div class="row no-padding-row">
                		<div class="col-md-6">
                			<div class="row no-padding-row">
                				<div class="col-md-6 col-sm-6">
									 <div class="form-group">
										<label>First Name</label>
										<input class=" form-control" type="text" required="" name="first_name" placeholder="First Name" value="{{old('first_name')}}">	
		                                    <span class="invalid-feedback" role="alert">
		                               			@if ($errors->has('first_name'))
		                                       		 <strong>{{ $errors->first('first_name') }}</strong>
		                                		@endif
		                                    </span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
								 	<div class="form-group">
										<label>Last Name</label>
										<input class=" form-control" type="text" required="" name="last_name" placeholder="Last Name" value="{{old('last_name')}}">
										<span class="invalid-feedback" role="alert">
		                               			@if ($errors->has('last_name'))
		                                       		 <strong>{{ $errors->first('last_name') }}</strong>
		                                		@endif
		                                </span>
									</div>
								
								</div>

								<div class="col-md-12">
									<div class="form-group">
				                        <label>Email Address</label>
				                        <input value="{{old('email')}}" class=" form-control" type="email" name="email"  required placeholder="Email">
				                        <span class="invalid-feedback" role="alert">
		                               			@if ($errors->has('email'))
		                                       		 <strong>{{ $errors->first('email') }}</strong>
		                                		@endif
		                                </span>
				                    </div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
				                        <label>Timezone</label>
				                        <select  class=" form-control chosen-select" type="text" name="timezone"  required placeholder="timezone">
				                        	<option value="">- Timezone -</option>
				                        	@foreach(MP::getTimezoneAll() as $tz )
				                        		<option value="{{$tz->tz}}" {{old('timezone')==$tz->tz?'selected':''}}>{{$tz->name}}</option>
				                        	@endforeach
				                        </select>
				                       <span class="invalid-feedback" role="alert">
		                               			@if ($errors->has('timezone'))
		                                       		 <strong>{{ $errors->first('timezone') }}</strong>
		                                		@endif
		                                </span>
				                    </div>
								</div>
                			</div>
                		</div>
                		<div class="col-md-6">
                			<div class="row no-padding-row">
                				<div class="col-md-6">
                					<div class="form-group">
				                        <label>Username</label>
				                        <input class=" form-control" type="text" name="username" placeholder="Username" value="{{old('username')}}">
				                          <span class="invalid-feedback" role="alert">
		                               			@if ($errors->has('username'))
		                                       		 <strong>{{ $errors->first('username') }}</strong>
		                                		@endif
		                                </span>
				                    </div>
                				</div>
                				<div class="col-md-6">
                					<div class="form-group">
				                        <label>Sex</label>
				                        <select class=" form-control chosen-select" type="text" name="sex"  >
				                        	<option value="0" {{old('sex')==0?'selected':''}}>Male</option>
				                        	<option value="1" {{old('sex')==1?'selected':''}}>Female</option>
				                        </select>
				                       <span class="invalid-feedback" role="alert">
		                               			@if ($errors->has('sex'))
		                                       		 <strong>{{ $errors->first('sex') }}</strong>
		                                		@endif
		                                </span>
				                    </div>
                				</div>
                				<div class="col-md-12">
                					 <div class="form-group">
				                        <label>Password</label>
				                        <input class=" form-control" type="password" name="password"  required placeholder="Password">
				                         <span class="invalid-feedback" role="alert">
		                               			@if ($errors->has('password'))
		                                       		 <strong>{{ $errors->first('password') }}</strong>
		                                		@endif
		                                </span>
				                    </div>
                				</div>
                				<div class="col-md-12">
                					 <div class="form-group">
				                        <label>Retype Password</label>
				                        <input class=" form-control" type="password" name="password_confirmation"  required placeholder="Password">
				                    </div>
                				</div>
                			</div>
                		</div>
                	</div>
                  
                    <div class="row no-padding-row">
                    	<div class="col-md-12">
                    		<div class="login-checkbox">
	                        <label>
	                            <span><input type="checkbox"  required name="aggree"></span> <span><a href="">Agree the terms and policy</a></span>
	                        </label>
                    		</div>
                    	</div>
                    </div>
                    <div class="login">
                        <button type="submit" class="login_btn" >register</button>
                    </div>
                  <!--   <div class="social-login-content">
                        <div class="login">
                            <a class="facebook_btn" href="index.html">register with facebook</a>
                        </div>
                    </div> -->
                </form>
                <div class="register-link">
                    <p>
                        Already have account?
                        <a href="{{route('login')}}">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>	

@stop