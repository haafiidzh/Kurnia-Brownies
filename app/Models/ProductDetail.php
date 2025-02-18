<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    
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
    protected $fillable = ['value', 'product_id'];

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

    /**
     * Get the product that owns the detail.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
