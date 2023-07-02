<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function kalender()
    {
        $dbjadwal = DB::table('schedules')->get();
        return view('kalenderliturgi', ["title" => "Kalender Liturgi", 'dbjadwal' => $dbjadwal]);
    }

    public function kalenderDetail($id)
    {
        $dbjadwal = DB::table('schedules')->where('id', $id)->first();
        return view('kalenderdetail', ["title" => "Kalender Detail", 'dbjadwal' => $dbjadwal]);
    }

    public function artikel()
    {
        $post = berita::latest();

        if (request('search')) {
            $post->where('judul_artikel', 'like', '%' . request('search') . '%');
        }

        $dbartikel = DB::table('berita')->get();
        return view('artikelumum', ["title" => "Artikel Umum",'dbartikel' => $dbartikel]);
    }
 
}
