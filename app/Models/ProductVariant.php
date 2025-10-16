<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id', 'variant_id', 'value'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
