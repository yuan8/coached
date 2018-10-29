

<?php
$menu_index=false;
$menu_post=false;
$menu_price=false;
$menu_schedule=false;

$menu_sub_article=false;
$menu_sub_video=false;


if(Session::has('menu')){
    switch (Session::get('menu')) {
    case 'index':
        $menu_index=true;
        break;
    case 'post':
        $menu_post=true;
        break;
    case 'price':
        $menu_price=true;
    break;
    case 'schedule':
        $menu_schedule=true;
    break;
    
    default:
        # code...
        break;
    }
}


if(Session::has('sub_menu')){
    switch (Session::get('sub_menu')) {
    case 'article':
        $menu_sub_article=true;
        break;
    case 'video':
        $menu_sub_video=true;
        break;
    
    default:
        # code...
        break;
    }
}

    




?>



@if(Auth::user()->can('ac.dashboard'))

@isset($m)
@can('be.student')
<ul class="navbar-mobile__list list-unstyled">
    <li class="active"><a href="{{route('db.s.index')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
    <li class="has-sub"><a class="js-arrow" href="#"><i class="fas fa-user"></i>Coach</a>
        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
            <li><a href="allcoach.html">All Coach</a></li>
            <li><a href="mycoach.html">My Coach</a></li>
        </ul>
    </li>
    <li><a href="session.html"><i class="fas fa-chart-bar"></i>Session</a></li>
    <li><a href="invoice.html"><i class="fas fa-file-text"></i>Invoice History</a></li>
    <li><a href="feedback.html"><i class="fas fa-star"></i>Feedback</a></li>
    <li><a href="wallet.html"><i class="fas fa-folder-open"></i>Wallet</a></li>
</ul>
@endcan

@endisset
@if(!isset($m))

@can('be.student')
<ul class="list-unstyled navbar__list">
    <li class="active">
        <a href="{{route('db.s.index')}}">
            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
    </li>
    <li class="has-sub">
        <a class="js-arrow" href="#">
            <i class="fas fa-user"></i>Coach</a>
        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
            <li>
                <a href="{{route('db.s.all_coached')}}">All Coach</a>
            </li>
            <li>
                <a href="mycoach.html">My Coach</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="session.html">
            <i class="fas fa-chart-bar"></i>Session</a>
    </li>
    <li>
        <a href="invoice.html">
            <i class="fas fa-file-text"></i>Invoice History</a>
    </li>
    <li>
        <a href="feedback.html">
            <i class="fas fa-star"></i>Feedback</a>
    </li>
    <li>
        <a href="wallet.html">
            <i class="fas fa-folder-open"></i>Wallet</a>
    </li>
</ul>
@endcan

@can('be.coached')
    <ul class="list-unstyled navbar__list">
        <li class="{{$menu_index?'active':''}}">
            <a href="{{route('db.c.index')}}">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <li class="has-sub {{$menu_post?'active':''}}">
            <a class="js-arrow {{$menu_post?'open':''}}" href="#">
                <i class="fas fa-pencil-square-o"></i>Vault</a>
            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list" style="{{$menu_post?'display:block':''}}">
                <li class="{{$menu_sub_article?'active':''}}">
                    <a href="{{route('db.c.post_article')}}">Article</a>
                </li>
                <li class="{{$menu_sub_video?'active':''}}">
                    <a href="{{route('db.c.post_video')}}">Video</a>
                </li>
            </ul>
        </li>
        <li class="{{$menu_price?'active':''}}">
            <a href="{{route('db.c.price')}}">
                <i class="fas fa-tags"></i>Price</a>
        </li>
        <li class="{{$menu_schedule?'active':''}}" >
            <a href="{{route('db.c.schedule')}}">
                <i class="fas fa-calendar"></i>Schedule</a>
        </li>
        <li>
            <a href="session.html">
                <i class="fas fa-chart-bar"></i>Session</a>
        </li>
        <li>
            <a href="session-request.html">
                <i class="fas fa-bullhorn"></i>Session Request</a>
        </li>
        <li>
            <a href="invoice.html">
                <i class="fas fa-file-text"></i>Invoice History</a>
        </li>
        <li>
            <a href="feedback.html">
                <i class="fas fa-star"></i>Feedback</a>
        </li>
        <li>
            <a href="wallet.html">
                <i class="fas fa-folder-open"></i>Wallet</a>
        </li>
    </ul>

@endcan




@endif


@else
    <div class="row bg-white">
        <div class="col-md-12 ">
        <h4>Hello {{Auth::user()->first_name }} {{Auth::user()->last_name }}</h4>
    <h6>if you want full access, please complete your data first!</h6>
    <div class="row " style="margin-top: 15px; ">
        <div class="col-md-11">
            <div class="row">
                <a class="col-md-12 btn wallet_promo_btn " href="{{route('db.s.set.profile')}}">Equip Data</a>
            </div>
        </div>
        <a class="col-md-6 col-sm-6 col-xs-6" href="#">
            <div class="card">
                <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-12">
                        <img src="{{asset('asset_local/info.png')}}" class="col-md-12">
                    </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    About
                </div>
            </div>
        </a>
         <a class="col-md-6 col-sm-6 col-xs-6" href="#"> 
            <div class="card">
                <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-12">
                        <img src="{{asset('asset_local/policy.png')}}" class="col-md-12">
                        
                    </div>
                    </div>
                </div>
                 <div class="card-footer text-center">
                    Policy
                </div>
            </div>
        </a>
        <a class="col-md-6 col-sm-6 col-xs-6" href="#">
            <div class="card">
                <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-12">
                        <img src="{{asset('asset_local/conversation.png')}}" class="col-md-12">
                        
                    </div>
                    </div>
                </div>
                 <div class="card-footer text-center">
                    Question
                </div>
            </div>
        </a>
    </div>
    </div>
    </div>
@endif




