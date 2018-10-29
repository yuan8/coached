<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MPSluggable as Sluggable;

class PostCategory extends Model
{
    //
	use Sluggable;

	protected $table="post_categories";

	protected $fillable=['name','thumb','image','slug'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
