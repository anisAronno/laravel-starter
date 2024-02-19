<?php

namespace App\Models;

use App\Helpers\UniqueSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Brand extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = ['name', 'slug'];

        /**
     * Override the default boot method to register some extra stuff for every child model.
     */
    protected static function boot()
    {
        static::creating(function ($model) {
            $model->slug = UniqueSlug::generate($model, 'slug', $model->name);
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


    public function products() : HasMany
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
