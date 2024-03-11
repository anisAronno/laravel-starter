<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sku extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'code', 'regular_price', 'selling_price', 'quantity', 'weight', 'dimensions'];

    protected $cast = [
        'dimensions' => 'array',
    ];

    protected function price(): Attribute
    {
        return Attribute::make(get: static fn($value) => $value / 100, set: static fn($value) => $value * 100);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function attributeOptions(): BelongsToMany
    {
        return $this->belongsToMany(AttributeOption::class);
    }
}
