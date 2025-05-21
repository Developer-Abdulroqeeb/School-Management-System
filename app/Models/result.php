<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    public $fillable = ["class", "subject","term","session","studentId","test","exam","aggregate"];
}
