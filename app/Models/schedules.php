<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\admin;

class schedules extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function admin()
    {
        return $this->hasMany(admin::class);
    }
}
