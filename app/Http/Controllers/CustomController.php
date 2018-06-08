<?php

namespace App\Http\Controllers;

use DB;

use App\Music;
use App\Mv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomController extends Controller
{
    public function ngheNhieu(){
        $first_song = DB::table('musics')->where('national','Việt Nam')->first();
        $songs = DB::table('musics')->where('national','Việt Nam')->get();
        $videos = Mv::all();
        return view('NgheNhieu', compact('first_song', 'songs', 'videos'));
    }

    public function ngheNhieuCountry($country){
        if ($country) {
            
        }
        switch ($country) {
            case 'vn':
                $first_song = DB::table('musics')->where('national','Việt Nam')->first();
                $songs = DB::table('musics')->where('national','Việt Nam')->get();
                break;
            case 'tq':
                $first_song = DB::table('musics')->where('national','Trung Quốc')->first();
                $songs = DB::table('musics')->where('national','Trung Quốc')->get();
                break;
            case 'am':
                $first_song = DB::table('musics')->where('national','Việt Nam')->first();
                $songs = DB::table('musics')->where('national','Việt Nam')->get();
                break;
            case 'hq':
                $first_song = DB::table('musics')->where('national','Việt Nam')->first();
                $songs = DB::table('musics')->where('national','Việt Nam')->get();
                break;
        }
        $videos = Mv::all();
        return view('NgheNhieu', compact('first_song', 'songs', 'videos'));
    }
}
