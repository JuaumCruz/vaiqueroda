<?php

namespace VaiQueCompra\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id', 'name', 'cnpj', 'presentation', 'image'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
