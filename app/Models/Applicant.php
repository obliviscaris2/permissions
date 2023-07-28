<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Applicant extends Model
{
    use HasFactory;

    protected $table = 'applicants';

    protected $fillable =[
        'registration_id',
        'first_name',
        'middle_name',
        'last_name',
        'permanent_address',
        'ward_no',
        'local_govn',
        'district',
        'state',
        'contact_no',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    public function offender(): HasOne
    {
        return $this->hasOne(Offender::class);
    }
}
