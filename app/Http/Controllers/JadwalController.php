<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwalRead()
    {
        $dbjadwal = DB::table('schedules')->get();
        return view('homeadmin', ["title" => "Kalender Liturgi", 'dbjadwal' => $dbjadwal]);
    }

    public function jadwalAdd(Request $data)
    {
        $namakegiatan = $data->namaKegiatan;
        $deskripsikegiatan = $data->deskripsiKegiatan;
        $tanggalkegiatan = $data->tanggalKegiatan;

        DB::table('schedules')->insert([
            'nama_kegiatan' => $namakegiatan,
            'deskripsi_kegiatan' => $deskripsikegiatan,
            'tanggal_kegiatan' => $tanggalkegiatan
        ]);

        return redirect('/homeadmin');
    }

    public function jadwalEdit(Request $data)
    {
        $namakegiatan = $data->namaKegiatan;
        $deskripsikegiatan = $data->deskripsiKegiatan;
        $tanggalkegiatan = $data->tanggalKegiatan;

        DB::table('schedules')->where('id', $data->id)->update([
            'nama_kegiatan' => $namakegiatan,
            'deskripsi_kegiatan' => $deskripsikegiatan,
            'tanggal_kegiatan' => $tanggalkegiatan
        ]);

        return redirect('/homeadmin');
    }

    public function jadwalDelete(Request $data)
    {
        DB::table('schedules')->where('id', $data->id)->delete();

        return redirect('/homeadmin');
    }
}
