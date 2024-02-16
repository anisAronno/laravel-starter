<?php

namespace App\Models;

use AnisAronno\MediaGallery\Traits\HasMedia;
use App\Enums\Status;
use App\Helpers\UniqueSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Category extends Model
{
    use HasFactory;
    use HasMedia;
    use LogsActivity;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'status',
        'is_featured',
        'slug',
        'parent_id',
    ];

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
            ->logOnly(['title', 'description', 'status'])
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

    /**
     * Mapping For Sub and sub-sub category.
     */
    public static function tree()
    {
        $allCategories = self::get();

        $rootCategories = $allCategories->whereNull('parent_id');

        self::formatTree($rootCategories, $allCategories);

        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories)
    {
        foreach ($categories as $category) {
            $category->children = $allCategories->where('parent_id', $category->id)->values();

            if ($category->children->isNotEmpty()) {
                self::formatTree($category->children, $allCategories);
            }
        }
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }
}
