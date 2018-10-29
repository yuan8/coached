<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachAvaible extends Model
{
    //

    protected $table='coach_availabilities';
    protected $fillable=['day_code','start','end','coach_id'];
}
