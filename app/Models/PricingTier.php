<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingTier extends Model
{
    use HasFactory;
    protected $fillable = ['sku_id', 'attribute_options_combination', 'price'];

    protected $casts = [
        'attribute_options_combination' => 'array', // Ensure Laravel casts this to/from JSON automatically
    ];

    public function sku()
    {
        return $this->belongsTo(Sku::class);
    }
}
