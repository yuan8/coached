<?php

use Illuminate\Database\Seeder;
use App\PostCategory;
class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
    	DB::table('post_categories')->delete();

    	$records=array(
    		array('name'=>'MANAGEMENT','thumb'=>'/img/blog/update-blog/finance.jpg','image'=>'/img/blog/update-blog/finance.jpg'),
    		array('name'=>'BANKING','thumb'=>'/img/blog/update-blog/finance.jpg','image'=>'/img/blog/update-blog/finance.jpg'),
    		array('name'=>'HUMAN RESOURCES','thumb'=>'/img/blog/update-blog/finance.jpg','image'=>'/img/blog/update-blog/finance.jpg'),
    		array('name'=>'POLITICS','thumb'=>'/img/blog/update-blog/finance.jpg','image'=>'/img/blog/update-blog/finance.jpg'),
    		array('name'=>'SOCIETY','thumb'=>'/img/blog/update-blog/finance.jpg','image'=>'/img/blog/update-blog/finance.jpg'),
    	);

		 foreach ($records as $key => $value) {

                $data=$value;
		        $data['id']=$key+1;
                $cat=PostCategory::create($data);
                $cat->save();
		  }
    
    }
}
