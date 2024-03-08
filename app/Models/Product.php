<?php

namespace App\Models;

use AnisAronno\MediaGallery\Traits\HasMedia;
use App\Enums\Status;
use App\Helpers\UniqueSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
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
    protected $fillable = ['title', 'long_description', 'short_description', 'slug', 'status', 'is_featured', 'brand_id', 'original_price', 'price'];

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function skus(): HasMany
    {
        return $this->hasMany(Sku::class);
    } 

    public function attributeOptions(): BelongsToMany
    {
        return $this->belongsToMany(AttributeOption::class, 'attribute_option_sku', 'attribute_option_id', 'sku_id');
    }

    protected $appends = ['attributes_with_options'];

    public function getAttributesWithOptionsAttribute()
    {
        $skus = $this->skus->load('attributeOptions.attribute');

        $attributesWithOptions = [];

        foreach ($skus as $sku) {
            foreach ($sku->attributeOptions as $option) {
                $attrId = $option->attribute->id;

                if (!isset($attributesWithOptions[$attrId])) {
                    $attributesWithOptions[$attrId] = [
                        'attribute' => $option->attribute->name,
                        'options' => [],
                    ];
                }
                $attributesWithOptions[$attrId]['options'][] = $option->value;
            }
        }

        return $attributesWithOptions;
    }
}
