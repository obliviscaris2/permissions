<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Registration;
use App\Models\Applicant;


class Offender extends Model
{
    use HasFactory;
    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }
}
