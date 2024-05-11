<?php

namespace App\Models\Parking;

use App\Models\Lang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class VehicleTypeLang extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'vehicle_type_id', 'lang_id'];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }

}
