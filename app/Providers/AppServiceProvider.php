<?php

namespace App\Providers;

use App\Interfaces\Parking\Vehicle\VehicleTypeRepositoryInterface;
use App\Repositories\Parking\Vehicle\VehicleTypeRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VehicleTypeRepositoryInterface::class, VehicleTypeRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
