<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArvoreAssunto extends Model
{
    protected $table = 'tb_arvore_assunto';
    protected $primaryKey = 'id_arvore_assunto';

    public $timestamps = false;

    protected $fillable = [
        'id_assunto_pai',
        'id_assunto_filho',
    ];

    public function assuntoPai()
    {
        return $this->hasOne(
            Assunto::class,
            'id_assunto',
            'id_assunto_pai'
        );
    }

    public function assuntoFilho()
    {
        return $this->hasOne(
            Assunto::class,
            'id_assunto',
            'id_assunto_filho'
        );
    }
}
