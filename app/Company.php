<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id', 'name', 'cnpj'
    ];

    public function user() {
        $this->belongsTo(User::class);
    }

    public function sales() {
        $this->hasMany(Sale::class);
    }
}
