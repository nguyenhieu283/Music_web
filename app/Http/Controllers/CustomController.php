<?php

namespace App\Http\Controllers;

use App\Music;
use App\Mv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomController extends Controller
{
    public function ngheNhieu(){
    	$first_song = Music::all()->first();
    	$songs = Music::all();
    	$videos = Mv::all();
    	return view('NgheNhieu', compact('first_song', 'songs', 'videos'));
    }
}
