<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Applicant;
use App\Models\Offender;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Registration extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applicant(): HasOne
    {
        return $this->hasOne(Applicant::class);
    }

    public function offender():HasOne
    {
        return $this->hasOne(Offender::class);
    }

    public function transaction():HasOne
    {
        return $this->hasOne(Transaction::class);
    }
    
    public function discussion(): BelongsToMany
    {
        return $this->belongsToMany(Discussion::class, 'registration_discussion', 'registration_id', 'discussion_id');
    }
   
   
}
