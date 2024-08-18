<?php

namespace App\Repositories\Parking\Vehicle;

use App\DTO\Parking\VehicleTypeDTO;
use App\Interfaces\Parking\Vehicle\VehicleRepositoryInterface;
use App\Models\Parking\VehicleTypeLang;

final class VehicleRepository implements VehicleRepositoryInterface
{

    /**
     * ${CARET}
     *
     * @param $langId
     * @return mixed
     *
     * @version may 2024
     * @deprecated
     *
     * @see <comment if the code comes from outside project>
     * @todo
     */
    public function getTypes($langId): VehicleTypeDTO
    {
        $types = VehicleTypeLang::where('lang_id', $langId)->get(['name', 'vehicle_type_id']);

        return $types->map(function ($result) {
            return (new VehicleTypeDTO($result->name, $result->vehicle_type_id))
                ->toArray();
        });
    }}
