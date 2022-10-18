<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;

class UserController extends Controller
{
    protected UserService $userService;
    public function __construct(UserService $userService)
    {
        parent::__construct($userService);
        $this->userService = $userService;
    }
}
