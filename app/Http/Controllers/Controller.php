<?php

namespace App\Http\Controllers;

use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Lumen\Routing\Controller as BaseController;
use SebastianBergmann\Environment\Console;

abstract class Controller extends BaseController
{
    private Service $service;

    public function __construct($service){
        $this->service = $service;
    }

    public function create(Request $request){
        return $this->service->store(
            $request->all()
        );
    }

    public function index(){
        return $this->service->getList();
    }

    public function get($id){
        return $this->service->get($id);
    }

    public function update(Request $request, $id){
        return $this->service->update($id, $request->all());
    }

    public function delete($id){
        return $this->service->destroy($id);
    }
}
