<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hostel extends Model
{
    use HasFactory;
    public $fillable = ["hostel_name","room_number","room_tyPe","number_bed","cost_bed"];
}
