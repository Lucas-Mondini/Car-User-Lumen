<?php

namespace App\Services;

use App\Repositories\RepositoryInterface;

class Service {

    protected RepositoryInterface $repo;

    public function __construct(RepositoryInterface $repo){
        $this->repo = $repo;
    }
    public function store(array $data){
        return $this->repo->store($data);
    }
    public function getList(){
        return $this->repo->getList();
    }
    public function get($id){
        return $this->repo->get($id);
    }
    public function update($id, array $data){
        return $this->repo->update($id, $data);
    }
    public function destroy($id){
        return $this->repo->destroy($id);
    }
}
