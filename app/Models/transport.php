<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transport extends Model
{
    use HasFactory;
    public $fillable = ['route_name','vehicle_number','driver_name','license_number','phone_number'];
}
