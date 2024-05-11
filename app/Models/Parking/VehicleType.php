<?php

namespace App\Models\Parking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class VehicleType extends Model
{
    use HasFactory;
    protected $fillable = ['internal_name', 'active'];

    public $timestamps = false;

    public function vehicleTypeLangs()
    {
        return $this->hasMany(VehicleTypeLang::class);
    }

}
