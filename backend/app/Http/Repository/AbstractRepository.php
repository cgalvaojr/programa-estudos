<?php

namespace App\Http\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function with($relations)
    {
        return $this->model->with($relations);
    }

    /**
     * Pesquisa por um critério
     * @param $arrData
     * @return Object
     */
    public function findBy($arrData)
    {
        $strModel = $this->model->getTable();
        return DB::table($strModel)->where($arrData)->get();
    }

    /**
     * Remove um registro por um critério
     * @param $arrData
     * @return AbstractRepository
     */
    public function deleteBy($arrData)
    {
        $strModel = $this->model->getTable();
        DB::table($strModel)->where($arrData)->delete();
        return $this;
    }

    /**
     * Retorna um objeto pronto para rodar um SQL
     * @return \Illuminate\Database\Query\Builder
     */
    public function getQueryBuilder()
    {
        return DB::table($this->model->getTable());
    }
}
