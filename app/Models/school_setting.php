<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_setting extends Model
{
    use HasFactory;
    public $fillable = ['SchoolName','SchoolImage','SchoolMotto','SchoolLocation','SchoolAbr',"SchoolMail","SchoolBox","SchoolPhone"];
}
