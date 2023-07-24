<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Discussion extends Model
{
    use HasFactory;


    public function registrations(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
}
