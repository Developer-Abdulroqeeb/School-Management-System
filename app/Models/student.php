<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    // protected $table = 'student-information';
    public $fillable = ["FirstName","LastName","OtherName","Gender","DateOfBirth",
    "class","Phone","ShortBIO","religion","blood","email","address","password",
    "username","year_admitted","housing_mode","hostel","transport","room_number","session","term"];
}
