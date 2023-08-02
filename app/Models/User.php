<?php

namespace App\Models;

use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'district_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role');
    }

    public static function isAdmin()
    {
        if (Auth::user()->role == 2) {
            return true;
        } else return false;
    }

    public static function isSuperAdmin()
    {
        if (Auth::user()->role == 1) {
            return true;
        } else return false;
    }

    public function registration()
    {
        return $this->hasMany(Registration::class);
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    public function offenders()
    {
        return $this->hasMany(Offender::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    /**
        * Getting the district that the user belongs to.
    */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    
    use SoftDeletes;
}
