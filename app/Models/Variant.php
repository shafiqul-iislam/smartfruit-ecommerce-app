<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{    
    protected $fillable = [
        'name',
        'values',
    ];

    protected $casts = [
        'values' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_variants')
            ->withPivot('value');
    }
}
