<?php

namespace App\Http\Repository;

use Illuminate\Database\Eloquent\Model;

class Assunto extends AbstractRepository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}
