<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'barcode', 'category_id', 'purchase_price',
        'sale_price', 'minimum_stock', 'image_path'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
