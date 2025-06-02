<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    use HasFactory;
    public $fillable = ['parent_id','child_id','receipt_image','payment_for','term','session','class','status','description','amount'];
}
