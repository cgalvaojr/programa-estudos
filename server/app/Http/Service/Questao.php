<?php
namespace App\Http\Service;

use App\Http\Repository\Questao as QuestaoRepository;
use App\Models\Questao as QuestaoModel;
use Illuminate\Support\Collection;

class Questao extends AbstractService
{
    protected $repository;

    public function __construct()
    {
        $this->repository = new QuestaoRepository(new QuestaoModel());
    }

    public function listarQuestoes(): Collection
    {
        return $this->repository->findBy();
    }
}
