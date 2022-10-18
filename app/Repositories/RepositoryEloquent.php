<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class RepositoryEloquent implements RepositoryInterface {

    protected Model $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function store(array $data){
        return $this->model->create($data);
    }
    public function getList(){
        return $this->model->all();
    }
    public function get($id){
        return $this->model->find($id);
    }
    public function getOrFail($id){
        return $this->model->findOrFail($id);
    }
    public function update($id, array $data){
        $m = $this->getOrFail($id);
        $m->updateOrFail($data);
        return $m;
    }
    public function destroy($id){
        return $this->getOrFail($id)->delete();
    }
}
