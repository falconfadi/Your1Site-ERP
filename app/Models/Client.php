<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function ledgersRecords()
    {
        return $this->hasMany(LedgerRecord::class,'account_id')
            ->where(['account_type'=>$this::class]);
    }

    public function getfullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
