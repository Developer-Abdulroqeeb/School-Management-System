<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_history extends Model
{
    use HasFactory;
    public $fillable = ['child_id','expense_id','amount'];
}
