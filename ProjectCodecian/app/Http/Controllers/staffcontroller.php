<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companies;
use App\Models\staff;
use App\Models\adresses;

class staffcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($comp_id)
    {
        $staffmain=staff::where('comp_id',$comp_id)->get();
        return view('staffmain',compact('staffmain'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addperson($comp_id)
    {
        $comid=staff::where('comp_id',$comp_id)->get();
        return view('add-person',compact('comid'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createperson(Request $request)
    {
        $staff=new staff();
        $staff->comp_id=$request->comp_id;
        $staff->name=$request->name;
        $staff->lastname=$request->lastname;
        $staff->title=$request->title;
        $staff->email=$request->email;
        $staff->phonenumber=$request->phonenumber;
        $staff->save();
        return back()->with('person_created','Person has been created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff=staff::find($id);
        return view('edit-person',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateperson(Request $request)
    {
      $staff=staff::find($request->id);
      $staff->comp_id=$request->comp_id;
      $staff->name=$request->name;
      $staff->lastname=$request->lastname;
      $staff->title=$request->title;
      $staff->email=$request->email;
      $staff->phonenumber=$request->phonenumber;
      $staff->save();
      return back()->with('person_updated','Person has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteperson($id)
    {
        staff::where('id',$id)->delete();
        return back()->with('person_deleted','Person has been deleted successfully');
    }
}
