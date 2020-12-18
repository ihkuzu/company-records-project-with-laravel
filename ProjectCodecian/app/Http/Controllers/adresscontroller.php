<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\staff;
use App\Models\adresses;


class adresscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($comp_id)
    {
      $adressmain=adresses::where('comp_id',$comp_id)->get();
      return view('adressmain',compact('adressmain'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addadress($comp_id)
    {
      $adress=adresses::where('comp_id',$comp_id)->get();
      return view('add-adress',compact('adress'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createadress(Request $request)
    {
        $adresses=new adresses();
        $adresses->comp_id=$request->comp_id;
        $adresses->adress=$request->adress;
        $adresses->long=$request->long;
        $adresses->lat=$request->lat;
        $adresses->save();
        return back()->with('adress_created','Adress has been created succesfully');
    }

}
