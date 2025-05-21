<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentparent extends Model
{
    use HasFactory;
    public $fillable = ['Surname','gender','occupation',
    'religion','email','address','phone','child_name','child_class',"password","username"];
}
