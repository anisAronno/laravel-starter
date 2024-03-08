<?php

namespace App\Models;

use App\Models\AttributeOption;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
 
    public function attributeOptions(): HasMany
    {
        return $this->hasMany(AttributeOption::class);
    }

    public function skus(): BelongsToMany
    {
        return $this->belongsToMany(Sku::class);
    }
}
