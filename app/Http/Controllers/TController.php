<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\post;
use App\User;
class TController extends Controller
{   
    public function create(Post $post){
        $users = User::where('id',$post->user_id)->get();
        return view('t.create',compact('post','id','users')); }
        
           

    public function store(Request $request)
    {
        $this->validate(request(),[
            
            'jbarang'=>'required|numeric',
            
        ]);
            
        transaksi::create([
            
            'jbarang'=>request('jbarang'),
            'id_pemilik'=>request('id_pemilik'),
            'id_peminjam'=>request('id_peminjam'),
            'status'=>request('status')
        ]);
            
        return redirect('/home')->with('success','Data Berhasil Ditambahkan');
    }
}
