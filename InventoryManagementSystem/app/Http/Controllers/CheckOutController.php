<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\CheckOut;
use App\Asset;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkout=CheckOut::all();
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
        $this->validate($request, [
            'user_id_to' => 'required',
        ]);
        $checkout=new CheckOut;
        $checkout->name=$request->input('name');
        $asset->user_id=auth()->user()->id;
        $checkout->user_id=$request->input('user_id_to');
        $checkout->save();
        return redirect('/assets')->with('success','Asset updated');
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
        $this->validate($request, [
            'user_id_to' => 'required',
        ]);
        $checkout=CheckOut::find($id);
        $checkout->name=$request->input('name');
        $asset->user_id=auth()->user()->id;
        $checkout->user_id=$request->input('user_id_to');
        $checkout->save();
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
        //
    }
}
