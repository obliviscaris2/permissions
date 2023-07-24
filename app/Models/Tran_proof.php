<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tran_proof extends Model
{
    use HasFactory;

    protected $fillable= ['title'];


    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }
}
