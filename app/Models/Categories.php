<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     * The primary key type for the model.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'group',
        'slug',
        'description',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        // Generate UUID saat creating
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::random(6);
            }
        });
    }

    // Relation Product Table
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
    
    // Relation News Table
    public function news()
    {
        return $this->hasMany(News::class, 'category');
    }
}
