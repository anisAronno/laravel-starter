<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'province', 'city', 'area', 'country', 'note', 'user_id', 'type'];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
