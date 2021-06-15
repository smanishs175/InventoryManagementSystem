<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetInventory;

class AssetInventorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset_inventory=AssetInventory::orderBy('id','asc')->paginate(10);
        // return $asset_inventory;
        return view('assetinventory.stock')->with('assetinventory',$asset_inventory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assetinventory.create');
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
            'cost' => 'required',
            'quant'=> 'required',
        ]);
        $assetinventory=new AssetInventory;
        $assetinventory->name=$request->input('name');
        $assetinventory->body=$request->input('body');
        $assetinventory->cost=$request->input('cost');
        $assetinventory->quant=$request->input('quant');
        #$assetinventory->user_id=$request->input('user_id');
        # $assetinventory->user_id=auth()->user()->id;
        $assetinventory->save();
        return redirect('/assetinventory')->with('success','AssetInventory Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assetinventory=AssetInventory::find($id);
        return view('assetinventory.show')->with('assetinventory',$assetinventory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assetinventory=AssetInventory::find($id);
        
        return view ('assetinventory.edit')->with('assetinventory',$assetinventory);
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
            'body' => 'nullable',
            'cost'=>'required',
            'quant'=>'required',
        ]);
        $assetinventory=AssetInventory::find($id);
        $assetinventory->name=$request->input('name');
        $assetinventory->body=$request->input('body');
        $assetinventory->cost=$request->input('cost');
        $assetinventory->quant=$request->input('quant');
        #$asset->user_id=auth()->user()->id;
        $assetinventory->save();
        return redirect('/assetinventory')->with('success','Asset Inventory updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assetinventory=AssetInventory::find($id);
        $assetinventory->delete();
        return redirect('/assetinventory')->with('Success',' deleted');
    }
}
