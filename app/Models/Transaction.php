<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'tran_date',
        'tran_nature_id',
        'tran_proof_id',
        'tran_amount',
        'tran_purpose_id', 

    ];



    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    public function tranPurpose(): BelongsToMany
    {
        return $this->belongsToMany(Tran_purpose::class, 'transaction_tran_purpose', 'transaction_id', 'tran_purpose_id');
    }

    public function tranNature(): BelongsToMany
    {
        return $this->belongsToMany(Tran_nature::class, 'transaction_tran_nature', 'transaction_id', 'tran_nature_id');
    }
    public function tranProof(): BelongsToMany
    {
        return $this->belongsToMany(Tran_proof::class, 'transaction_tran_proof', 'transaction_id', 'tran_proof_id');
    }
}
