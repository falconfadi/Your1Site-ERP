<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cashier_id',
        'belongTo_id',
        'belongTo_type',
        'type',
        'amount',
        'remaining',
        'created_by',
        'is_payed'
    ];

    protected $transaction_type = [1 => 'Deposit', 2 => 'Withdraw'];

    public function getType()
    {
        return $this->transaction_type[$this->type];
    }

    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class)->orderBy('created_at', 'desc');
    }

    public function belongTo()
    {
        return $this->morphTo(__FUNCTION__,'belongTo_type','belongTo_id');
    }
}
