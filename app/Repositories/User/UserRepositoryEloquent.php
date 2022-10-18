<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\RepositoryEloquent;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRepositoryEloquent extends RepositoryEloquent implements UserRepositoryInterface {
    protected User $user;
    public function __construct(User $user)
    {
        parent::__construct($user);
        $this->user = $user;
    }

    public function getList(){
        $users = parent::getList();
        foreach($users as &$u) {
            $u = $u->cars;
        };
        return $users;
    }

    public function get($id) {
        $user = parent::get($id);
        if($user)
             $user->cars = $user->cars;
        return $user;
    }

    public function update($id, array $data)
    {
        $user = $this->getOrFail($id);
        if(array_key_exists('oldPassword', $data) && Hash::check( $data['oldPassword'], $user['password']))
            return parent::update($id, $data);
        throw new \Exception('invalid old password');
    }
}
