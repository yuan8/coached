<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\State;
use App\Country;
use App\UserLanguage;
use App\ViewRangeCoachPrice;
use App\CoachAvaible;
use App\CoachDetail;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 //    $attributes = $this->getAttributes();
	// $attributes['first_name']=$attributes['first_name'].'dddddddd';

 //    public function getAllAttributes()
	// {
	//     // $columns = $this->getFillable();
	//     // Another option is to get all columns for the table like so:
	//     // $columns = \Schema::getColumnListing($this->table);
	//     // but it's safer to just get the fillable fields



	//     return $attributes;
	// }

    // public function FeaturedImage(){
    // 	 $this->attributes['d']=$this->attributes['first_name'].' jj';
    // 	 return $this->attributes;
    // }

    
    protected $fillable=['first_name', 'last_name', 'username', 'sex', 'email', 'password', 'address', 'avatar','timezone', 'active_status', 'api_token', 'role', 'remember_token', 'created_at', 'updated_at','country_id','state_id','city'];

    protected $hidden=['api_token','password','active_status'];


    public function Rcountry(){
        return $this->belongsTo(Country::class,'country_id');
    }
    
    public function Rstate(){
        return $this->belongsTo(State::class,'state_id');
    }

    public function Collection_language(){
        return $this->hasMany(UserLanguage::class,'user_id');
    }
























    // coach relational

    public function R_coach_range_price(){
        return $this->hasOne(ViewRangeCoachPrice::class,'coach_id');
    }

     public function R_coach_coach_avaible(){
        return $this->hasMany(CoachAvaible::class,'coach_id')->orderBy('id','DESC');
    }

     public function R_coach_coach_avaible_view(){
        return $this->hasMany(CoachAvaible::class,'coach_id')->orderBy('id','DESC')->select(['day_code as dow','start','end']);
    }


    public function R_coach_coach_detail(){
        return $this->hasOne(CoachDetail::class,'coach_id');
    }




}
