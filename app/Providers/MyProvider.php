<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\PostCategory;
use \Carbon\Carbon;
use Auth;
use App\PostArticle;
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

    public static  function plain_content_text($html,$numchars){
            $html = strip_tags($html);

            // Convert HTML entities to single characters
            $html = html_entity_decode($html, ENT_QUOTES, 'UTF-8');

            // Make the string the desired number of characters
            // Note that substr is not good as it counts by bytes and not characters
            $html = mb_substr($html, 0, $numchars, 'UTF-8');

            // Add an elipsis
            if(strlen($html)>$numchars){
                return $html.= "…";
            }else{
                return $html;
            }
    }

    public static function popular_post(){
        return PostArticle::limit(5)->get();
    }


      public static function next_post_from_coach($coach_id,$id_post,$limit){
        return PostArticle::where('user_id',$coach_id)->where('id','>',$id_post)->where('status',2)->limit($limit)->get();
    }
}
