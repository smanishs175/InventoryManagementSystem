<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use Session;

class AssetsController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $assets=Asset::orderBy('id','asc')->paginate(10);
        return view('assets.assets')->with('assets',$assets);
    }

    public function count()
    {
        $c_assets=DB::SELECT('SELECT count(id) from assets');
        return $c_assets;
        return view('groups.group')->with('count_assets',$count_assets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assets.create');
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
            'cost' =>'required',
            'group'=>'nullable'
        ]);
        $asset=new Asset;
        $asset->name=$request->input('name');
        $asset->body=$request->input('body');
        $asset->cost=$request->input('cost');
        $asset->group=$request->input('group');
        //$asset->user_id=auth()->user()->id;
        $asset->save();
        return redirect('/assets')->with('success','Asset Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asset=Asset::find($id);
        return view('assets.show')->with('asset',$asset);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset=Asset::find($id);
        return view('assets.edit')->with('asset',$asset);
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
        ]);
        $asset=Asset::find($id);
        $asset->name=$request->input('name');
        $asset->body=$request->input('body');
        $asset->cost=$request->input('cost');
        $asset->group=$request->input('group');
        //$asset->user_id=auth()->user()->id;
        $asset->save();
        return redirect('/assets')->with('success','Asset updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset=Asset::find($id);
        $asset->delete();
        return redirect('/assets')->with('Success',' Deleted');
    }
}
