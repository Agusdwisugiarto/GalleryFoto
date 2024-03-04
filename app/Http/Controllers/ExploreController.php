<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function showAllPosts() {
        $posts = Foto::all();
        return view('index2',compact('posts'));
    }
}
