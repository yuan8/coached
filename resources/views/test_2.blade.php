
@extends('layouts.app_student')

@section('script')


@stop

@section('content')

<div class="container">
	<div class="card">
		<form action="" method="post">
			<div class="card-body">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" required="" class="form-control"> 				
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" required="" class="form-control"> 	
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type='tel'  class="form-control" pattern='[\+]\d{13}' title='Phone Number (Format: +6282257120183)'>	
				</div>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">submit</button>
			</div>
		</form>
	</div>
</div>
@stop