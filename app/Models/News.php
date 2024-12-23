<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'subject',
        'image',
        'is_active',
        'published_at',
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

    // Relation News Detail Table
    public function detail()
    {
        return $this->hasMany(NewsDetail::class, 'news_id', 'id');
    }
}
