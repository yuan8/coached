<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachDetail extends Model
{
    //

	protected $table='coach_details';
    protected $fillable=['description','opener_video','coach_id'];


}
