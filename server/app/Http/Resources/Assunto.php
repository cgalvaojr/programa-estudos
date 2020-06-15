<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Assunto extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_assunto' => $this->id_assunto,
            'no_assunto' => $this->no_assunto,
            'assunto_pai' => $this->assuntoPai,
            'assuntos_filhos' => $this->assuntosFilhos,
            'qtd_questoes' => $this->countQuestoes($request->all())
        ];
    }
}
