<?php


namespace App\Repositories\Car;

use App\Models\Car;
use App\Repositories\RepositoryInterface;

interface CarRepositoryInterface extends RepositoryInterface
{
    public function __construct(Car $car);
    public function associateToUser($id, $userId);
    public function disassociate($id);
}
