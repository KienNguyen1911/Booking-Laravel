<?php

abstract class BaseService
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->model();
    }

    abstract public function model();

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $record = $this->model->find($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        $record = $this->model->find($id);
        $record->delete();
        return $record;
    }
}
