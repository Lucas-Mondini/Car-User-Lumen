<?php

namespace App\Services\Car;

use App\Repositories\Car\CarRepositoryInterface;
use App\Services\Service;

class CarService extends Service {
    protected CarRepositoryInterface $carRepository;

    public function __construct(CarRepositoryInterface $carRepository) {
        parent::__construct($carRepository);
        $this->carRepository = $carRepository;
    }

    public function associateToUser($id, $userId)
    {
        return $this->carRepository->associateToUser($id, $userId);
    }

    public function disassociate($id)
    {
        return $this->carRepository->disassociate($id);
    }
}
