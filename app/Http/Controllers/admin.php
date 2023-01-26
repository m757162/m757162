<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin_panel;

class admin extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $datas=admin_panel::all();
        return view('admin.adminPanel',['user_data'=>$datas]);

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:50',
        ]);
        admin_panel::Create([
           "name"=>$request->name
       ]);

      return redirect('datainsert')->with('status','data insert successfully');
        
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userdata=admin_panel::find($id);
        return view('admin.data_update',['userdatapass'=>$userdata]);
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
        $userdata=admin_panel::find($id);
        $userdata->name=$request->name;
        $request->validate([
            'name'=>'required|min:3|max:50',
        ]);
        $userdata->update();
        return redirect()->back()->with('status','data update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $userdata=admin_panel::find($id);  
        $userdata->delete();
        return redirect()->back();
    }
}
