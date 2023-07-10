<?php

namespace App\Models;

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

    /**
     * Get all of the getComments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getComments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    use SoftDeletes;
}
