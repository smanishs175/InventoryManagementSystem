<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



        
    public function index()
    {
        if(auth()->user()->sign_in==1)
        {
            $members= Member::all();
            return view('members.index')->with('members',$members);
    
        }
        else
        {
            return redirect('/id');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usage()
    {
        $members= Member::all();
        return view('members.usage')->with('members',$members);
    }
    
    public function create()
    {  
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required' ,
            'password' =>'required',
        ]);
        $member=new Member();
        $member->name=$request->input('name');
        $member->email=$request->input('email');
        $member->role=$request->input('role');
        $member->password= Hash::make($request['password']);
        $member->sign_in=0;
        $member->company_name=auth()->user()->company_name;
        //$member->password=$request->input('password');
       # $member->user_id=$request->input('user_id');
        
        $member->save();
        return redirect('/members')->with('success','Member Added');
    }


    public function state($id)
    {
        $member=Member::find($id);
        if(auth()->user()->role==0 || auth()->user()->role==1)
        {
            if($member->status==1 && $member->role!=0)
            {
                $member->status=0;
            }
            else
            {
                $member->status=1;
                

            }
        }
            $member->save();

            $members=Member::all();
            return redirect('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $member= Member::find($id);
        return view('members.show')->with('member',$member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Member::find($id);
        return view('members.id')->with('member',$member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function updatepass(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'role'=>'required'
        ]);
        $member=Member::find($id);
        $member->name=$request->input('name');
        $member->email=$request->input('email');
        $member->role=$request->input('role');
     
        $member->save();
        return redirect('/members')->with('success','Member Updated');
    }
    public function update(Request $request, $id)
    {
        $member=Member::find($id);
            if($member->sign_in==0)
            {    $this->validate($request,[
                'password'=>'required',
                ]);
                $member=Member::find($id);
                $member->password= Hash::make($request['password']);
                $member->sign_in = 1;
                $member->save();
            return redirect('/home');
            }
            else
            { $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'role'=>'required'
                ]);
                $member=Member::find($id);
                $member->name=$request->input('name');
                $member->email=$request->input('email');
                $member->role=$request->input('role');
         
                $member->save();
                return redirect('/members')->with('success','Member Updated');
            }    
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
