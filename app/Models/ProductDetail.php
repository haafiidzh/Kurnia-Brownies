<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'product_id'];

    // /**
    //  * The primary key type is not an integer.
    //  *
    //  * @var string
    //  */
    // protected $keyType = 'string';

    /**
     * Get the product that owns the detail.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
