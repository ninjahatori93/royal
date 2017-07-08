<?php

namespace App\Http\Controllers;

use View;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class searchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //search function for home search bar
     public function searchWebsite(){
        // $partnerInfo = partnerInfoModel::find();
        // $partnerName = $partnerInfo->partner_name;
        $keyword = Input::get('search');

        $partnerID = DB::table('partner_info')->where('partner_name', $keyword)->value('partner_account_id');
        ////$partnerID = $partnerID->toArray();
        //print_r($partnerID);
        $partnerImages = DB::table('partner_images')->select('partner_gallery_image','partner_menu_image')->where('partner_account_id', $partnerID)->get();
        $converted =json_decode(json_encode($partnerImages), true);
        $converted = $converted[0];
       // echo $converted['partner_gallery_image'];
        
        return view('support', compact('converted'));
    }
}
