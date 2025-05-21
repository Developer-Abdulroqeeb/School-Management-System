<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academicsession extends Model
{
    use HasFactory;
    
    public $fillable = ['term','academicsession','starting_date','ending_date'];
}
