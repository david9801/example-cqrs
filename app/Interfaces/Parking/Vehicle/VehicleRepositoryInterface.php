<?php

namespace App\Interfaces\Parking\Vehicle;

use App\DTO\Parking\VehicleTypeDTO;

interface VehicleRepositoryInterface
{
    public function getTypes($langId): VehicleTypeDTO;
}
