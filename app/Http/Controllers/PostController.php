<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;
use App\User;
use Auth;

class PostController extends Controller
{   

    public function create(){
        $categories = category::all();
        $users = User::all();
        return view('post.create',compact('categories','users'));
    }
    public function show (Post $post) {
        return view('post.show', compact('post')); }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'nbarang'=>'required',
            'jbarang'=>'required|numeric',
            'hbarang'=>'required|numeric',
            'deskripsi'=>'required',
            'gambar'=>'required|image',
        ]);
            
        Post::create([
            'nbarang'=>request('nbarang'),
            'jbarang'=>request('jbarang'),
            'hbarang'=>request('hbarang'),
            'deskripsi'=>request('deskripsi'),
            'slug'=>str_slug(request('nbarang')),
            'category_id' =>request('category_id'),
            $gambar=$request->file('gambar')->store('gambars'),
            'gambar'=>$gambar,
            'user_id'=>request('user_id')
        ]);
            
        return redirect('/home')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $categories = category::all();
        $users = User::all();
        $post = Post::find($id);
        return view('post.edit', compact('post','categories','users'));
    }

    public function update($id,Request $request)
    {   
        $this->validate(request(),[
            'nbarang'=>'required',
            'jbarang'=>'required|numeric',
            'hbarang'=>'required|numeric',
            'deskripsi'=>'required',
            'gambar'=>'required|image',
        ]);      

        $post = Post::find($id);
        $categories = category::all();
        $users = User::all();
        $post -> update([
            'nbarang'=>request('nbarang'),
            'jbarang'=>request('jbarang'),
            'hbarang'=>request('hbarang'),
            'deskripsi'=>request('deskripsi'),
            'slug'=>str_slug(request('nbarang')),
            'category_id' =>request('category_id'),
            $gambar=$request->file('gambar')->store('gambars'),
            'gambar'=>$gambar,
            'user_id'=>request('user_id')
        ]);
        return redirect('home')->with('success','Post Berhasil Di Edit');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('home')->with('danger','Post Berhasil Di Delete');
    }

    public function furniture(){
        $id = Auth::user()->id;
        $posts=post::all();
        $posts=post::where('category_id', 1)-> get();
        return  view('post.indextoreadfurniture',compact('posts','id')); }

    public function showfurniture (Post $post) {
        return view('post.showfurniture', compact('post','id')); }
    
    public function kostum(){
        $id = Auth::user()->id;
        $posts=post::all();
        $posts=post::where('category_id', 2)-> get();
        return  view('post.indextoreadkostum',compact('posts','id')); }
    public function showkostum (Post $post) {
        return view('post.showkostum', compact('post','id')); }

    public function tenda(){
        $id = Auth::user()->id;
        $posts=post::all();
       $posts=post::where('category_id', 5)-> get();
        return  view('post.indextoreadtenda',compact('posts','id')); }
    public function showtenda (Post $post) {
        return view('post.showtenda', compact('post','id')); }

    public function musik(){
        $id = Auth::user()->id;
        $posts=post::all();
       $posts=post::where('category_id', 3)-> get();
        return  view('post.indextoreadmusik',compact('posts','id')); }
    public function showmusik (Post $post) {
        return view('post.showmusik', compact('post','id')); }
    
    public function elektronik(){
        $id = Auth::user()->id;
       $posts=post::where('category_id', 4)-> get();
        return  view('post.indextoreadelektronik',compact('posts','id')); }
    public function showelektronik (Post $post) {
        return view('post.showelektronik', compact('post','id')); }
    public function transaction (Post $post) {
        $users = User::where('id',$post->user_id)->get();
        return view('post.transaction',compact('post','id','users')); }

        
}