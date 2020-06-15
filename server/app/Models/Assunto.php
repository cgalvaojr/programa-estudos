<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assunto extends Model
{
    protected $table = 'tb_assunto';
    protected $primaryKey = 'id_assunto';

    public $timestamps = false;

    protected $fillable = [
        'no_assunto',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function assuntoPai()
    {
        return $this->hasOneThrough(
            Assunto::class,
            ArvoreAssunto::class,
            'id_assunto_filho',
            'id_assunto',
            'id_assunto',
            'id_assunto_pai'
        );
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAssuntosPai($query): \Illuminate\Database\Eloquent\Builder
    {
        return $query->doesntHave('assuntoPai');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function assuntosFilhos() : BelongsToMany
    {
        return $this->belongsToMany(
            Assunto::class,
            'tb_arvore_assunto',
            'id_assunto_pai',
            'id_assunto_filho',
            'id_assunto',
            'id_assunto'
        )->withCount('questoes');
    }

    /**
     * @param array $arrParam
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questoes(): HasMany
    {
        $questoes = $this->hasMany(
            Questao::class,
            'id_assunto',
            'id_assunto'
        );

        return $questoes;
    }

    /**
     * @param array $params
     * @return int
     */
    public function countQuestoes(array $params = []): int
    {
        $filhos = $this->assuntosFilhos()->get();
        $qtdQuestoes = $this->questoes($params)->count();
        if ($filhos->isNotEmpty()) {
            foreach ($filhos as $filho) {
                $qtdQuestoes += $filho->countQuestoes($params);
            }
        }
        return $qtdQuestoes;
    }

}
