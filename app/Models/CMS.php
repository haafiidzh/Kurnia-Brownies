<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'cms';

    // Tentukan kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'group',
        'label',
        'slug',
        'value',
        'type',
    ];

    // Tentukan kolom yang harus di-cast ke tipe data tertentu, jika diperlukan
    protected $casts = [
        'value' => 'string',
    ];
}
