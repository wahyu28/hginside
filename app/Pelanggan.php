<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama', 'email', 'telepon', 'provinsi', 'kota', 'kodepos', 'alamat'
    ];
}
