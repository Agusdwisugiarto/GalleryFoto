<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index(Request $request){
        $posts = Foto::all();
        return view('index',compact('posts'));
    }

    public function sign_in(Request $request){
        return view('auth.login');
    }

    public function sign_up(Request $request){
        return view('auth.Register');
    }

    public function index_2(Request $request){
        $posts = Foto::all();
        return view('index-2',compact('posts'));
    }

    public function like(Request $request){
        return view('like');
    }

    public function upload(Request $request){
        $name = User::where('id', auth()->user()->id)->get();
        $album = Album::where('users_id', auth()->user()->id)->get();
        return view('upload', compact('album','name'));
    }
    
    public function profil(Request $request){
        $posts = Foto::where('users_id',  auth()->user()->id)->get();
        $name = User::where('id', auth()->user()->id)->get();
        $album = Album::where('users_id', auth()->user()->id)->get();
        return view('profilsaya', compact('name', 'posts', 'album'));
    }

    public function update(Request $request){
        $name = User::where('id', auth()->user()->id)->get();
        return view('profil', compact('name'));
    }
    
    public function ubahpass(Request $request){
        $name = User::where('id', auth()->user()->id)->get();
        return view('Ubahpassword', compact('name'));
    }
    
    public function buatalbum(Request $request){
        $name = User::where('id', auth()->user()->id)->get();
        return view('Buatalbum', compact('name'));
    }

    public function album(Request $request, $id){
        $album = Foto::where('album_id', $id)->get();
        $posts = Foto::where('users_id',  auth()->user()->id)->get();
        $name = User::where('id', auth()->user()->id)->get();
        return view('album', compact('name', 'posts', 'album'));
    }

    public function edit(Request $request, $id){
        $foto = Foto::findorfail($id);
        $name = User::where('id', auth()->user()->id)->get();
        return view('editpostingan', compact('name', 'foto'));
    }

    public function profilother(Request $request, $id){
        if ($id) {
            $user = User::find($id);
        }
        else{
            $user = User::where('id', Auth::user()->id)->first();
        }
        $posts = Foto::where('users_id',  $user->id)->get();
        $album = Album::where('users_id', $user->id)->get();
        $name = User::where('id', $user->id)->get();
        return view('profiluserlain',compact('name','album','posts'));
    }
}
