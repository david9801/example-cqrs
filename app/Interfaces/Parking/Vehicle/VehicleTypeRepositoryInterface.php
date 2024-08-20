<?php

namespace App\Interfaces\Parking\Vehicle;

use App\Models\Parking\VehicleType;

interface VehicleTypeRepositoryInterface
{
    public function save(array $vehicle): VehicleType;
    public function search(int $id): ?VehicleType;
}
