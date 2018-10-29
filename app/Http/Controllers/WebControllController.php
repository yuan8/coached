<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Cmanager as ControllerWebFinal;
use Validator;
use Auth;
use App\PostCategory;
use App\UserLanguage;

use App\PostArticle;
// use Midtrans;

use App\Veritrans\Veritrans;
use App\Veritrans\Midtrans;

class WebControllController extends ControllerWebFinal
{
    public function __construct(){   
        Veritrans::$serverKey = env('MIDTRANS_SERVER_KEY');
        Veritrans::$isProduction = false;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDinamicTokenACCESS(){
        return view('dinamicTokenAxio')->render();
    }


    public function index(Request $request)
    {
    
        return view('index');
    }
    public function GDBcategory(PostCategory $id){
        if(isset($id->id)){
           $posts= PostArticle::where('status',2)->where('category_id',$id->id)->orderBy('id','DESC')->paginate(15);
            return view('student.category')->with('posts',$posts)->with('category',$id); 
        }else{
            abord('404');
        }
    }

    public function GDBupdateMyProfile(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:35',
            'last_name' => 'required|string|max:35',
            'country' => 'required|numeric|exists:countries,id',
            'state' => 'required|numeric|exists:states,id',
            'timezone' => 'required|string|max:255|timezone',
            'sex' => 'required|numeric|max:1',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data=array(
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'timezone'=>$request->timezone,
            'city'=>$request->city,
            'state_id'=>$request->state,
            'country_id'=>$request->country,
            'sex'=>$request->sex
            
        );

        if(Auth::user()){
            Auth::user()->update($data);
        }

        return back();

    }

    public function GDBpost(PostArticle $id)
    {

        $post=$id;
        if(isset($post->id)){
            return view('all_auth.post')->with('post',$post);   
        }else{
            abort(404);
        }

    }


    public function DGBupdate_my_languages(Request $request){

        $validator = Validator::make($request->all(), [
            'language_id' => 'required|array',
            'language_id.*' => 'numeric|required'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $array=$request->language_id;
        $data=array();
        foreach ($array as &$value) {
            array_push($data,array('language_id'=>$value,'user_id'=>Auth::User()->id));
        }

        $exist_data=Userlanguage::where('user_id',Auth::user()->id);
        if( $exist_data->count() >0){
            $exist_data->delete();
        }

        Userlanguage::insert($data);
        return back();

    }


    public function test(){
        error_log('masuk ke snap token adri ajax');
        $midtrans = new Midtrans;
        $transaction_details = array(
            'order_id'          => uniqid(),
            'gross_amount'  => 200000
        );
        // Populate items
        $items = [
            array(
                'id'                => 'item1',
                'price'         => 100000,
                'quantity'  => 1,
                'name'          => 'Adidas f50'
            ),
            array(
                'id'                => 'item2',
                'price'         => 50000,
                'quantity'  => 2,
                'name'          => 'Nike N90'
            )
        ];
        // Populate customer's billing address
        $billing_address = array(
            'first_name'        => "Andri",
            'last_name'         => "Setiawan",
            'address'           => "Karet Belakang 15A, Setiabudi.",
            'city'                  => "Jakarta",
            'postal_code'   => "51161",
            'phone'                 => "081322311801",
            'country_code'  => 'IDN'
            );
        // Populate customer's shipping address
        $shipping_address = array(
            'first_name'    => "John",
            'last_name'     => "Watson",
            'address'       => "Bakerstreet 221B.",
            'city'              => "Jakarta",
            'postal_code' => "51162",
            'phone'             => "081322311801",
            'country_code'=> 'IDN'
            );
        // Populate customer's Info
        $customer_details = array(
            'first_name'            => "Andri",
            'last_name'             => "Setiawan",
            'email'                     => "andrisetiawan@asdasd.com",
            'phone'                     => "081322311801",
            'billing_address' => $billing_address,
            'shipping_address'=> $shipping_address
            );
        // Data yang akan dikirim untuk request redirect_url.
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'           => $items,
            'customer_details'   => $customer_details
        );
    
        try
        {
            $snap_token = $midtrans->getSnapToken($transaction_data);
            //return redirect($vtweb_url);
            echo $snap_token;
        } 
        catch (Exception $e) 
        {   
            return $e->getMessage;
        }


    }


   




    


    
  




}
