@extends('layouts.app_db_student')

@section('content')

<div class="container">
    <div class="row">
        @include('partials.banner_user')

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row no-padding-row"">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password"  required="" class="form-control" name="old_password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password"  required="" class="form-control" name="new_password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn wallet_promo_btn pull-right">Update</button>
                </div>
            </div>
        </div>

        
    </div>
</div>

@stop


@section('script')




@stop

