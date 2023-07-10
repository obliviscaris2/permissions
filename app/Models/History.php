<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'user_id',
        'type',
        'ip_address'
    ];
    protected $table = 'history';
}
