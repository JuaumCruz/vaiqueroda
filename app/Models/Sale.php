<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'company_id', 'name', 'description', 'due_date', 'daily_limit', 'minimum_users', 'value'
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function vouchers() {
        return $this->hasMany(Voucher::class);
    }
}
