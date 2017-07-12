<?php

namespace App\Http\Controllers;

use View;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class homeController extends Controller
{
    //================search function for home search bar====================
     public function searchWebsite(Request $request){
        
        $partnerInfo = array();//initialize array
        $keyword = $request->get('search');//get text from search bar
        
        if(empty($keyword) && !empty(session('keyword'))){//enter when session is set
            $keyword =  session("keyword");
        }else if(!empty($keyword)){//enter when keyword is set
            session()->forget('keyword');
            session(["keyword" => $keyword]);
        }else{//enter when both keyword and session is not set
            $request->session()->flash('alert-danger', 'Please fill the search box to find something.');
            return redirect('/');
        }
        //get partner id & location from keyword
        $partnerInfo = DB::table('partner_info')
                        ->select('partner_account_id','partner_location')
                        ->where('partner_name', $keyword)
                        ->get();
        $partnerInfo =json_decode(json_encode($partnerInfo), true);
        $partnerInfo = $partnerInfo[0];

        $partnerInfo['id'] = $partnerInfo['partner_account_id'];
        $partnerInfo['location'] = $partnerInfo['partner_location'];
        
        //get images from partner id
        $partnerImages = DB::table('partner_images')
                        ->select('partner_gallery_image','partner_menu_image')
                        ->where('partner_account_id', $partnerInfo['id'])
                        ->get();
        $converted =json_decode(json_encode($partnerImages), true);
        $converted = $converted[0];
        
        $partnerInfo['partner_gallery_image'] = $converted['partner_gallery_image'];
        $partnerInfo['partner_menu_image']  = $converted['partner_menu_image'];
        //send all info to the partner view page
         return view('res-profile', compact('partnerInfo'));
        
    }

   //===============function for featured deals in home page=====================
    public function featuredDeals(Request $request){
        //get all partners who are featured
        $profileImages = DB::table('partner_images')
                        ->where('featured', '1')
                        ->get();
        $profileImages =json_decode(json_encode($profileImages), true);
        // echo $posts['partner_profile_image'];die;
        // foreach($posts as $post){
        //   echo $post['partner_profile_image'];
        // }
       
        // $profileImages = DB::table('partner_images')
        //                 ->select('partner_profile_image')
        //                 ->get();

        // $profileImages =json_decode(json_encode($profileImages), true);
        // $profileImages = $profileImages[0];
        // while($row=mysqli_fetch_assoc($profileImages)){
        //     print_r($profileImages);
        // }
        // die;
        // foreach($profileImages as $profileImage){
        //   echo $profileImage['partner_profile_image'].'<br>';
        // }
        // die;
        return view('index', compact('profileImages'));
    }

    //===============function for subscribe option==================
    public function subscribe(Request $request){
	    $email = $request->get('subscribe');
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	        $request->session()->flash('alert-danger', 'Please provide a valid email address!');
	        return redirect('/');
	    }else{
	        DB::table('subscribers')->insert(
	            ['email' => $email ]
	        );
	        return redirect('/');
	    }
    }


    //===============function for login option==================
    public function loginCheck(Request $request){//not used
	    // $loginInfo = loginModel::find();
	    // $user = $loginInfo->username;
	    // $pass = $loginInfo->password.'<br>';

	    $username = $request->get('username');
	    $password = $request->get('password');

	    $customer_info = DB::table('customer_account')
	                    ->select('customer_id')
	                    ->where('customer_username', $username)
	                    ->where('customer_password', $password)
	                    ->get();
	    // $partner_info = DB::table('partner_account')->select('partner_id')->where('partner_username', $username)->where('partner_password', $password)->get();

	    if ($customer_info!=NULL) {
	        session_start();
	       // $_session['customer_id'] = $customer_id;
	        //session(['customer_id' => $customer_info]);
	        return view('userProfile');
	    }
	    // else if($partner_info!=NULL){
	    //    // session(['partner_id' => $partner_info]);
	    //     return view('restaurantaccount');

	    // }
	    // else{
	    //     $message = 'Login credential do not match';
	    //     return view('');
	    // }
    }

    //===================function for all offers========================
    public function allOffers(){
        //get all partners images for offers page
        $profileImages = DB::table('partner_images')
                        ->select('partner_account_id', 'partner_profile_image')
                        ->get();
        $profileImages =json_decode(json_encode($profileImages), true);
        return view('offerspage', compact('profileImages'));
        // return redirect()->route('offers', [$profileImages]);

    }

    //===================function for filter option======================
    public function filterOffers(Request $request){
        //get area from select option
    	$area = $request->get('area');
        //get id by area name 
    	$account_id = DB::table('partner_info')
                        ->select('partner_account_id')
                        ->where('partner_address', $area)
                        ->get();
        $account_id =json_decode(json_encode($account_id), true);
        $account_id = $account_id[0];
        //get all images by the id
        $partner_images = DB::table('partner_images')
                            ->where('partner_account_id', $account_id)
                            ->get();
        $partner_images = json_decode(json_encode($partner_images), true);
        $partner_images = $partner_images[0];
        // return redirect()->route('after_filter', $partner_images);
        return view('offerspage', compact('partner_images'));
    }

    //================profile showing from offers page====================
     public function profileFromOffer($account_id){
        // //get partner location from id
        // $partnerLocation = DB::table('partner_info')
        //                 ->select('partner_location')
        //                 ->where('partner_account_id', $account_id)
        //                 ->get();
        // $partnerLocation =json_decode(json_encode($partnerLocation), true);
        // $partnerLocation = $partnerLocation[0];


        // //get info from partner id
        // $partnerInfo = DB::table('partner_images')
        //                 ->select('partner_gallery_image','partner_menu_image')
        //                 ->where('partner_account_id', $account_id)
        //                 ->get();

        // $partnerInfo =json_decode(json_encode($partnerInfo), true);
        // $partnerInfo = $partnerInfo[0];
        // $partnerInfo['location'] = $partnerLocation['partner_location'];
        // //send all info to the partner view page
        //  return view('res-profile', compact('partnerInfo'));
        


         //get partner id & location from keyword
        $partnerInfo = DB::table('partner_info')
                        ->select('partner_account_id','partner_location')
                        ->where('partner_account_id', $account_id)
                        ->get();
        $partnerInfo =json_decode(json_encode($partnerInfo), true);
        $partnerInfo = $partnerInfo[0];

        $partnerInfo['id'] = $partnerInfo['partner_account_id'];
        $partnerInfo['location'] = $partnerInfo['partner_location'];
        
        //get images from partner id
        $partnerImages = DB::table('partner_images')
                        ->select('partner_gallery_image','partner_menu_image')
                        ->where('partner_account_id', $partnerInfo['id'])
                        ->get();
        $converted =json_decode(json_encode($partnerImages), true);
        $converted = $converted[0];
        
        $partnerInfo['partner_gallery_image'] = $converted['partner_gallery_image'];
        $partnerInfo['partner_menu_image']  = $converted['partner_menu_image'];
        //send all info to the partner view page
         return view('res-profile', compact('partnerInfo'));
    }
}
