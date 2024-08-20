<?php

namespace Database\Seeders;

use App\Models\Parking\VehicleTypeLang;
use Exception;
use Illuminate\Database\Seeder;

final class VehicleTypeLangSeeder extends Seeder
{
    /**
     * @var array
     */
    private array $langs;

    /**
     * Class Constructor
     */
    public function __construct()
    {
        $this->langs = [
            [
                'name' => 'Car',
                'vehicle_type_id' => config('parking.vehicle.types.car'),
                'lang_id' => config('langs.english')
            ],
            [
                'name' => 'Coche',
                'vehicle_type_id' => config('parking.vehicle.types.car'),
                'lang_id' => config('langs.spanish')
            ],
            [
                'name' => 'Motorbike',
                'vehicle_type_id' => config('parking.vehicle.types.motorbike'),
                'lang_id' => config('langs.english')
            ],
            [
                'name' => 'Motocicleta',
                'vehicle_type_id' => config('parking.vehicle.types.motorbike'),
                'lang_id' => config('langs.spanish')
            ],

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
        foreach ($this->langs as $lang) {
            VehicleTypeLang::updateOrCreate($lang);
        }
    }
}
