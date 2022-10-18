<?php

namespace App\Repositories;

interface RepositoryInterface {
    public function store(array $data);
    public function getList();
    public function get($id);
    public function getOrFail($id);
    public function update($id, array $data);
    public function destroy($id);
}
