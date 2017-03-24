<?php

namespace VaiQueCompra\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'sale_id', 'user_id', 'code', 'active', 'booking_date'
    ];

    public function sale() {
        return $this->belongsTo(Sale::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
