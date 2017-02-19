<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'birth_date', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function companies() {
        return $this->hasMany(Company::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function vouchers() {
        return $this->hasMany(Voucher::class);
    }
}
