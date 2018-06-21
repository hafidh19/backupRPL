<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\myaccount;
use Auth;

class myaccountController extends Controller
{
	public function myaccount(){
    return view('user.myaccount');
	}

    public function storemyaccount(Request $request){
       myaccount::create([
            'username'=>request('username'),
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'alamat'=>request('alamat'),
            'rek'=>request('rek'),
            'phoneNumber'=>request('phoneNumber'),
            'slug'=>str_slug(request('name')),
            'country' =>request('country'),
            $gambar=$request->file('gambar')->store('gambars'),
            'avatar'=>$gambar,
            'user_id'=>request('user_id')
        ]);
    return view('user.storemyaccount');
    }
    
	public function editmyaccount()
    {
         $users = User::all();
        return view('user.editmyaccount', compact('users'));
    }

    public function updatemyaccount(Request $request)
    { 
        $this->validate(request(),[
            'gambar'=>'required',
            'username'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'negara'=>'required',
            'no_hp'=>'required',
            'no_rek'=>'required',
        ]);
        
        $users = Auth::user();
        $users->username = $request->input('username');
        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $users->email = $request->input('email');
        $users->avatar = $request->input('gambar');
        $users->country = $request->input('negara');
        $users->phoneNumber = $request->input('no_hp');
        $users->alamat = $request->input('alamat');
        $users->rek = $request->input('no_rek');
        $users->save();
        return redirect('home');
    }
}
