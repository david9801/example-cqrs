<?php

namespace App\Http\Controllers\Parking;

use App\Http\Controllers\Controller;
use App\Interfaces\Parking\Vehicle\VehicleServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class VehicleController extends Controller
{
    public function __construct(private VehicleServiceInterface $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    public function getTypes()
    {
        try {
            $types = $this->vehicleService->getTypes();

            return response($types)->json($types, Response::HTTP_OK);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
