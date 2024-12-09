<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsDetail extends Model
{
    use HasFactory;
    // Kalau pakai uuid berikan syntax seperti ini
    public $incrementing = false;
    protected $keyType = 'string';
    // End

    protected $fillable = ['value', 'news_id'];

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
    public function news()
    {
        return $this->belongsTo(News::class, 'news_id', 'id');
    }
}