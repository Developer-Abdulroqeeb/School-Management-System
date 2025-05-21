<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolfee extends Model
{
    use HasFactory ;
    public $fillable = ['amount','class','session','term','account_number','account_name','package_type'];
}
