<?php

namespace App\Repositories\Parking\Vehicle;

use App\Interfaces\Parking\Vehicle\VehicleTypeRepositoryInterface;
use App\Models\Parking\VehicleType;

final class VehicleTypeRepository implements VehicleTypeRepositoryInterface
{

    public function save(array $vehicle): VehicleType
    {
        return VehicleType::updateOrCreate($vehicle);
    }

    public function search(int $id): VehicleType
    {
        return VehicleType::find($id);
    }
}
