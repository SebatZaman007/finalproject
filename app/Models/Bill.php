<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable=[
        // 'billuser_id',
        'billuser_name',
        'billuser_address',
        'billuser_phone',
        'billuser_email'
    ];
}
