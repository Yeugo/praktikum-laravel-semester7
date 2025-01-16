<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kustomer extends Model
{
    protected $fillable =
    [
        'nik',
        'name',
        'phone',
        'email',
        'alamat',
    ];
}
