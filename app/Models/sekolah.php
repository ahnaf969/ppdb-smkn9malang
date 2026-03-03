<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    protected $fillable = ['nama_sekolah', 'email', 'no_tlp', 'alamat'];
}
