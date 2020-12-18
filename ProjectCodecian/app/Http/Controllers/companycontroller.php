<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\staff;
use App\Models\adresses;

class companycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main=companies::orderBy('id')->get();
        return view('main',compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcompany()
    {
        return view('add-company');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcompany(Request $request)
    {
        $companies=new companies();
        $companies->companyname = $request->companyname;
        $companies->html=$request->html;
        $companies->save();
        return back()->with('company_created','Company has been created successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getId($id)
    {
        $companies=companies::where('id',$id)->first();
        return view('staffmain',compact('companies'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies=companies::find($id);
        return view('edit-company',compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecompany(Request $request)
    {
      $companies=companies::find($request->id);
      $companies->companyname = $request->companyname;
      $companies->html=$request->html;
      $companies->save();
      return back()->with('company_updated','Company has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletecompany($id)
    {
        companies::where('id',$id)->delete();
        return back()->with('company_deleted','Company has been deleted successfully');
    }
}
