<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function artikelRead()
    {
        $dbartikel = DB::table('berita')->get();
        return view('beritaadmin', ["title" => "Artikel", 'dbartikel' => $dbartikel]);
    }

    public function artikelAdd(Request $data)
    {
        $judulartikel = $data->judulArtikel;
        $isiartikel = $data->isiArtikel;
        $authorartikel = $data->authorArtikel;
        $tanggalartikel = $data->tanggalArtikel;

        DB::table('berita')->insert([
            'judul_artikel' => $judulartikel,
            'isi_artikel' => $isiartikel,
            'author_artikel' => $authorartikel,
            'tanggal_artikel' => $tanggalartikel
        ]);

        return redirect('/beritaadmin');
    }

    public function artikelEdit(Request $data)
    {
        $judulartikel = $data->judulArtikel;
        $isiartikel = $data->isiArtikel;
        $authorartikel = $data->authorArtikel;
        $tanggalartikel = $data->tanggalArtikel;

        DB::table('berita')->where('id', $data->id)->update([
            'judul_artikel' => $judulartikel,
            'isi_artikel' => $isiartikel,
            'author_artikel' => $authorartikel,
            'tanggal_artikel' => $tanggalartikel
        ]);

        return redirect('/beritaadmin');
    }

    public function artikelDelete(Request $data)
    {
        DB::table('berita')->where('id', $data->id)->delete();

        return redirect('/beritaadmin');
    }
}
