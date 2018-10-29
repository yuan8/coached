<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\PostCategory;
use \Carbon\Carbon;
use Auth;
class MyProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public static function setTime($time, $timezone=null){
         if($timezone==null){
            $timezone=Auth::user()->timezone;
        }

        $date=Carbon::createFromFormat('Y-m-d H:i:s', $time, $timezone);
        $date->setTimezone(config('app.timezone'));
        return $date;
    }

    public static function getTime($time,$timezone=null){
        if($timezone==null){
            $timezone=Auth::user()->timezone;
        }
        return (Carbon::parse($time)->setTimezone($timezone));

    }


    public static function getTimezoneAll(){
        $timezones=DB::table('timezones')->orderBy('name','ASC')->get();
        return $timezones;
    }

    public static function getCountryAll(){
        $countries=DB::table('countries')->orderBy('name','ASC')->get();
        return $countries;
    }

    public static function getLanguageAll(){
        $countries=DB::table('languages')->orderBy('name','ASC')->get();
        return $countries;
    }

    public static  function getPostCategoryAll(){
        return PostCategory::orderBy('name','ASC')->get();
    }
}
