@extends('layouts.app_db_student')
@section('ex_head')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sortablejs@1.6.1/Sortable.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.js"></script>
<!-- <script type="text/javascript">$.fn.cropper.noConflict();</script> -->
@stop

@section('content')

<div class="container">
    <div class="row">
        @include('partials.banner_user')

        <div class="col-md-12">
            <div class="card">
                <form action="{{route('a.update_my_profile')}}" method="post">
                    @csrf
                 <div class="card-header">
                    <h5 class="card-title">Profile Data</h5>
                </div>
                <div class="card-body">
                    <div class="row no-padding-row">
                        <div class="col-md-6">
                            <div class="row no-padding-row">
                                <div class="col-md-6 col-sm-6">
                                     <div class="form-group">
                                        <label>First Name</label>
                                        <input class=" form-control" type="text" required="" name="first_name" placeholder="First Name" value="{{Auth::User()->first_name}}">  
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
                                        <input class=" form-control" type="text" required="" name="last_name" placeholder="Last Name" value="{{Auth::User()->last_name}}">
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
                                        <input value="{{Auth::User()->email}}" disabled="" class=" form-control" type="email" name="email"  required placeholder="Email">
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
                                                <option value="{{$tz->tz}}" {{Auth::User()->timezone==$tz->tz?'selected':''}}>{{$tz->name}}</option>
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
                                        <input class=" form-control" type="text" name="username"  disabled="" placeholder="Username" value="{{Auth::User()->username}}">
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
                                            <option value="0" {{Auth::User()->sex==0?'selected':''}}>Male</option>
                                            <option value="1" {{Auth::User()->sex==1?'selected':''}}>Female</option>
                                        </select>
                                       <span class="invalid-feedback" role="alert">
                                                @if ($errors->has('sex'))
                                                     <strong>{{ $errors->first('sex') }}</strong>
                                                @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control chosen-select" name="country" required="" onchange="searchStates(this,'#state-select')">
                                            <option value="">- Selest Country -</option>
                                            @foreach(MP::getCountryAll() as $country)
                                                <option value="{{$country->id}}" {{Auth::User()->country_id==$country->id?'selected':''}}>{{$country->name}}</option>
                                            @endforeach 
                                         </select>
                                         <span class="invalid-feedback" role="alert">
                                                @if ($errors->has('country'))
                                                     <strong>{{ $errors->first('country') }}</strong>
                                                @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control chosen-select" name="state" required="" id="state-select">
                                            @if(Auth::user()->state_id)
                                                <option value="{{Auth::user()->state_id}}">{{Auth::user()->Rstate->name}}</option>
                                            @else
                                            <option value="">- Selest State -</option>
                                            @endif
                                            
                                         </select>
                                          <span class="invalid-feedback" role="alert">
                                                @if ($errors->has('state'))
                                                     <strong>{{ $errors->first('state') }}</strong>
                                                @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                     <div class="form-group">
                                        <label>City</label>
                                         <input class=" form-control" type="text" required="" name="city" placeholder="City" value="{{Auth::User()->city}}">
                                        <span class="invalid-feedback" role="alert">
                                                @if ($errors->has('city'))
                                                     <strong>{{ $errors->first('city') }}</strong>
                                                @endif
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- end form -->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning btn-sm pull-right">Update</button>
                </div>
            </form>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Discribe about you to interest student</h4>
                    <ul class="nav nav-tabs btn-group row" style="margin-top:20px;">
                        <li class=" col-md-6 "><a data-toggle="tab" class="btn btn-default btn-sm col-md-12 active show" href="#home">Description</a></li>
                        <li class="col-md-6"><a data-toggle="tab" href="#menu1" class="btn btn-default btn-sm col-md-12 "  >Video Opener</a></li>
                      </ul>
                </div>
                <div class="card-body">

                          <div class="tab-content">
                            <div id="home" class="tab-pane fade in active show">
                              <p>Fill decription about you</p>
                              <textarea class="form-control" max="5"></textarea>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Past URL video</label>
                                        <input type="" class="form-control" name="">
                                    </div>
                                </div>
                            </div>

                          </div>
                </div>
                <div class="card-footer">
                        <button class="btn btn-warning btn-sm">Update</button>
                </div>
            </div>
        </div>


         <div class="col-md-12">
            <div class="card">
                <form action="{{route('a.update_my_language')}}" method="post">
                    @csrf
                    <div class="card-header">
                    <h5 class="card-title">Languages</h5>
                    <?php
                        $current_record_languages=Auth::User()->collection_language;
                        $current_record_languages_id=[];
                        foreach($current_record_languages as $l){
                            $current_record_languages_id[]=$l->language_id;
                        }
                    ?>
                    @foreach($current_record_languages as $lg)
                        <label class="label label-primary">{{$lg->parent_language->name}}</label>
                    @endforeach
                   

                    <br>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Select Languages</label>
                                <select  required class="form-control chosen-select" id="selected-languages" multiple="" placeholder="Select your Languages" name="language_id[]">
                                    @foreach(MP::getLanguageAll() as $language)
                                        <option value="{{$language->id}}" {{ (count($current_record_languages) > 0)? (in_array($language->id,$current_record_languages_id)?'selected':''):''}} >
                                            {{$language->name}} 
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                  <div class="card-footer">
                    <button class="btn btn-warning btn-sm">Update</button>
                </div>

                </form>

            </div>
        </div>

        @can('be.coached')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Expertise</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="container-expertise" >
                                <a class="f-l margin-b-7 col-sm-4  col-md-2 col-6 text-center" href="./ddd"  target="_blank">
                                 <div class="box-upload-file">
                                    <img src="{{asset('asset_local/file.png')}}" class="" style="width:60%;">
                                    <h4>Add File</h4>
                                  </div>
                                </a>  
                                <a class="f-l margin-b-7 col-sm-4  col-md-2 col-6  text-center">
                                  <div class="box-upload-file">
                                    <img src="{{asset('asset_local/file.png')}}" class="" style="width:60%;">
                                    <h4>Add File</h4>
                                  </div>
                                </a>  
                                
                            </div>
                              <div class="f-l  margin-b-7 col-sm-4 col-md-2 col-6 text-center">
                                    <div class="box-upload-file">
                                    <img src="{{asset('asset_local/file.png')}}" class="" style="width:60%;">
                                    <h4>Add File</h4>
                                  </div>
                              </div>  
                        </div>
                    </div>
                </div>
                 <div class="card-footer">
                    <button class="btn wallet_promo_btn pull-right">Update</button>
                </div>
            </div>
        </div>
        @endcan

    </div>
</div>

@stop


@section('script')

<script type="text/javascript">
    function searchStates(dom,target){
        var val=dom.value;

        api_coach.get('/search-state/'+val).then(response => {
            var data=response.data;
            var res='';
            if(data.code==200){
                console.log(data.data);
                for(var i in data.data){
                    res+='<option value="'+data.data[i].id+'">'+data.data[i].name+'</option>';
                } 
                $(target).html(res); 
                $(target).trigger("chosen:updated");
            }   

        }).catch(error => {
        console.log(error);
        });
    }



</script>



<script type="text/javascript">

    Sortable.create(document.getElementById('container-expertise'));
</script>


@stop

