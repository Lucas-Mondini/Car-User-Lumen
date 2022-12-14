<?php


namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function __construct(User $user);
}
