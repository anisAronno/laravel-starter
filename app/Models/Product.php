<?php

namespace App\Models;

use AnisAronno\MediaGallery\Traits\HasMedia;
use App\Enums\Status;
use App\Helpers\UniqueSlug;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model
{
    use HasFactory;
    use HasMedia;
    use LogsActivity;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'long_description', 'short_description', 'slug', 'status', 'is_featured', 'has_variation', 'brand_id'];

    /**
     * Override the default boot method to register some extra stuff for every child model.
     */
    protected static function boot()
    {
        static::creating(function ($model) {
            $model->slug = UniqueSlug::generate($model, 'slug', $model->title);
        });

        parent::boot();
    }

    protected static $recordEvents = ['deleted', 'created', 'updated'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'short_description', 'long_description', 'status'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => Status::class,
    ];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable')->withTimestamps();
    }

    public function variations(): HasMany
    {
        return $this->hasMany(Variation::class, 'product_id', 'id');
    }

    public function variation(): HasOne
    {
        return $this->hasOne(Variation::class, 'product_id', 'id')->latest('id');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class,  'brand_id', 'id');
    }

    /**
     * If product has variations.
     */
    public function scopeHasVariations($query)
    {
        return $query->where('has_variation', 1);
    }
}
