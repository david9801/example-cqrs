<?php

namespace Database\Seeders;

use App\Models\Parking\VehicleType;
use Exception;
use Illuminate\Database\Seeder;

final class VehicleTypeSeeder extends Seeder
{
    /**
     * @var array
     */
    private array $types;

    /**
     * Class Constructor
     */
    public function __construct()
    {
        $this->types = [
            [
                'internal_name' => 'car',
                'active' => 1,
            ],
            [
                'internal_name' => 'motorbike',
                'active' => 1,
            ]
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        foreach ($this->types as $type) {
            VehicleType::updateOrCreate($type);
        }
    }
}
