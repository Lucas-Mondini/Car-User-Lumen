<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;
use App\Services\Service;
use Illuminate\Support\Facades\Hash;

class UserService extends Service {
    protected UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $repository) {
        parent::__construct($repository);
        $this->userRepository = $repository;
    }

    public function store(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return parent::store($data);
    }
    public function update($id, array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return parent::update($id, $data);
    }
}
