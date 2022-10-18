<?php

namespace App\Repositories\Car;

use App\Models\Car;
use App\Repositories\RepositoryEloquent;

class CarRepositoryEloquent extends RepositoryEloquent implements CarRepositoryInterface {
    protected Car $car;
    public function __construct(Car $car)
    {
        parent::__construct($car);
        $this->car = $car;
    }

    public function associateToUser($id, $userId)
    {
        $car = $this->getOrFail($id);
        $car->owner()->associate($userId)->save();
        return $car;
    }

    public function disassociate($id)
    {
        $car = $this->getOrFail($id);
        $car->owner()->disassociate()->save();
        return $car;
    }
}
