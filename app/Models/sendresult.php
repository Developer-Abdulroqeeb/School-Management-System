<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendresult extends Model
{
    use HasFactory;
    public $fillable = ["class",'term',"session","test","exam","studentId","subjectId","aggregate"];
}
