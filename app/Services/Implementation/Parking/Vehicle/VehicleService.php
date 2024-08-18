<?php

namespace App\Services\Implementation\Parking\Vehicle;

use App\DTO\Parking\VehicleTypeDTO;
use App\Interfaces\Parking\Vehicle\VehicleRepositoryInterface;
use App\Interfaces\Parking\Vehicle\VehicleServiceInterface;

final class VehicleService implements VehicleServiceInterface
{

    public function __construct(private VehicleRepositoryInterface $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    /**
     * ${CARET}
     *
     * @return mixed
     *
     * @deprecated
     *
     * @version may 2024
     * @see <comment if the code comes from outside project>
     * @todo
     */
    public function getTypes(): VehicleTypeDTO
    {
        //TODO: Delete mock
        $langId = config('langs.english');
        return $this->vehicleRepository->getTypes($langId);
    }
}
