<?php
namespace App\Http\Service;

use App\Http\Repository\Assunto as AssuntoRepository;
use App\Models\Assunto as AssuntoModel;

class Assunto extends AbstractService
{
    protected $repository;

    public function __construct()
    {
        $this->repository = new AssuntoRepository(new AssuntoModel());
    }

    public function listarAssuntos()
    {
        return $this->repository->getModel()->assuntosPai()->get();
    }
}
