<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //

    protected $table='coach_prices';
    protected $fillable=['id','price','in_minutes','description','coach_id'];
}
