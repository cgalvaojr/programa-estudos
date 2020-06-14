<?php
namespace App\Http\Service;

use App\Http\Repository\Banca as BancaRepository;
use App\Models\Banca as BancaModel;

class Banca extends AbstractService
{
    protected $repository;

    public function __construct()
    {
        $this->repository = new BancaRepository(new BancaModel());
    }

    public function listarBancas()
    {
        return $this->repository->all();
    }
}
