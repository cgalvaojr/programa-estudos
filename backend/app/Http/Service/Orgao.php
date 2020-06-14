<?php
namespace App\Http\Service;

use App\Http\Repository\Orgao as OrgaoRepository;
use App\Models\Orgao as OrgaoModel;

class Orgao extends AbstractService
{
    protected $repository;

    public function __construct()
    {
        $this->repository = new OrgaoRepository(new OrgaoModel());
    }

    public function listarOrgaos()
    {
        return $this->repository->all();
    }
}
