@extends('layouts.app_student')

@section('content')
<div class="container">
    <div class="login-wrap ">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{asset('asset_db_student/images/icon/logo.png')}}" alt="CoolAdmin">
                </a>
            </div>

            <div class="login-form">
            	<div class="row no-padding-row">
            		<div class="col-md-12">
            			<h4>Check your mail "<a href="#">{{$user->email}}</a>" to confirmation activation account</h4>
            		</div>
            	</div>

            </div>
        </div>
    </div>
</div>

@stop