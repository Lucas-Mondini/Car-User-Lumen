<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Car\CarService;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected CarService $userService;
    public function __construct(CarService $userService)
    {
        parent::__construct($userService);
        $this->userService = $userService;
    }

    public function associateToUser(Request $request, $id) {
        return $this->userService->associateToUser($id, $request->userId);
    }
    public function disassociate($id) {
        return $this->userService->disassociate($id);
    }
}
