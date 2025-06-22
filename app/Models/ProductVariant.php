<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariant extends Model
{
    protected $fillable = [
        'product_id',
        'size_id',
        'color_id',
        'stock',
        'sku',
    ];

    // Relasi ke produk utama
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // Relasi ke ukuran (nullable)
    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    // Relasi ke warna (nullable)
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
