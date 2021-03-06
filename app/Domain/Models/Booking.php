<?php

namespace VaiQueCompra\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id', 'voucher_id', 'value', 'used'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function voucher() {
        return $this->belongsTo(Voucher::class);
    }
}
