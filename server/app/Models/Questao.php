<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'tb_questao';
    protected $primaryKey = 'id_questao';

    public $timestamps = false;

    protected $fillable = [
        'id_assunto',
        'id_orgao',
        'id_banca',
        'ds_questao',
    ];
}
