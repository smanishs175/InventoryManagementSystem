<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function change()
    {
        if(auth()->user()->sign_in == 0)
        {    $id=auth()->user()->id;
            //$member = Member::find($id);
            //$member->sign_in = 1;
            //$member->save();

            return view('pages.change')->with('member_id',$id);
        }
            else
                {return view('home');}
    }
}
