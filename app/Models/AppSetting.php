<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;

    protected $table = 'app_settings';

    protected $fillable = [
        'group',
        'label',
        'key',
        'value',
        'tip',
        'type',
    ];

    protected $casts = [
        'value' => 'string',
    ];
}
