<?php

namespace Tests\Unit\Codely\TestCourse;

use App\Interfaces\Parking\Vehicle\VehicleTypeRepositoryInterface;
use App\Models\Parking\VehicleType;
use App\Repositories\Parking\Vehicle\VehicleTypeRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\TestCase;

class ParkingTypeRepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_should_save_a_vehicle_type()
    {
       // $vehicleTypeRepository = app(VehicleTypeRepositoryInterface::class);
        $vehicleTypeRepository = new VehicleTypeRepository();
        $vehicleTypeData = [
            'id' => 10,
            'internal_name' => 'vehicle_test',
            'active' => false
        ];
        //$vehicleType = $vehicleTypeRepository->save($vehicleTypeData);

        $this->assertEquals(1, VehicleType::find(1)->id);
    }
}
