<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

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
        'slug',
        'keywords',
        'image',
        'short_description',
        'description',
        'best_seller',
        'category_id',
    ];

    // BUAT UUID
    // Kalau mau custom format uuid berikan code ini
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
    // End

    // Relation Category Table
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    // Relation Product Detail Table
    public function detail()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }
}
