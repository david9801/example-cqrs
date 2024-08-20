<?php

namespace Database\Seeders;

use App\Models\Lang;
use Exception;
use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
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
                'internal_name' => 'Castellano',
                'iso_code' => 'es_ES',
                'active' => 1,
            ],
            [
                'internal_name' => 'English',
                'iso_code' => 'en',
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
        foreach ($this->langs as $lang) {
            Lang::updateOrCreate($lang);
        }
    }
}
