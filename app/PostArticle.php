<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MPSluggable as Sluggable;
use App\PostCategory;
use App\User;
class PostArticle extends Model
{
    //

	use Sluggable;

    protected $table='posts';

    protected $fillable=['title','content','status','user_id','category_id','publish_date','featured_images','type','featured_video'];

    public function rel_from_category(){
        return $this->belongsTo(PostCategory::class,'category_id');
    }

    public function rel_from_user(){
        return $this->belongsTo(User::class,'user_id');
    }


     public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }





}
