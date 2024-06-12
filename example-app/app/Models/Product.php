<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'photo',
    ];

    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }

    public function buy()
    {
        return $this->belongsTo(Basket::class);
    }
}
