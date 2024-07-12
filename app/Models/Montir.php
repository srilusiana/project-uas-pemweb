<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
    use HasFactory;

    protected $table = 'montir';
    protected $fillable = ['nomor', 'nama', 'gender', 'tgl_lahir', 'tmp_lahir', 'keahlian'];
}
