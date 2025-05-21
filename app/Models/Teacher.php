<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $fillable = ['firstname',"lastname","gender","dateofbirth",
"religion","Email","classteacher","role","address","phone","password","username",
"salary","starting_date","account_name","account_number","profileImage"];
}
