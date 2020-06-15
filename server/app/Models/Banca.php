<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    protected $table = 'tb_banca';
    protected $primaryKey = 'id_banca';

    public $timestamps = false;

    protected $fillable = [
        'no_banca',
    ];
}
