<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\TestC as DragonBall;
class TestC extends Controller
{
    //

	public static $ballCount = 0;

    public  function __construct() {
        global $ballCount;
    }

	public static function IfoundaBALL(){
        (seft::class)->$ballCount+=1;
		return $ballCount;
	}



	// public function no_tiga(){
	// 	// $array=[];
	// 	// $d= new DragonBall;
	// 	dd($d->IfoundaBALL());

	// }


    public function no_satu(){
    	$inputs="1,2,3,4,5,6";

    	$inputs =explode(",",$inputs);
		$sum=0;
    	foreach ($inputs as $key => $value) {
    		$sum+=$value;
    	}
    	return $sum;
    }


    public function no_dua(Request $request){
    	return view('test_2');

    }

     public function no_enam(Request $request){
     	$i=016;
     	return  $i/2;

    }


}


// no 3

// public - method or attr dapat di akases class lain yang memangilnya
// private - hanya dapat di akases kelas itu sendiri
// protected haya dapat di akases oleh parent class dan class extends


// no 7
// model - handling conection and resource ,relation, data dari database
// cotroller - handling logic process each component (MV dan C lain) untuk menghasilkan output yang di inginkan
// View - handling UI untuk mengintrepretasikan data

// no 8
// 1,2,3,4,5,6,7,8,9,10 = Ten = T

// no 9
// minggu 
// walaupun minggu mereka tidak pasti berbohong tapi ada kemungkinan minggu mereka berbohong 


// no 10
	// april dia menerima 2 tuduhan dan satu dan satu tolakan tuduhan total masih 1

	//  june menerima 1 tuduhan oleg gregory namun di sangah 1 kali total = 0;
	//  jadi april




