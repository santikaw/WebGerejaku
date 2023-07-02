<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\berita;
use App\Models\schedules;

class admin extends Model
{
    use HasFactory;

    public function berita()
    {
        return $this->hasMany(berita::class);
    }

    public function schedules()
    {
        return $this->hasMany(schedules::class);
    }

}
