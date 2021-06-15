<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetStock;

class AssetStocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset_stock=AssetStock::orderBy('id','asc')->paginate(10);
        // return $asset_stock;
        return view('assetstock.stock')->with('assetstock',$asset_stock);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assetstock.create');
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
        $assetstock=new AssetStock;
        $assetstock->name=$request->input('name');
        $assetstock->body=$request->input('body');
        $assetstock->cost=$request->input('cost');
        $assetstock->quant=$request->input('quant');
        #$assetstock->user_id=$request->input('user_id');
        # $assetstock->user_id=auth()->user()->id;
        $assetstock->save();
        return redirect('/assetstock')->with('success','AssetStock Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assetstock=AssetStock::find($id);
        return view('assetstock.show')->with('assetstock',$assetstock);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assetstock=AssetStock::find($id);
        
        return view ('assetstock.edit')->with('assetstock',$assetstock);
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
        $assetstock=AssetStock::find($id);
        $assetstock->name=$request->input('name');
        $assetstock->body=$request->input('body');
        $assetstock->cost=$request->input('cost');
        $assetstock->quant=$request->input('quant');
        #$asset->user_id=auth()->user()->id;
        $assetstock->save();
        return redirect('/assetstock')->with('success','Asset Stock updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assetstock=AssetStock::find($id);
        $assetstock->delete();
        return redirect('/assetstock')->with('Success',' Deleted');
    }
}
