<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Language;
class UserLanguage extends Model
{
    //

    protected $fillable=['language_id','user_id','id'];

    public function parent_language(){
    	return $this->belongsTo(Language::class,'language_id');
    }

    public function g(){
    	return 'd';
    }
}
