<?php

namespace App\Interfaces\Parking\Vehicle;

use App\DTO\Parking\VehicleTypeDTO;

interface VehicleServiceInterface
{
    public function getTypes(): VehicleTypeDTO;
}
