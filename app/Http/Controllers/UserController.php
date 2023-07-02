<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\berita;

class UserController extends Controller
{
    public function home(Request $data)
    {
        $dbusers = DB::table('users')->where('username', $data->username)->first();
        return view('home', [
            "title" => "Home",
            "dbuser" => $dbusers
        ]);
    }

    public function index()
    {
        return view('welcome', [

            "title" => "Login"

        ]);
    }

    public function homeadmin()
    {
        return view('homeadmin', [

            "title" => "Home"

        ]);
    }

    public function berita()
    {
        return view('berita', [

            "title" => "Berita"

        ]);
    }

    public function jadwal()
    {
        return view('jadwalharian', [

            "title" => "Jadwal Harian"

        ]);
    }

    // public function kalender()
    // {
    //     return view('kalenderliturgi', [

    //         "title" => "Kalender Liturgi"

    //     ]);
    // }

    public function pojokajaran()
    {
        return view('pokokajaran', [

            "title" => "Pokok Ajaran"

        ]);
    }

    public function profilgkj()
    {
        return view('lambanggkj', [

            "title" => "Profil GKJ"

        ]);
    }

    public function profilklasis()
    {
        return view('profilklasis', [

            "title" => "Profil Klasis"

        ]);
    }

    public function profilmars()
    {
        return view('profilmars', [

            "title" => "Profil Mars"

        ]);
    }

    public function profilstrukturgereja()
    {
        return view('profilstrukturgereja', [

            "title" => "Profil Struktur Gereja"

        ]);
    }

    public function tatagereja()
    {
        return view('tatagereja', [

            "title" => "Tata Gereja"

        ]);
    }

    public function artikelpojok()
    {
        return view('artikelpojok', [

            "title" => "Artikel Pojok"

        ]);
    }

    // public function artikelumum()
    // {
    //     return view('artikelumum', [

    //         "title" => "Artikel Umum"

    //     ]);
    // }

    public function kategorigereja()
    {
        return view('kategorigereja', [

            "title" => "Kategori Gereja"

        ]);
    }

    public function kategoriklasis()
    {
        return view('kategoriklasis', [

            "title" => "Kategori Klasis"

        ]);
    }

    public function kategorilembaga()
    {
        return view('kategorilembaga', [

            "title" => "Kategori Lembaga"

        ]);
    }

    public function kategorisinode()
    {
        return view('kategorisinode', [

            "title" => "Kategori Sinode"

        ]);
    }

    public function isiberitasinode()
    {
        return view('isiberitasinode', [

            "title" => "Isi Berita Sinode"

        ]);
    }

    public function profillembaga()
    {
        return view('profillembaga', [

            "title" => "Lembaga"

        ]);
    }
}
