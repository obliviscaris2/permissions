<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function localGovernments()
    {
        return $this->hasMany(LocalGovernment::class);
    }

    /**
     * Getting the users belonging to this district.
    */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
