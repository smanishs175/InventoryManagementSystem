<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Asset;
use App\AssetStock;
use App\AssetInventory;
use DB;
use Session;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Group::orderBy('id','asc')->paginate(10);
        $c_assets=Asset::where('group','!=',NULL)->count();
        $c_assetstock=AssetStock::where('id','!=',NULL)->count();
        $c_asseti=AssetInventory::where('id','!=',NULL)->count();
        
        return view('group.groups')->with('groups',$groups)->with('c_assets',$c_assets)->with('c_assetstock',$c_assetstock)->with('c_asseti',$c_asseti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'body' => 'nullable',
        ]);
        $group=new Group;
       // $asset->group=$group->name;
        $group->name=$request->input('name');
        $group->body=$request->input('body');
        $group->save();
    
        return redirect('/group')->with('success','Group Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group= Group::find($id);
    
        return view('group.show')->with('group',$group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group=Group::find($id);
        return view('group.edit')->with('group',$group);
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
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            'asset'=>'nullable',
            'assetstock'=>'nullable',
            'assetinventory'=>'nullable',
        ]);
        $group=Group::find($id);
        $group->name=$request->input('name');
        $group->body=$request->input('body');
        $group->asset=$request->input('asset');
        $group->assetinventory=$request->input('assetinventory');
        $group->assetstock=$request->input('assetstock');
        $group->save();
        return redirect('/group')->with('success','group Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group=Group::find($id);
        $group->delete();
        return redirect('/group')->with('Success',' Deleted');
    }
}
