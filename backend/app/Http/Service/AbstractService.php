<?php

namespace App\Http\Service;

class AbstractService
{

    protected $repository;

    /**
     * @param array $arrParams
     * @return Object
     */
    public function findBy(array $arrParams)
    {
        return $this->repository->findBy($arrParams);
    }

    public function deleteBy(array $arrParams)
    {
        return $this->repository->deleteBy($arrParams);
    }
}
