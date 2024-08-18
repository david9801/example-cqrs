<?php

namespace App\DTO\Parking;

readonly final class VehicleTypeDTO
{
    protected string $type;
    protected int $vehicleId;

    /**
     * @param string $type
     * @param int $vehicleId
     */
    public function __construct(string $type, int $vehicleId)
    {
        $this->type = $type;
        $this->vehicleId = $vehicleId;
    }

    public function toArray()
    {
        return [
            'id' => $this->getType(),
            'name' => $this->getVehicleId()
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getVehicleId(): int
    {
        return $this->vehicleId;
    }


}
